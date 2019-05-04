<?php

use Illuminate\Database\Seeder;

class OrganisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organisateurs')->insert([
            'nom' => 'Ininahazwe',
            'prenom' => 'Briand',
            'email' => 'ib@prog.ca',
            'telephone' => '5061234567',
            'entreprise' => 'briandprog',
            'password' => '1234',
            'ville_id' => '1',
        ]);

        DB::table('organisateurs')->insert([
            'nom' => 'Doucet',
            'prenom' => 'Jessica',
            'email' => 'dj@prog.ca',
            'telephone' => '5062345678',
            'entreprise' => 'jessicaprog',
            'password' => '1234',
            'ville_id' => '1',
        ]);

        DB::table('organisateurs')->insert([
            'nom' => 'Silue',
            'prenom' => 'Pierre',
            'email' => 'sp@prog.ca',
            'telephone' => '5063456789',
            'entreprise' => 'pierreprog',
            'password' => '1234',
            'ville_id' => '1',
        ]);

        DB::table('organisateurs')->insert([
            'nom' => 'Thkili',
            'prenom' => 'Mouhcine',
            'email' => 'tm@prog.ca',
            'telephone' => '5064567890',
            'entreprise' => 'mouhcineprog',
            'password' => '1234',
            'ville_id' => '1',
        ]);

        DB::table('organisateurs')->insert([
            'nom' => 'Silue',
            'prenom' => 'Ange-Christian',
            'email' => 'sa@prog.ca',
            'telephone' => '5065678901',
            'entreprise' => 'angeprog',
            'password' => '1234',
            'ville_id' => '1',
        ]);

        DB::table('organisateurs')->insert([
            'nom' => 'Madrani',
            'prenom' => 'Yahya',
            'email' => 'yahya@prog.ca',
            'telephone' => '5066789012',
            'entreprise' => 'yahyaprog',
            'password' => '1234',
            'ville_id' => '1',
        ]);
    }
}
