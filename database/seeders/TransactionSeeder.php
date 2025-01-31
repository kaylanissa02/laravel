<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=1; $i <=5 ; $i++) {
            DB::table('transactions')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'Court_id' => $faker->numberBetween(1, 5),
                'Name' => $faker->name,
                'Address' => $faker->address,
                'Phone' => $faker->phoneNumber,
                'Date' => $faker->date(),
                'Starttime' => $faker->time(),
                'Endtime' => $faker->time(),
                'Costume' => $faker->boolean(),
                'Shoes' => $faker->boolean(),
                'Grandtotal' => $faker->numberBetween(10000, 1000000),
                'Paytotal' => $faker->randomNumber(6, True),
            ]);
        }
    }
}
