<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = "car_id";

    protected $fillable = [
        "car_id",
        "name",
        "slug",
        "is_active",
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'carProducts', 'car_id', 'product_id');
    }
}