<?php

namespace App\Models;

use App\Models\Medecin\Medecin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable=['role','user_id'];

    public function user(){
        $this->belongsToMany(User::class,'users_roles');
    }

    public function medecin(){
        $this->hasMany(Medecin::class);
    }
}
