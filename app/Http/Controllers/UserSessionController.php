<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSessionController extends Controller
{
    function index(){
        $dtAgenda = agenda::paginate(4);
        return view('dashboard.page.home', compact('dtAgenda'));
    }

    function login(){
        return view('login');
    }

    function loginValidate(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Email masih kosong',
            'password.required' => 'Password masih kosong'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin/admin');
            } elseif (Auth::user()->role == 'public'){
                return redirect ('admin/public');
            }

        }else{
            return redirect('')->withErrors('Username or password not match')->withInput();
        };
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}

