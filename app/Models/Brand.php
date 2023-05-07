<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = "brand_id";

    protected $fillable = [
        "brand_id",
        "name",
        "slug",
        "is_active",
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, "brand_id", "brand_id");
    }
}
