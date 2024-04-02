<?php

namespace App\Http\Controllers\medecin\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Medecin\Specialite;
use App\Repositories\profile\ProfileInterfaceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct(ProfileInterfaceRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function index()
    {
        $user = auth()->user();
        $specialites = $this->profileRepository->getAllSpecialites();
        return view('medecin.dashboard.profil.index', compact('user', 'specialites'));
    }

    public function update_InfoPersonnelle(Request $request)
    {
        $request->validate([
            'nom' => 'string|max:255',
            'email' => 'email|max:255',
            'numero' => 'string|max:20',
        ]);

        $user = auth()->user();

        $updated = $this->profileRepository->updateUserInfo($user, $request->all());

        if ($updated) {
            return redirect()->back()->with('success', 'Vos informations ont été mises à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour de vos informations.');
        }
    }

    public function update_Proffesionnel(Request $request)
    {
        $request->validate([
            'specialite' => 'string|max:255',
            'cabinet' => 'string|max:255',
            'adresse' => 'string|max:255',
        ]);

        $user = auth()->user();
        $medecin = $user->medecin;

        $updated = $this->profileRepository->updateProffesionInfo($medecin, $request->all());

        if ($updated) {
            return redirect()->back()->with('success', 'Vos informations ont été mises à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour de vos informations.');
        }
    }

    public function uploadProfileImage(Request $request)
    {
        // Récupérer l'utilisateur authentifié
        $user = auth()->user();
    
        // Valider la requête
        $request->validate([
            'image' => 'image|mimes:svg,png,jpg,jpeg', // Assurez-vous que le fichier est une image
        ]);
    
        // Vérifier s'il y a un fichier image envoyé
        if ($request->hasFile('image')) {
            // Récupérer le chemin de l'image actuelle de l'utilisateur
            $oldImagePath = $user->image;
    
            // Stocker la nouvelle image
            $imagePath = $request->file('image')->store('public/images'); // Assurez-vous que le répertoire de stockage existe
    
            // Mettre à jour le chemin de l'image dans les données de l'utilisateur
            $user->image = $imagePath;
    
            // Supprimer l'ancienne image s'il en existe une
            if ($oldImagePath) {
                Storage::delete($oldImagePath); // Supprimer l'image précédente du stockage
            }
        }
    
        // Sauvegarder les modifications de l'utilisateur
        $user->save();
    
        return redirect()->back()->with('success', 'Vos informations ont été mises à jour avec succès.');
    }
}
