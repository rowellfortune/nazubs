<?php

use Illuminate\Database\Seeder;

class KlantenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('klanten')->insert([
            'bedrijf_naam' => 'unasat',
            'contact_persoon' => 'Rowell',
            'adres' => 'Savage Lane 123',
            'postcode' => '00597',
            'woonplaats' => 'Savega Town',
            'telefoon' => '8201598',
            'fax' => '8201598',
            'mobiel' => '8201598',
            'email' => 'r.fortune@unasat.sr',
            'website' => 'unasat.sr'
        ]);
        DB::table('klanten')->insert([
            'bedrijf_naam' => 'unasat',
            'contact_persoon' => 'Bien',
            'adres' => 'Lost lane 123',
            'postcode' => '00597',
            'woonplaats' => 'Lost in Paradise',
            'telefoon' => '8201598',
            'fax' => '8201598',
            'mobiel' => '8201598',
            'email' => 'r.fortune@unasat.sr',
            'website' => 'unasat.sr'
        ]);
        DB::table('klanten')->insert([
            'bedrijf_naam' => 'unasat',
            'contact_persoon' => 'Jason K',
            'adres' => 'Getto Drive 123',
            'postcode' => '00597',
            'woonplaats' => 'Abra Broki Getto',
            'telefoon' => '8201598',
            'fax' => '8201598',
            'mobiel' => '8201598',
            'email' => 'r.fortune@unasat.sr',
            'website' => 'unasat.sr'
        ]);
        DB::table('klanten')->insert([
            'bedrijf_naam' => 'unasat',
            'contact_persoon' => 'O benen Sarmeen',
            'adres' => 'Hels Gate 123',
            'postcode' => '00597',
            'woonplaats' => 'some where in hel',
            'telefoon' => '8201598',
            'fax' => '8201598',
            'mobiel' => '8201598',
            'email' => 'r.fortune@unasat.sr',
            'website' => 'unasat.sr'
        ]);
        DB::table('klanten')->insert([
            'bedrijf_naam' => 'FHR',
            'contact_persoon' => 'Dean',
            'adres' => 'LippyT Drive 123',
            'postcode' => '00597',
            'woonplaats' => 'Lipp Town',
            'telefoon' => '8201598',
            'fax' => '8201598',
            'mobiel' => '8201598',
            'email' => 'r.fortune@unasat.sr',
            'website' => 'unasat.sr'
        ]);
    }
}
