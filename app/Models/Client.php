<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $products = [];

    // public function client() {

    //     return $this->hasMany('App\Models\Adress');
    // }

    public function adress() {
        return $this->belongsTo('App\Models\Adress');
    }

    // public function client() {
    //     return $this->belongsTo(Client::class);
    // }
}
