<?php

namespace Database\Seeders;

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
        $this->call(EvaluationSeeder::class );
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
    }
}
