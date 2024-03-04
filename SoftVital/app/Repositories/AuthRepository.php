<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Ville;
use App\Repositories\AuthInterfaceRepository;
use Illuminate\Http\Request;

class AuthRepository implements AuthInterfaceRepository
{
    public function createUser(array $userData)
    {
        return User::create($userData);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $request->session()->regenerate();
            return redirect()->route('/'); // Assurez-vous que 'home' est le nom de votre route pour la page d'accueil
        } else {
            return back()->withInput($request->only('email'));
        }
    }
    

}
