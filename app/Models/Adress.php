<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $dates = ['date'];
    protected $products = [];
    protected $fillable = [
        'rua', 
        'bairro',
        'cidade',
        'numero',
        'estado',
        'client_id'
    ];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }
}
