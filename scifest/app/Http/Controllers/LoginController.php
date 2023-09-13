<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login.login');
    }

    public function authenticate(Request $request){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $pengguna = [
            'admin' => 'admin',
        ];

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // if(Auth::attempt($credentials)){
        if(isset($pengguna[$username]) && $pengguna[$username] === $password){
            return redirect()->to('/dashboard')->with('status','Berhasil login!');
        }
    }
    
    public function index(){
        return view('login.login');
    }
    
    public function logout(){
        return redirect()->to('/');
    }
}
