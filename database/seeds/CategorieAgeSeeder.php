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
    }
}
