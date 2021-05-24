<?php

namespace Database\Seeders;

use App\Models\MillionerQuestion;
use Illuminate\Database\Seeder;

class MillionerQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MillionerQuestion::create([
            'question' => 'Kto jest krolowa brytyjska',
            'anwser1' => 'Elzbieta',
            'anwser2' => 'Diana',
            'anwser3' => 'Malgorzata',
            'anwser4' => 'Katarzyna',
        ]);
    }
}
