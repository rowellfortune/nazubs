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
        //
        DB::table('users')->insert([
            'name' => 'Rowell',
            'email' => 'rowell@nazubs.com',
            'password' => bcrypt('jesus22rowell'),
        ]);
        DB::table('users')->insert([
            'name' => 'Dean',
            'email' => 'dean@nazubs.com',
            'password' => bcrypt('LippyT'),
        ]);
    }
}
