<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(){
        $this->middleware('guest', ['only' => 'showLoginForm']);
        // $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(){
        $credentials = $this->validate(request(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)){
            return redirect()->route('home');
        }

        return back()
            ->withErrors(['username' => '¡Las credenciales de acceso son incorrectas!'])
            ->withInput(request(['username']));
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
