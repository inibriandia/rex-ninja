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
            'description' => 'Briand vous présente un tournoi de ping-pong',
            'dateDebut' => '2019-06-01',
            'heureDebut' => '18:00',
            'dateFin' => '2019-08-01',
            'heureFin' => '20:00',
            'telephone' => '5061234567',
            'cellulaire' => '5061234567',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/81iyVA%2BDeXL._SL1500_.jpg',
            'lienFacebook' => 'https://www.facebook.com/',
            'email' => 'briandprog@progccnb.ca',
            'numeroMaison' => '725',
            'nomRue' => 'college st',
            'descriptionAdresse' => 'Gymnase du CCNB',
            'latitude' => '47.620284',
            'longitude' => '-65.674601',
            'prix' => '15',
            'organisateur_id' => '1',
            'ville_id' => '1',
            'categorie_id' => '2',
            'ambiance_id' => '3',
            'categorieAge_id' => '1',
        ]);

        DB::table('evenements')->insert([
            'titre' => 'Escalade',
            'description' => 'Yahya vous présente un tournoi d escalade',
            'dateDebut' => '2019-06-02',
            'heureDebut' => '20:00',
            'dateFin' => '2019-08-03',
            'heureFin' => '21:00',
            'telephone' => '5061234567',
            'cellulaire' => '5061234567',
            'image' => 'https://ei.marketwatch.com/Multimedia/2018/03/27/Photos/MG/MW-GG356_climbi_20180327164650_MG.jpg',
            'lienFacebook' => 'https://www.facebook.com/',
            'email' => 'yahyaProg@progccnb.ca',
            'numeroMaison' => '640',
            'nomRue' => 'rue King',
            'descriptionAdresse' => 'BHS',
            'latitude' => '47.6148341',
            'longitude' => '-65.6526373',
            'prix' => '20',
            'organisateur_id' => '6',
            'ville_id' => '1',
            'categorie_id' => '2',
            'ambiance_id' => '3',
            'categorieAge_id' => '1',
        ]);

        DB::table('evenements')->insert([
            'titre' => 'Bierre local',
            'description' => 'Pierre vous présente la degustation de la bierre locale',
            'dateDebut' => '2019-06-12',
            'heureDebut' => '15:00',
            'dateFin' => '2019-08-13',
            'heureFin' => '22:00',
            'telephone' => '5063456789',
            'cellulaire' => '5061234567',
            'image' => 'https://fastly.4sqi.net/img/general/600x600/464411546__-pyw0pxuCAi-cceP4wNq0n4ZHcuf9c5Ob4-3cOmtY8.jpg',
            'lienFacebook' => 'https://www.facebook.com/',
            'email' => 'pierreprog@progccnb.ca',
            'numeroMaison' => '100',
            'nomRue' => 'rue Main',
            'descriptionAdresse' => 'Devant le subway',
            'latitude' => '47.6202446',
            'longitude' => '-65.6563534',
            'prix' => '30',
            'organisateur_id' => '3',
            'ville_id' => '1',
            'categorie_id' => '5',
            'ambiance_id' => '3',
            'categorieAge_id' => '2',
        ]);

        DB::table('evenements')->insert([
            'titre' => 'Rock and roll',
            'description' => 'Mouhcine vous présente un concert de rock and roll',
            'dateDebut' => '2019-06-12',
            'heureDebut' => '7:00',
            'dateFin' => '2019-08-13',
            'heureFin' => '11:00',
            'telephone' => '5065651515',
            'cellulaire' => '5061234567',
            'image' => 'https://www.telegraph.co.uk/content/dam/business/spark/e-on-energy-efficiency/view-from-the-crowd-towards-stage-at-rock-concert.jpg',
            'lienFacebook' => 'https://www.facebook.com/',
            'email' => 'mouhprog@progccnb.ca',
            'numeroMaison' => '50',
            'nomRue' => 'Douglas av',
            'descriptionAdresse' => 'Devant la résidence royale',
            'latitude' => '47.620900',
            'longitude' => '-65.658212',
            'prix' => '15',
            'organisateur_id' => '2',
            'ville_id' => '1',
            'categorie_id' => '3',
            'ambiance_id' => '2',
            'categorieAge_id' => '2',
        ]);

        DB::table('evenements')->insert([
            'titre' => 'Vernissage : Nos masques',
            'description' => 'Jessica vous présente un vernissage sur le thème de nos masques',
            'dateDebut' => '2019-06-20',
            'heureDebut' => '19:00',
            'dateFin' => '2019-08-20',
            'heureFin' => '22:00',
            'telephone' => '5065678748',
            'cellulaire' => '5061234567',
            'image' => 'https://tourrettessurloup.com/wp-content/uploads/2018/01/logo-vernissage.png',
            'lienFacebook' => 'https://www.facebook.com/',
            'email' => 'jessprog@progccnb.ca',
            'numeroMaison' => '50',
            'nomRue' => 'Douglas av',
            'descriptionAdresse' => 'Devant la résidence royale',
            'latitude' => '47.625269',
            'longitude' => '-65.683823',
            'prix' => '0',
            'organisateur_id' => '2',
            'ville_id' => '1',
            'categorie_id' => '4',
            'ambiance_id' => '3',
            'categorieAge_id' => '2',
        ]);

        DB::table('evenements')->insert([
            'titre' => 'Tournée de bateau',
            'description' => 'Le CCNB vous présente une tournée en bateau',
            'dateDebut' => '2019-07-12',
            'heureDebut' => '14:00',
            'dateFin' => '2019-08-12',
            'heureFin' => '19:00',
            'telephone' => '5061234568',
            'cellulaire' => '5061234567',
            'image' => 'https://lussierdaleparizeau.ca/wp-content/uploads/2017/04/Blogue-Critere-bien-assurer-bateau.jpg',
            'lienFacebook' => 'https://www.facebook.com/',
            'email' => 'ccnbProg@progccnb.ca',
            'numeroMaison' => '1525',
            'nomRue' => 'Queen Elizabeth Dr',
            'descriptionAdresse' => 'Youghall Beach Park',
            'latitude' => '47.657018',
            'longitude' => '-65.627608',
            'prix' => '10',
            'organisateur_id' => '3',
            'ville_id' => '1',
            'categorie_id' => '2',
            'ambiance_id' => '4',
            'categorieAge_id' => '1',
        ]);
    }
}
