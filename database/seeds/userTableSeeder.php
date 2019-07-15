<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'RegistrationNo'=>'2018/ADM/001',
            'UserType' =>'admin',
            'email' => 'admin@gmail.com',
            'IsConfirmed'=> '1',
            'password' => bcrypt('Ad123456'),

        ]);
    }
}
