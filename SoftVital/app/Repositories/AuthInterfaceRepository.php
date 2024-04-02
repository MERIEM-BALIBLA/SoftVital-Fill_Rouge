<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

interface AuthInterfaceRepository
{
    public function index();
    public function createUser(RegisterRequest $request);
    public function createMedecin(array $userData);

    public function logout(Request  $request);
    public function login(Request $request);
    public function getUserByEmail($email);
    public function createOrUpdatePasswordResetToken($email, $token);
    public function sendPasswordResetEmail($email, $token, $userName);
    public function resetPassword($email, $password);
}