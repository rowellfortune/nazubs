<?php

use Illuminate\Database\Seeder;
use App\Appartementen;

class AppartementenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //
        // $nzub_user = new Appartementen();
        // $nzub_user->name = "Kamen 1";
        // $nzub_user->appartementen_id = 1;
        // $nzub_user->status_id = 2;
        // $nzub_user->prijs = 500;
        // $nzub_user->save();

        DB::table('appartementens')->insert([
            'name' => 'Kamen 1',
            'appartementen_id' => 1,
            'status_id' => 2,
            'prijs' => 500
        ]);

        DB::table('appartementens')->insert([
            'name' => 'Kamen 2',
            'appartementen_id' => 1,
            'status_id' => 1,
            'prijs' => 500
        ]);

        DB::table('appartementens')->insert([
            'name' => 'Kamen 3',
            'appartementen_id' => 3,
            'status_id' => 2,
            'prijs' => 500
        ]);
    }
}
