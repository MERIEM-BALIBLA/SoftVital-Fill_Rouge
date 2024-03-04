<?php

namespace App\Models\Medecin;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','specialite_id','cabinet','adresse_cabinet'];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
