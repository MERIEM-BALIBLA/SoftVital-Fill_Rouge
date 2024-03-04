<?php

namespace App\Http\Controllers\Authentification;

use App\Http\Controllers\Controller;
use App\Models\Medecin\Medecin;
use App\Models\Medecin\Specialite;
use App\Models\Role;
use App\Models\User;
use App\Repositories\AuthRepository;
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

    public function __construct()
    {
        $this->userRepository = new AuthRepository();
    }

    public function index()
    {
        $villes = Ville::get();
        $specialites = Specialite::get();
        return view('Authentification.index', compact('villes', 'specialites'));
    }

    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        // Fetch the role ID based on the role selected in the form
        $role = Role::where('role', $validatedData['role'])->first();
        // Set the role_id to the fetched role's ID
        $validatedData['role_id'] = $role->id;
        // Récupérer l'ID de la ville à partir des données utilisateur
        $villeId = $validatedData['ville'];
        // Ajouter l'ID de la ville au tableau $validatedData
        $validatedData['ville_id'] = $villeId;
        try {
            // Créer l'utilisateur avec le rôle spécifié
            $user = $this->userRepository->createUser($validatedData);

            // Attacher le rôle à l'utilisateur
            $user->role()->attach($role->id);

            // Si le rôle est "médecin", valider les données spécifiques au médecin
            if ($role->role === 'medecin') {
                $specialite = $request->input('specialite');

                $cabinet = Medecin::create([
                    'user_id' => $user->id,
                    'specialite_id' => $specialite,
                    'cabinet' => $request->input('cabinet'),
                    'adresse_cabinet' => $request->input('adresse_cabinet'),
                ]);
            }

            auth()->login($user);

            return redirect()->route('home');
        } catch (\PDOException $e) {
            if ($e->getCode() === '23000' && strpos($e->getMessage(), 'Duplicate entry') !== false) {

                return redirect('Authentification')->with("error", "L'adresse e-mail que vous avez entrée est déjà associée à un compte. Veuillez utiliser une autre adresse e-mail.");

            } else {
                return redirect('Authentification')->with("error", "Une erreur s'est produite lors de la création de votre compte. Veuillez réessayer plus tard.");
            }
        }
    }

    public function logout(Request $request)
    {
        $this->userRepository->logout($request);
        return redirect()->route('/');
    }

    public function login(Request $request)
    {
        $this->userRepository->login($request);
        return redirect()->route('home');

    }

public function ForgetPassword(Request $request){
    $request->validate([
        'email' => 'required|email|exists:users'
    ]);

    // Récupérer l'utilisateur correspondant à l'adresse e-mail fournie
    $user = User::where('email', $request->email)->first();

    if ($user) {
        // Si l'utilisateur existe, vous pouvez accéder à son nom
        $userName = $user->nom; // Supposons que le nom d'utilisateur soit stocké dans la colonne 'name' de votre table 'users'
        
        $token = Str::random(64);

        $existingEntry = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if ($existingEntry) {
            DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->update([
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
        } else {
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }

        Mail::send('email.forget_password', ['token' => $token, 'userName' => $userName], function($message) use ($request){
            $message->to($request->email);
            $message->subject('Reset your password');
        });

        return redirect()->to('Authentification')->with("success","we have sent an email with instructions to reset your password.");
    } else {
        return redirect()->back()->with("error","No user found with this email address");
    }
}


//     public function ForgetPassword(Request $request){
//         $request->validate([
//             'email' => 'required|email|exists:users'
//         ]);
//         $token = Str::random(64);

//         $existingEntry = DB::table('password_reset_tokens')
//             ->where('email', $request->email)
//             ->first();

//     //     if (!$existingEntry) {
//     //         DB::table('password_reset_tokens')->insert([
//     //             'email' => $request->email,
//     //             'token' => $token,
//     //             'created_at' => Carbon::now()
//     //         ]);
//     //     }
//     //     Mail::send('email.forget_password', ['token' => $token], function($message) use ($request){
//     //         $message->to($request->email);
//     //         $message->subject('Reset your password');
//     //     });
//     //     // dd('Redirection effectuée avec succès');

//     //     return redirect()->to('Authentification')->with("success","we have send email");
//     // }
//     if ($existingEntry) {
//         // Si un enregistrement existe déjà, mettre à jour le jeton et la date de création
//         DB::table('password_reset_tokens')
//             ->where('email', $request->email)
//             ->update([
//                 'token' => $token,
//                 'created_at' => Carbon::now()
//             ]);
//     } else {
//         // Sinon, insérer un nouvel enregistrement avec le jeton généré
//         DB::table('password_reset_tokens')->insert([
//             'email' => $request->email,
//             'token' => $token,
//             'created_at' => Carbon::now()
//         ]);
//     }

//     // Envoyer l'e-mail de réinitialisation du mot de passe
//     Mail::send('email.forget_password', ['token' => $token], function($message) use ($request){
//         $message->to($request->email);
//         $message->subject('Reset your password');
//     });

//     // Rediriger avec un message de succès
//     return redirect()->to('Authentification')->with("success","we have sent an email with instructions to reset your password.");
// }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:4',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // Check if the user exists
        if ($user) {
            // Update the user's password
            $user->password = Hash::make($request->password);
            $user->save();

            // Redirect the user to the login page with a success message
            return redirect('Authentification')->with('status', 'Your password has been reset!');
        } else {
            // If the user does not exist, redirect back with an error message
            return back()->withErrors(['email' => 'User not found']);
        }
    }
    
}


