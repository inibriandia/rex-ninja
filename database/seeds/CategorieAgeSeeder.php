<?php

use Illuminate\Database\Seeder;

class CategorieAgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_ages')->insert([
            'categorieAge' => 'Tout age',
        ]);

        DB::table('categorie_ages')->insert([
            'categorieAge' => '19 ans et plus',
        ]);
    }
}
