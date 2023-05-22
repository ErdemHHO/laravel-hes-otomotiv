<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = "car_id";

    protected $fillable = [
        "car_id",
        "seri_id",
        "name",
        "slug",
    ];

    public function seri()
    {
        return $this->hasOne(Seri::class, "seri_id", "seri_id");
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, 'carProducts', 'car_id', 'product_id');
    }
    public function images()
    {
        return $this->hasMany(CarImage::class, "car_id", "car_id");
    }
}