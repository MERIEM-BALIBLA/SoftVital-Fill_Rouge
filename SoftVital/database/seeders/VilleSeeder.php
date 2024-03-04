<?php

namespace Database\Seeders;

use App\Models\Ville;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = [
            ['nom' => 'Casablanca', 'region' => 'Casablanca-Settat', 'population' => 3359818],
            ['nom' => 'Rabat', 'region' => 'Rabat-Salé-Kénitra', 'population' => 1292500],
            ['nom' => 'Fès', 'region' => 'Fès-Meknès', 'population' => 1112072],
            ['nom' => 'Marrakech', 'region' => 'Marrakech-Safi', 'population' => 928850],
            ['nom' => 'Agadir', 'region' => 'Souss-Massa', 'population' => 609088],
            ['nom' => 'Tanger', 'region' => 'Tanger-Tétouan-Al Hoceima', 'population' => 947952],
            ['nom' => 'Meknès', 'region' => 'Fès-Meknès', 'population' => 632079],
            ['nom' => 'Oujda', 'region' => 'Oriental', 'population' => 551225],
            ['nom' => 'Kenitra', 'region' => 'Rabat-Salé-Kénitra', 'population' => 431282],
            ['nom' => 'Salé', 'region' => 'Rabat-Salé-Kénitra', 'population' => 893260],
            ['nom' => 'Nador', 'region' => 'Oriental', 'population' => 642566],
            ['nom' => 'Mohammedia', 'region' => 'Casablanca-Settat', 'population' => 208612],
            ['nom' => 'Safi', 'region' => 'Doukkala-Abda', 'population' => 308508],
            ['nom' => 'Béni Mellal', 'region' => 'Béni Mellal-Khénifra', 'population' => 266075],
            ['nom' => 'Tétouan', 'region' => 'Tanger-Tétouan-Al Hoceima', 'population' => 377774],
            ['nom' => 'Khouribga', 'region' => 'Béni Mellal-Khénifra', 'population' => 191787],
            ['nom' => 'El Jadida', 'region' => 'Casablanca-Settat', 'population' => 194934],
            ['nom' => 'Taza', 'region' => 'Fès-Meknès', 'population' => 149403],
            ['nom' => 'Taourirt', 'region' => 'Oriental', 'population' => 84623],
            ['nom' => 'Errachidia', 'region' => 'Drâa-Tafilalet', 'population' => 95818],
            // Ajoutez d'autres villes ici
        ];

        // Insérer les données des villes dans la base de données
        foreach ($villes as $ville) {
            Ville::create($ville);
        }
    }
}
