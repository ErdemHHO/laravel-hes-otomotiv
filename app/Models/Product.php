<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $primaryKey="product_id";

    protected $fillable=[
        "product_id",
        "stock_code",
        "category_id",
        "brand_id",
        "oem_number",
        "name",
        "price",
        "cost_price",
        "stock",
        "description",
        "slug",
        "sales_format",
        "status",
        "is_active",
    ];
    
    public function category()
    {
        return $this->hasOne(Category::class, "category_id", "category_id");
    }
    public function brand()
    {
        return $this->hasOne(Brand::class, "brand_id", "brand_id");
    }
    public function car()
    {
        return $this->belongsToMany(Car::class, 'carProducts', 'product_id', 'car_id');
    }
    public function seri()
    {
        return $this->belongsToMany(Car::class, 'seriProducts', 'product_id', 'seri_id');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class, "product_id", "product_id");
    }
}
