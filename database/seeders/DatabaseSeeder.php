<?php

namespace Database\Seeders;


use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CourtTypeSeeder::class,
            CourtSeeder::class,
            TransactionSeeder::class,
        ]);
    }
}
