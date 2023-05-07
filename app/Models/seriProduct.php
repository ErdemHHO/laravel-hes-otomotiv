<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SeriProduct extends Model
{
    use HasFactory;

    protected $table = 'seriProducts';

    protected $fillable = [
        'seri_id',
        'product_id',
    ];

    public function seri()
    {
        return $this->belongsTo(Seri::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}