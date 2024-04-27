<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->first();

        if ($user && (md5($password) == $user->password)) {
               // Login berhasil
               // Buat sesi atau token login di sini
               csrf_token();
               Auth::login($user);
               return redirect()->intended('dashboard');
        }

        return back()->withErrors([
               'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('login');
    }
 }
