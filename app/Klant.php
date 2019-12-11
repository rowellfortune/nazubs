<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    //
    protected $fillable = [
        'name', 
        'appartementen_id',
        'bedrijf_naam',
        'contact_persoon',
        'adres',
        'postcode',
        'woonplaats',
        'telefoon',
        'fax',
        'mobiel',
        'email',
        'website'
    ];

    public function status(){
        return $this->belongsTo('App\Status');
    }
}
