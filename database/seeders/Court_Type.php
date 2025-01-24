<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Court_Type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create ('id_ID');
        for ($i = 0; $i <= 10; $i++){
            DB::table('court_types')->insert([
                'name' => $faker -> name
            ]);
        }
    }
}
