<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AmbianceSeeder::class,
            CategorieAgeSeeder::class,
            CategorieSeeder::class,
            PaysSeeder::class,
            ProvinceSeeder::class,
            VilleSeeder::class,
            OrganisateurSeeder::class,
            EvenementSeeder::class,
        ]);
    }
}
