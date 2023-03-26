<?php

namespace App\Models;

// use App\Models\Adress;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 
        'email',
        'telefone'
    ];

    protected $products = [];

    // public function client() {

    //     return $this->hasMany('App\Models\Adress');
    // }

    // public function adress() {
    //     return $this->belongsTo('App\Models\Adress');
    // }

    public function adress() {
        return $this->hasOne(Adress::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    // public function client() {
    //     return $this->belongsTo(Client::class);
    // }
}
