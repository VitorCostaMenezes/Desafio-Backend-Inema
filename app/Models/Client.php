<?php

namespace App\Models;

// use App\Models\Adress;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $products = [];
    protected $dates = ['date'];
    protected $fillable = [
        'name', 
        'email',
        'telefone'
    ];

    public function adress() {
        return $this->hasOne(Adress::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

}
