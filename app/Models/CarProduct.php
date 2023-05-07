<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CarProduct extends Model
{
    use HasFactory;

    protected $table = 'carProducts';

    protected $fillable = [
        'car_id',
        'product_id',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}