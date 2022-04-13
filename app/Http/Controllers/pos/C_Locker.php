<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_Locker;
use App\Models\M_Lokasi_Locker;
use App\Http\Controllers\pos\getLocker;

class C_Locker extends Controller
{
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
        // $data = $this->getLocker('Pondok Indah Mall, Jakarta Selatan', 'S');
        // print_r($data['loker']);
        $dataList = $this->getLokasi();

        return view('pos/posit/list_locker', ['list' => $dataList]);
    }

    public function viewLocker($id)
    {
        $sizeS = $this->getLocker($id, 'S');
        $sizeM = $this->getLocker($id, 'M');
        $sizeL = $this->getLocker($id, 'L');
        $data = $this->getLokasiById($id);
        if (count($sizeS) != 0 && count($sizeM) != 0 && count($sizeL) != 0) {
            return view('pos/posit/create_locker', ['listlokerS' => $sizeS, 'listlokerM' => $sizeM, 'listlokerL' => $sizeL, 'lokasi' => $data]);
        } else {
            return redirect('pos/booking_locker')->with('status', 'Belum Tersedia, Segera Hadir :)');
        }
    }
}
