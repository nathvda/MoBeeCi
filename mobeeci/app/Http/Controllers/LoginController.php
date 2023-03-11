<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validation des champs du formulaire
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tentative de connexion de l'utilisateur
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Connexion réussie, redirection vers la page d'accueil ou une autre page de votre choix
            return redirect('/home');
        }

        // Échec de la connexion, redirection vers la page de connexion avec un message d'erreur
        return redirect('/login')->with('error', 'Adresse e-mail ou mot de passe incorrect.');
    }
}