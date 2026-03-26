<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;

    // inject le service authentification
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    // inscription
    public function register(Request $request)
    {
        // Validation stricte (Sécurité Backend)
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'company'  => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            // creer entreprise avec user admin
            $user = $this->authService->register($data);

            // connexion automatique
            Auth::login($user);

            return redirect()->route('dashboard')->with('success', 'Bienvenue sur EmployeeFlow !');
            
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Erreur lors de l\'inscription : ' . $e->getMessage()]);
        }
    }

    //login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Les identifiants ne correspondent pas à nos enregistrements.',
        ])->onlyInput('email');
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
