<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name', 255)->nullable();
            $table->string('description_en', 500)->nullable();
            $table->string('description_am', 500)->nullable();
            $table->string('description_ru', 500)->nullable();
            $table->decimal('price', 22)->nullable()->default(0.00);
            $table->decimal('old_price', 22)->nullable()->default(0.00);
            $table->json('images')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
