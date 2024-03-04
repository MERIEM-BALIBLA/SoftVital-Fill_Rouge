<?php

namespace Database\Seeders;

use App\Models\Medecin\Specialite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialites = [
            ['specialite'=>'Anesthésiologie'],
            ['specialite'=>'Cardiologie'],
            ['specialite'=>'Dermatologie'],
            ['specialite'=>'Endocrinologie'],
            ['specialite'=>'Gastro-entérologie'],
            ['specialite'=>'Gériatrie'],
            ['specialite'=>'Gynécologie'],
            ['specialite'=>'Hématologie'],
            ['specialite'=>'Infectiologie'],
            ['specialite'=>'Médecine interne'],
            ['specialite'=>'Néphrologie'],
            ['specialite'=>'Neurologie'],
            ['specialite'=>'Oncologie'],
            ['specialite'=>'Ophtalmologie'],
            ['specialite'=>'Orthopédie'],
            ['specialite'=>'Oto-rhino-laryngologie'],
            ['specialite'=>'Pédiatrie'],
            ['specialite'=>'Pneumologie'],
            ['specialite'=>'Psychiatrie'],
            ['specialite'=>'Radiologie'],
            ['specialite'=>'Rhumatologie'],
            ['specialite'=>'Urologie'],
        ];
        foreach ($specialites as $specialite) {
            Specialite::create($specialite);
        }
    }
}
