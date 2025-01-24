<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Court extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 5; $i++) {
            DB::table('courts')->insert([
                'name' => $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'court_type_id' => $faker->numberBetween(1, 5),
                'price' => $faker->numberBetween(10000, 1000000),
                'open_at' => $faker->time(),
                'close_at' => $faker->time(),
            ]);
        }
    }
}
