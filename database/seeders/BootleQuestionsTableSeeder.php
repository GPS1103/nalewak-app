<?php

namespace Database\Seeders;

use App\Models\BootleQuestion;
use Illuminate\Database\Seeder;

class BootleQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BootleQuestion::create([
            'question' => 'Kto jest krolowa brytyjska',
        ]);
    }
}
