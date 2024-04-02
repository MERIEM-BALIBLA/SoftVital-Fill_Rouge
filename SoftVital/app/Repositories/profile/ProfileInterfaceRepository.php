<?php

namespace App\Repositories\profile;
use App\Models\Medecin\Medecin;
use App\Models\User;

interface ProfileInterfaceRepository
{
    public function getAllSpecialites();
    public function updateUserInfo(User $user, array $data);
    public function updateProffesionInfo(Medecin $medecin, array $data);

}