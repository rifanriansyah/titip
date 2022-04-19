<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\M_User;
use Illuminate\Http\Request;

class C_register extends Controller
{
    public function view_regis()
    {
        return view('pos/register');
    }
    public function regis(Request $req)
    {
        $nohp = $req->input('nohp');
        $dataNohp = M_User::select('nohp')->where('nohp', $nohp)->first();
        if (isset($dataNohp->nohp)) {
            return redirect('register')->with(['status' => 'Nohp Sudah Terdaftar']);
        } else {
            return view('pos/register2', ['nohp' => $req->input('nohp')]);
        }
    }

    public function prosesregis(Request $req)
    {
        $data = new M_User();
        $data->nama = "user";
        $data->nohp = $req->input('nohp');
        $data->pin = Hash::make($req->input('pin'));
        $data->create_date = date("Y-m-d H:i:s");
        // if (Hash::check($req->input('pin'), Hash::make($req->input('pin')))) {
        //     print_r('benar');
        // }
        $data->save();

        return redirect('/')->with('status', 'Registrasi Berhasil, Silahkan Login :)');
    }
}
