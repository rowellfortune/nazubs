<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factuur extends Model
{
    //
    protected $fillable = [
        'invoice_nummer',
        'datum',
        'contact_persoon'
    ];
}
