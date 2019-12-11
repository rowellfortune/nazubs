<?php

use Illuminate\Database\Seeder;
use App\Status;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
         DB::table('statuses')->insert([
            'name' => 'Bezet'
        ]);

        DB::table('statuses')->insert([
            'name' => 'Besikbaar'
        ]);
    }
}
