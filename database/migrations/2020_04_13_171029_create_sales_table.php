<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size');
            $table->integer('Qunitiy');
            $table->integer('price');
            $table->decimal('Unit_Price',10,2);
            $table->timestamps();
        });


        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sales_invoices_id');
            $table->integer('Qunitiy');
            $table->foreignId('Product_id');
            $table->foreignId('packages_id');
            $table->decimal('price',10,2);
            $table->timestamps();

            
            $table->foreign('sales_invoices_id')
            ->references('id')
            ->on('sales_invoices')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('Product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            

            $table->foreign('packages_id')
            ->references('id')
            ->on('packages')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
