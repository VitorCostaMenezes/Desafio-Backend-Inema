<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'amount',
        'valor'
    ];

    public $timestamps = false;

    protected $products = [];

    public function relations() {
        return $this->hasMany(Relation::class);
    }
}
