<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array('name' => 'dev','email' => 'dev@dev.pl','password' => bcrypt('dev123')),
            array('name' => 'user','email' => 'user@user.pl','password' => bcrypt('user123')),
            array('name' => 'subscriber','email' => 'sub@sub.pl','password' => bcrypt('sub123')),
            array('name' => 'support','email' => 'support@support.pl','password' => bcrypt('support123')),
        ));

    }
}
