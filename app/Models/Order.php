<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $dates = ['date'];

    protected $fillable = [
        'client_id', 
        'valor'
    ];

    protected $products = [];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function relations() {
        return $this->hasMany(Relation::class);
    }
}
