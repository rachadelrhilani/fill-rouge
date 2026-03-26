<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;

    // Injection du Service
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Traiter l'inscription (Register)
     */
    public function register(Request $request)
    {
        // 1. Validation stricte (Sécurité Backend)
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'company'  => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        try {
            // 2. Appel au service pour la création (Entreprise + User)
            $user = $this->authService->register($data);

            // 3. Connexion automatique
            Auth::login($user);

            return redirect()->route('dashboard')->with('success', 'Bienvenue sur EmployeeFlow !');
            
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Erreur lors de l\'inscription : ' . $e->getMessage()]);
        }
    }

    /**
     * Traiter la connexion (Login)
     */
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

    /**
     * Déconnexion
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
