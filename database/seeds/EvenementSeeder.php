<?php

use Illuminate\Database\Seeder;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evenements')->insert([
            'titre' => 'Ping-pong',
            'description' => 'briandprog vous présente un tournoi de ping-pong',
            'dateDebut' => '2019-06-01',
            'heureDebut' => '18:00',
            'dateFin' => '2019-06-01',
            'heureFin' => '20:00',
            'telephone' => '5061234567',
            'image' => 'no image',
            'lienFacebook' => 'https://www.facebook.com/',
            'numeroMaison' => '725',
            'nomRue' => 'college st',
            'descriptionAdresse' => 'Gymnase du CCNB',
            'latitude' => '47.62281249',
            'longitude' => '-65.6731156',
            'prix' => '15',
            'organisateur_id' => '1',
            'ville_id' => '1',
            'categorie_id' => '1',
            'ambiance_id' => '2',
            'categorieAge_id' => '1',
        ]);
    }
}
