<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'question_id' => 1,
            'description' => 'Real Madrid',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'description' => 'Bayern Munich',
            'is_correct' => 1,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'description' => 'Liverpool',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'description' => 'Milan',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'description' => '2020',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'description' => '2017',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'description' => '2019',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'description' => '2018',
            'is_correct' => 1,
        ]);

        // 3
        DB::table('answers')->insert([
            'question_id' => 3,
            'description' => 'Juventus y Ajax',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'description' => 'Porto y Barcelona',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'description' => 'Inter y Manchester United',
            'is_correct' => 1,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'description' => 'Liverpool y Benfica',
            'is_correct' => 0,
        ]);

        // 4
        DB::table('answers')->insert([
            'question_id' => 4,
            'description' => 'Burnley',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'description' => 'Brighton and Hove Albion',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'description' => 'Southampton',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'description' => 'Celtic',
            'is_correct' => 1,
        ]);

        // 5
        DB::table('answers')->insert([
            'question_id' => 5,
            'description' => 'Juventus',
            'is_correct' => 1,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'description' => 'Inter',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'description' => 'Milan',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'description' => 'Roma',
            'is_correct' => 0,
        ]);

        // 6
        DB::table('answers')->insert([
            'question_id' => 6,
            'description' => 'Paris Saint Germain',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'description' => 'Saint Etienne',
            'is_correct' => 1,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'description' => 'Marsella',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'description' => 'Lyon',
            'is_correct' => 0,
        ]);

        // 7
        DB::table('answers')->insert([
            'question_id' => 7,
            'description' => 'Real Madrid',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'description' => 'Barcelona',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'description' => 'Atlético de Madrid',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'description' => 'Deportivo la Coruña',
            'is_correct' => 1,
        ]);

        // 8
        DB::table('answers')->insert([
            'question_id' => 8,
            'description' => 'Wolfsburg',
            'is_correct' => 1,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'description' => 'Bayern Munich',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'description' => 'Borussia Dortmund',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'description' => 'Hamburgo',
            'is_correct' => 0,
        ]);

        // 9
        DB::table('answers')->insert([
            'question_id' => 9,
            'description' => 'Inter y Manchester United',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'description' => 'Bayern Munich y Liverpool',
            'is_correct' => 1,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'description' => 'Barcelona y Milan',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'description' => 'Real Madrid y Juventus',
            'is_correct' => 0,
        ]);

        // 10
        DB::table('answers')->insert([
            'question_id' => 10,
            'description' => 'Bochum',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'description' => 'Heerenveen',
            'is_correct' => 1,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'description' => 'Stuttgart',
            'is_correct' => 0,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'description' => 'Schalke',
            'is_correct' => 0,
        ]);
    }
}
