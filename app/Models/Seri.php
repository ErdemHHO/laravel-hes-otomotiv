<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seri extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = "seri_id";

    protected $fillable = [
        "seri_id",
        "name",
        "slug",
    ];

    public function car()
    {
        return $this->hasMany(Car::class, "seri_id", "seri_id");
    }
    public function series(): HasMany
    {
        return $this->hasMany(Seri::class, "seri_id", "seri_id");
    }
    public function product()
    {
        return $this->belongsToMany(Product::class, 'seriProducts', 'seri_id', 'product_id');
    }
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, "category_id", "category_id");
    }
}