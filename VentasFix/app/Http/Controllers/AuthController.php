<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Rules\RutChileno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credenciales, $request->boolean('recordar'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()
            ->withErrors(['email' => 'Credenciales incorrectas.'])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function showRegisterForm()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $datos = $request->validate([
            'rut' => ['required', 'string', 'max:12', new RutChileno, 'unique:usuarios,rut'],
            'nombre' => ['required', 'string', 'min:3', 'max:100'],
            'apellido' => ['required', 'string', 'min:3', 'max:100'],
            'email' => [
                'required', 'string', 'email', 'max:150',
                'regex:/^[a-zA-Z0-9._%+-]+@ventasfix\.cl$/',
                'unique:usuarios,email',
            ],
            'password' => ['required', 'string', 'min:8'],
        ], [
            'email.regex' => 'El email debe ser del dominio @ventasfix.cl.',
        ]);

        $usuario = Usuario::create($datos);

        Auth::login($usuario);

        return redirect()->route('dashboard');
    }
}
