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
        "is_active",
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, "seri_id", "seri_id");
    }
}