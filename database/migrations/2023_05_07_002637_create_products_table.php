
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id("product_id");
            $table->foreignIdFor(\App\Models\Category::class,"category_id");
            $table->foreignIdFor(\App\Models\Brand::class,"brand_id");
            $table->string("oem_number");
            $table->string("stock_code")->unique();
            $table->string("name");
            $table->decimal("price");
            $table->decimal("cost_price");
            $table->integer("stock");
            $table->text("description")->nullable();
            $table->string("slug")->unique();
            $table->boolean('sales_format')->default(0);
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
        Schema::dropIfExists('products');
    }
};
