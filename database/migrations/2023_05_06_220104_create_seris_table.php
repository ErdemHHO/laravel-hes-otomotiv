<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seris', function (Blueprint $table) {
            $table->id("seri_id");
            $table->string("name");
            $table->string("slug")->unique();
            $table->boolean("is_active")->default(false);
            $table->softDeletes();
            $table->timestamps();      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seris');
    }
};

