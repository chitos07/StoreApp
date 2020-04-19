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

        Schema::create('products_categories', function (Blueprint $table) {
            $table->id();
            $table->string('categorieName');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('productcat_id');
            $table->string('productName');
            $table->integer('productQuantity');
            $table->integer('productPrice');
            $table->decimal('unitPrice', 8, 2);


            $table->foreign('productcat_id')
            ->references('id')
            ->on('products_categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
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
