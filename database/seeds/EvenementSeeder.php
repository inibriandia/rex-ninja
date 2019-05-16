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
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/81iyVA%2BDeXL._SL1500_.jpg',
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

        DB::table('evenements')->insert([
            'titre' => 'Escalade',
            'description' => 'YahyaProg vous présente un tournoi d escalade',
            'dateDebut' => '2019-06-02',
            'heureDebut' => '20:00',
            'dateFin' => '2019-06-03',
            'heureFin' => '21:00',
            'telephone' => '5061234567',
            'image' => 'https://ei.marketwatch.com/Multimedia/2018/03/27/Photos/MG/MW-GG356_climbi_20180327164650_MG.jpg',
            'lienFacebook' => 'https://www.facebook.com/',
            'numeroMaison' => '640',
            'nomRue' => 'rue King',
            'descriptionAdresse' => 'BHS',
            'latitude' => '47.6148341',
            'longitude' => '-65.6526373',
            'prix' => '20',
            'organisateur_id' => '6',
            'ville_id' => '1',
            'categorie_id' => '1',
            'ambiance_id' => '2',
            'categorieAge_id' => '1',
        ]);

        DB::table('evenements')->insert([
            'titre' => 'Bierre local',
            'description' => 'Pierreprog vous présente la degustation de la bierre locale',
            'dateDebut' => '2019-06-12',
            'heureDebut' => '21:00',
            'dateFin' => '2019-06-13',
            'heureFin' => '2:00',
            'telephone' => '5063456789',
            'image' => 'https://fastly.4sqi.net/img/general/600x600/464411546__-pyw0pxuCAi-cceP4wNq0n4ZHcuf9c5Ob4-3cOmtY8.jpg',
            'lienFacebook' => 'https://www.facebook.com/',
            'numeroMaison' => '100',
            'nomRue' => 'rue Main',
            'descriptionAdresse' => 'Devant le subway',
            'latitude' => '47.6202446',
            'longitude' => '-65.6563534',
            'prix' => '30',
            'organisateur_id' => '3',
            'ville_id' => '1',
            'categorie_id' => '4',
            'ambiance_id' => '2',
            'categorieAge_id' => '2',
        ]);
    }
}
