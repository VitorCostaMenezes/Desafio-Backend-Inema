<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $fillable = [
        'order_id ', 
        'product_id',
        'amount'
    ];

    public function order() {
        return $this->belongsToMany(Order::class);
    }

    public function product() {
        return $this->belongsToMany(product::class);
    }

}
