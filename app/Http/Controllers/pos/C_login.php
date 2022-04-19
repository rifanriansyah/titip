<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\M_User;

class C_login extends Controller
{
    public function page_login()
    {
        return view('pos/login');
    }
    public function proseslogin(Request $req)
    {
        $firstUser = M_User::where('nohp', $req->input('nohp'))->first();
        if ($firstUser->nama == 'user') {
            $data = M_User::where('nohp', $req->input('nohp'))->first();
        } else {
            $data = M_User::join('t_rekening', 'user.Id', '=', 't_rekening.id_user')
                ->where('nohp', $req->input('nohp'))->first();
        }
        if ($data) {
            if (Hash::check($req->input('pin'), $data->pin)) {
                $req->session()->put('HakAkses', true);
                $req->session()->put('dataUser', $data);
                return view('pos/dashboard');
            }
        }
        // return redirect('/')->with('status', 'No hp atau Pin salah');
    }

    public function proseslogout(Request $req)
    {
        $req->session()->flush();
        return redirect('/')->with('status', 'Berhasil LogOut');
    }
}
