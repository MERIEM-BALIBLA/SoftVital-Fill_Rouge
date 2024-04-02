<?php

namespace App\Http\Controllers\medecin\profil;

use App\Http\Controllers\Controller;
use App\Models\Medecin\Medecin;
use App\Models\medecin\Post;
use App\Models\User;

class ProfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $posts = Post::where('user_id', $user->id)
            ->latest()
            ->take(3)
            ->get();

        $specialiteId = $user->medecin->specialite->id;
        $medecins = User::whereHas('medecin', function ($query) use ($specialiteId) {
            $query->where('specialite_id', $specialiteId);
        })
            ->where('id', '!=', $user->id) // Exclure l'utilisateur authentifié
            ->get();

        return view('medecin.profil.index', compact('user', 'posts', 'medecins'));
    }
}