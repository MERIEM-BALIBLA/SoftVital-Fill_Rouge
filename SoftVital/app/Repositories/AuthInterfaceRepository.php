<?php

namespace App\Repositories;
use Illuminate\Http\Request;

interface AuthInterfaceRepository
{
    public function createUser(array $userData);
    public function logout(Request  $request);
    public function login(Request $request);
}