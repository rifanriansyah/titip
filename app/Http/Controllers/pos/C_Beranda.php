<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_User;
use App\Models\M_Rekening;


class C_Beranda extends Controller
{
    public function viewberanda()
    {
        return view('pos/dashboard');
    }

    public function saveName(Request $req)
    {

        $nama = $req->input('nama');
        $NIK = $req->input('nik');

        // ? upload file
        $file = $req->file('ktp');
        $namafile = str_replace(" ", "-", $req->input('nama')) . "-ktp." . $file->getClientOriginalExtension();

        $check = $file->move(\base_path() . "/public/images", $namafile);
        if ($check) {
            M_User::where('Id', $req->input('id'))
                ->update([
                    'nama' => $nama,
                    'NIK' => $NIK,
                    'foto_nik' => $namafile,
                    'update_date' => date("Y-m-d H:i:s")
                ]);
            $dataRek = new M_Rekening();
            $dataRek->id_user = $req->input('id');
            $dataRek->save();
        }
        $data = M_User::join('t_rekening', 'user.Id', '=', 't_rekening.id_user')
            ->where('Id', $req->input('id'))->first();
        $req->session()->put('data', $data);
        return redirect('pos/beranda')->with(['status' => 'Data Berhasil Disimpan!']);
    }
}
