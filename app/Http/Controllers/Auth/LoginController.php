<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginCustom(Request $request)
{
    // Validation des champs email et password
    $this->validate($request, [
        'courriel' => 'required|email',
        'password' => 'required',
    ]);

    // Récupération de l'utilisateur par l'adresse email
    $user = User::where('courriel', $request->courriel)->first();

    // Vérification si l'utilisateur existe et est actif
    if (!$user) {
        // Si l'utilisateur n'existe pas ou n'est pas actif, redirection vers la page de connexion avec un message d'erreur
        return redirect()->back()->withErrors(['courriel' => 'Les informations de connexion sont incorrectes ou votre compte n\'est pas actif.']);
    }

    // Si l'utilisateur existe et est actif, tentative de connexion avec Auth::attempt()
    if (Auth::attempt(['courriel' => $request->courriel, 'password' => $request->password])) {
        // Si la connexion réussit, redirection vers la page d'accueil
        return redirect()->intended('/');
    }

    // Si la connexion échoue, redirection vers la page de connexion avec un message d'erreur
    return redirect()->back()->withErrors(['courriel' => 'Les informations de connexion sont incorrectes.']);
}
}
