<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    
    public function show()
    {
        return view('login.show');
    }

    public function login(Request $request)
    {
        $login = $request->email;
        $password = $request->password;
        $credentials = ['email' => $login, 'password' => $password];
        if (Auth::attempt($credentials)) {
            switch (auth()->user()->role) {
                case "passager":
                    $request->session()->regenerate();
                    return redirect()->route('homePage')->with('success', 'Vous êtes bien connecté ' . $login . ".");
                    break;
                case 'cheffeur':
                    $request->session()->regenerate();
                    return redirect()->route('homePage')->with('success', 'Vous êtes bien connecté ' . $login . ".");
                    break;
                case 'admin':
                    $request->session()->regenerate();
                    return redirect()->route('admin.index')->with('success', 'Vous êtes bien connecté ' . $login . ".");
                    break;
                default:
                    return back()->withErrors([
                        'email' => 'Email ou mot de passe incorrect'
                    ])->onlyInput('email');
            }
        } else {
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect'
            ])->onlyInput('email');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return to_route('login.show')->with('success', 'Vous étes bien déconnecté.');
    }
}
