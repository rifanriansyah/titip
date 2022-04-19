<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_Locker;
use App\Models\M_Lokasi_Locker;
use App\Models\M_Pemesanan;
use App\Models\M_Rekening;
use App\Models\M_Transaksi;

use App\Http\Controllers\pos\getLocker;
use App\Models\M_User;

class C_Locker extends Controller
{
    public function getPesanan($id)
    {
        $datapesan = M_Pemesanan::where('id_pemesanan', $id)->first();
    }
    public function getLocker($id, $ukuran)
    {
        $dataLocker = M_Locker::where('t_locker.ukuran', $ukuran)
            ->where('id_lokasi_loker', $id)
            ->get();

        return $dataLocker;
    }

    public function getLokasi()
    {
        $dataLokasi = M_Lokasi_Locker::all();
        return $dataLokasi;
    }

    public function getLokasiById($id)
    {
        $dataLokasi = M_Lokasi_Locker::where('id_lokasi_loker', $id)->get();
        return $dataLokasi;
    }

    public function viewListlocker()
    {

        $dataList = $this->getLokasi();

        return view('pos/posit/list_locker', ['list' => $dataList]);
    }

    public function prosesPesanan(Request $req)
    {
        $id_user = $req->session()->get('dataUser');
        $idloc = $req->input('idloc');
        $rek = M_Rekening::where('id_user', $id_user->Id)->first();
        if ($rek->saldo == 0) {
            return redirect('pos/locker/' . $idloc)->with('status', 'Saldo Kosong,Silahkan Top Up Terlebih Dahulu');
        } else {
            $dataUser = $req->session()->get('dataUser');
            $kodeLoker = $req->input('loker');
            $hargaLoker = $req->input('harga');
            $idLoker = $req->input('id_loker');

            $datapesan = count(M_Pemesanan::all());

            if ($datapesan == 0) {
                $uniqKode =  str_replace('-', '_', 'PL1-' . $kodeLoker);
            } else {
                for ($i = 0; $i <= $datapesan; $i++) {
                    $id = $i;
                }
                $newid = $id + 1;
                $uniqKode =  str_replace('-', '_', 'PL' . $newid . '-' . $kodeLoker);
            }

            $data = new M_Pemesanan();
            $data->kode_pesan = $uniqKode;
            $data->nama_pemesan = $dataUser->nama;
            $data->waktu_pemesanan = date("Y-m-d H:i:s");
            $data->total_harga = $hargaLoker;
            $data->status = 'Belum_bayar';
            $data->id_locker = $idLoker;
            $data->id_user = $dataUser->Id;
            $data->delete_date = null;
            $data->save();
            M_Locker::where('kode_loker', $kodeLoker)->update(['status' => 'Tidak_tersedia']);

            return redirect('pos/detail_pesanan/' . $uniqKode);
        }
    }

    public function viewDetailPesanan($uniq)
    {
        $viewData = M_Pemesanan::join('t_locker', 't_pemesanan.id_locker', '=', 't_locker.id_locker')
            ->select('t_pemesanan.*', 't_locker.kode_loker')
            ->where('kode_pesan', $uniq)->get();
        return view('pos/posit/detail_pesanan')->with(['status' => 'Pesanan Berhasil di buat, Silahkan Bayar ', 'pesanan' => $viewData]);
    }

    //! EXPIRED
    public function expPesanan($id, $uniq, $exp, $waktu, $kode)
    {
        M_Pemesanan::where('kode_pesan', $uniq)->update(['waktu_pemesanan' => $waktu, 'SELESAI' => "1", 'EXPIRED' => $exp]);
        M_Locker::where('kode_loker', $kode)->update(['status' => 'Tersedia']);
        $viewData = M_Pemesanan::join('t_locker', 't_pemesanan.id_locker', '=', 't_locker.id_locker')
            ->select('t_pemesanan.*', 't_locker.kode_loker')
            ->where('t_pemesanan.id_user', $id)
            ->where('t_pemesanan.kode_pesan', $uniq)
            ->get();
        return view('pos/posit/detail_pesanan')->with(['status' => 'SUDAH EXPIRED ', 'pesanan' => $viewData]);
    }
    //!

