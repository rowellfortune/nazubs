<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Factuur;
class FacturenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Factuur::create([
            'invoice_nummer' => 12345465,
            'datum' => Carbon::now()->subYear()->addDay(),
            'contact_persoon' => 'LippyT Drive 123',
        ]);
        		

    }
}
