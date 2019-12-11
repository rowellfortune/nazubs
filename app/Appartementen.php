<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Appartementen extends Model
{
    //
    protected $fillable = [
        'name', 'appartementen_id',
    ];

    public function status(){
        return $this->belongsTo('App\Status');
    }
}
