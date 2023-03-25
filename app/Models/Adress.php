<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $products = [];

    // public function client() {
    //     return $this->hasMany('App\Models\Client');
    // }

    // public function client() {
    //     return $this->belongsTo('App\Models\Client');
    // }

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }
}
