<?php

use Illuminate\Database\Seeder;

class BookmakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmakers')->insert(array(
            array('name' => 'STS', 'imageUrl' => 'bookmakers/sts', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Fortuna', 'imageUrl' => 'bookmakers/fortuna', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'LvBet', 'imageUrl' => 'bookmakers/lvbet', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'E-toto', 'imageUrl' => 'bookmakers/etoto', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'forBet', 'imageUrl' => 'bookmakers/forBet', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s"))
    ));
    }
}
