<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => '¿Quién fue el equipo ganador de la Champions League 2019-20?',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => '¿En qué año consiguió Luka Modric el balón de oro?',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => 'Equipos que han ganado la Champions League en 3 ocasiones',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => '¿Cuál de estos equipos no pertenece a la Liga Premier de Inglaterra?',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => 'Equipo con más títulos ganados en la Liga Italiana',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => 'Equipo con más títulos ganados en la Liga Francesa',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => 'Equipo que ganó la Liga Española en el año 2000',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => 'Equipo que ganó la Liga Alemana en el año 2009',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => 'Equipos que han ganado la Champions League en 6 ocasiones',
        ]);

        DB::table('questions')->insert([
            'evaluation_id' => 1,
            'description' => '¿Cuál de estos equipos no pertencece a la Bundesliga Alemana?',
        ]);
    }
}