    //? Confirm
    public function confirm(Request $req, $id, $uniq, $waktu, $idpesan)
    {
        M_Pemesanan::where('kode_pesan', $uniq)->update(['waktu_pemesanan' => $waktu, 'status' => 'Sudah_bayar']);
        //
        $pesanan = M_Pemesanan::where('kode_pesan', $uniq)->first();
        $user = $req->session()->get('dataUser');
        $newsaldo = $user->saldo - $pesanan->total_harga;
        M_Rekening::where('id_user', $id)->update(['saldo' => $newsaldo]);
        //
        $data = M_User::join('t_rekening', 'user.Id', '=', 't_rekening.id_user')
            ->where('Id', $id)->first();
        $req->session()->put('dataUser', $data);
        //
        $data = new M_Transaksi();
        $data->id_pemesanan = $idpesan;
        $data->status = 'Berhasil';
        $data->save();
        //
        $viewData = M_Pemesanan::join('t_locker', 't_pemesanan.id_locker', '=', 't_locker.id_locker')
            ->select('t_pemesanan.*', 't_locker.kode_loker')
            ->where('t_pemesanan.id_user', $id)
            ->where('t_pemesanan.kode_pesan', $uniq)
            ->get();
        //
        return view('pos/posit/detail_pesanan')->with(['status' => 'Pembayaran Berhasil', 'pesanan' => $viewData]);
    }
    //?

    //* Selesai
    public function pesananSelesai(Request $req, $id_pesan, $loker, $wkt)
    {
        $id_user = $req->session()->get('dataUser');

        M_Pemesanan::where('id_pemesanan', $id_pesan)->update(['waktu_pemesanan' => $wkt, 'SELESAI' => 1]);
        M_Locker::where('id_locker', $loker)->update(['status' => 'Tersedia']);

        $data = M_Pemesanan::join('t_locker', 't_pemesanan.id_locker', '=', 't_locker.id_locker')
            ->select('t_pemesanan.*', 't_locker.kode_loker')
            ->where('t_pemesanan.id_user', $id_user->Id)
            ->orderBy('t_pemesanan.waktu_pemesanan', 'DESC')
            ->get();

        return view('pos/posit/history')->with('alldata', $data)->with('status', 'terima kasih');

        // $milliseconds = 1000 * strtotime('2022-04-18 10:56:06');
    }
    //*
    public function viewLocker($id)
    {
        $sizeS = $this->getLocker($id, 'S');
        $sizeM = $this->getLocker($id, 'M');
        $sizeL = $this->getLocker($id, 'L');
        $data = $this->getLokasiById($id);
        if (count($sizeS) != 0 && count($sizeM) != 0 && count($sizeL) != 0) {
            return view('pos/posit/create_locker', [
                'listlokerS' => $sizeS,
                'listlokerM' => $sizeM,
                'listlokerL' => $sizeL,
                'lokasi' => $data,
                'idloc' => $id
            ]);
        } else {
            return redirect('pos/booking_locker')->with('status', 'Belum Tersedia, Segera Hadir :)');
        }
    }

    public function viewHistory($id)
    {
        $data = M_Pemesanan::join('t_locker', 't_pemesanan.id_locker', '=', 't_locker.id_locker')
            ->select('t_pemesanan.*', 't_locker.kode_loker')
            ->where('t_pemesanan.id_user', $id)
            ->orderBy('t_pemesanan.waktu_pemesanan', 'DESC')
            ->get();
        return view('pos/posit/history')->with('alldata', $data);
    }

    public function viewDetailHistory($id, $uniq)
    {
        $viewData = M_Pemesanan::join('t_locker', 't_pemesanan.id_locker', '=', 't_locker.id_locker')
            ->select('t_pemesanan.*', 't_locker.kode_loker')
            ->where('t_pemesanan.kode_pesan', $uniq)
            ->where('t_pemesanan.id_user', $id)
            ->get();
        return view('pos/posit/detail_pesanan')->with(['pesanan' => $viewData]);
    }
}
