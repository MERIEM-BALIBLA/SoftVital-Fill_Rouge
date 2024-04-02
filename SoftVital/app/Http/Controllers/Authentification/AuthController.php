<?php

namespace App\Http\Controllers\Authentification;

use App\Http\Controllers\Controller;
use App\Models\Medecin\Medecin;
use App\Models\Medecin\Specialite;
use App\Models\Role;
use App\Models\User;
use App\Repositories\AuthInterfaceRepository;
use App\Repositories\MailRepository;

use App\Http\Requests\RegisterRequest;
use App\Models\Ville;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    protected $userRepository;

    public function __construct(AuthInterfaceRepository $authInterfaceRepository)
    {
        $this->userRepository = $authInterfaceRepository;
    }


    public function index()
    {
        return $this->userRepository->index();
    }

    // start register
    public function register(RegisterRequest $request)
    {
        // $validatedData = $request->validated();

        // // Fetch the role ID based on the role selected in the form
        // $role = Role::where('role', $validatedData['role'])->first();

        // // Set the role_id to the fetched role's ID
        // $validatedData['role_id'] = $role->id;

        // // Récupérer l'ID de la ville à partir des données utilisateur
        // $villeId = $validatedData['ville'];

        // // Ajouter l'ID de la ville au tableau $validatedData
        // $validatedData['ville_id'] = $villeId;

        // try {
        //     // Créer l'utilisateur avec le rôle spécifié
        //     $user = $this->userRepository->createUser($validatedData);

        //     // Attacher le rôle à l'utilisateur
        //     $user->role()->attach($role->id);

        //     // Si le rôle est "médecin", valider les données spécifiques au médecin
        //     if ($role->role === 'medecin') {
        //         $specialite = $request->input('specialite');
        //         $medecinData = [
        //             'user_id' => $user->id,
        //             'specialite_id' => $specialite,
        //             'cabinet' => $request->input('cabinet'),
        //             'adresse_cabinet' => $request->input('adresse_cabinet'),
        //         ];
        //         $this->userRepository->createMedecin($medecinData);

        //     }

        //     auth()->login($user);

        //     return redirect()->route('/');
        // } catch (\PDOException $e) {
        //     if ($e->getCode() === '23000' && strpos($e->getMessage(), 'Duplicate entry') !== false) {
        //         return redirect('Authentification')->with("error", "L'adresse e-mail que vous avez entrée est déjà associée à un compte. Veuillez utiliser une autre adresse e-mail.");
        //     } else {
        //         return redirect('Authentification')->with("error", "Une erreur s'est produite lors de la création de votre compte. Veuillez réessayer plus tard.");
        //     }
        // }
        $this->userRepository->createUser($request);
        // return redirect('/');
    }
    // end register

    // start logout
    public function logout(Request $request)
    {
        $this->userRepository->logout($request);
        return redirect()->route('/');
    }
    // end login

    // start login
    public function login(Request $request)
    {
        return $this->userRepository->login($request);
    }
    // end login

    public function ForgetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $email = $request->email;

        $user = $this->userRepository->getUserByEmail($email);

        if ($user) {
            $userName = $user->nom; // Supposons que le nom d'utilisateur soit stocké dans la colonne 'name' de votre table 'users'

            $token = Str::random(64);
            $this->userRepository->createOrUpdatePasswordResetToken($email, $token);
            $this->userRepository->sendPasswordResetEmail($email, $token, $userName);

            return redirect()->to('Authentification')->with("success", "we have sent an email with instructions to reset your password.");
        } else {
            return redirect()->back()->with("error", "No user found with this email address");
        }
    }


    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:4',
        ]);

        $email = $request->email;
        $password = $request->password;

        if ($this->userRepository->resetPassword($email, $password)) {
            return redirect('Authentification')->with('status', 'Your password has been reset!');
        } else {
            return back()->withErrors(['email' => 'User not found']);
        }
    }
}


