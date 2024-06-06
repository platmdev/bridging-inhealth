<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->first();
        if ($user && (md5($password) == $user->password)) {
               // Login berhasil
               // Buat sesi atau token login di sini
               csrf_token();
               Auth::login($user);
               return redirect()->intended('home');
        }

        return back()->with([
               'alert' => ['type'=>'error', 'title'=>'Login gagal','msg'=>'Silahkan periksa kembali userame dan password.'],
        ]);
    }

    public function logout(){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('login');
    }
 }
