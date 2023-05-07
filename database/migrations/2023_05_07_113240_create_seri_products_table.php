<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSeriProductsTable extends Migration
{
    public function up()
    {
        Schema::create('seriProducts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seri_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('seri_id')->references('seri_id')->on('seris')->onDelete('cascade');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seriProducts');
    }
}

