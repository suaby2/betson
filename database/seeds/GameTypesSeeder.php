
<?php

use Illuminate\Database\Seeder;

class GameTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_types')->insert(array(
            array('name' => 'Piłka Nożna', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Tenis', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Hokej', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Koszykówka', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Siatkówka', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Siatkówka Plażowa', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Piłka Ręczna', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Żużel', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Baseball', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Fromuła 1', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Esport', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Kolarstwo', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Boks', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'MMA', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Tenis Stołowy', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Snooker', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Rugby', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s")),
            array('name' => 'Golf', 'created_at' => date("Y-m-d H:i:s"), 'updated_at'  => date("Y-m-d H:i:s"))
        ));
    }
}