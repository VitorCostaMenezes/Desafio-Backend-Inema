<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    // public function client() {

    //     return $this->hasMany('App\Models\Adress');
    // }

    public function client() {
        return $this->belongsTo('App\Models\Adress');
    }
}
