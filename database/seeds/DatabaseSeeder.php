<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(LaratrustSeeder::class);
         $this->call(GameTypesSeeder::class);
         $this->call(BookmakerSeeder::class);
    }
}
