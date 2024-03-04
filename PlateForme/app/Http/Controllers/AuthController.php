<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function home(){
        return view('pages.index');
    }

    public function registerView(){
        return view('pages.Auth.Register');
    }
    public function Register(RegisterRequest $request){
        $incomingFields =$request->validated();
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth() -> login($user);
        return redirect()->route('/');
    }

    public function login(LoginRequest $loginRequest){
        $incomingFields = $loginRequest->validated();
        if(auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])){
            $loginRequest->session()->regenerate();
            return view('pages.index');
        } else {
            return back()->withInput($loginRequest->only('email'));
        }
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('/');
    }
    
// Password

    // reset password email
    public function ForgetPassword(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);
        $token = Str::random(64);

        $existingEntry = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if (!$existingEntry) {
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }
        // dd($request);
        Mail::send('email.forget_password', ['token' => $token], function($message) use ($request){
            $message->to($request->email);
            $message->subject('Reset your password');
        });
        // dd('Redirection effectuée avec succès');

        return redirect()->to(route('Login'))->with("success","we have send email");
    }

    //Reset password 
    public function resetPassword(Request $request)
    {
        // Validate the request data
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
            return redirect()->route('Login')->with('status', 'Your password has been reset!');
        } else {
            // If the user does not exist, redirect back with an error message
            return back()->withErrors(['email' => 'User not found']);
        }
    }
    
}
