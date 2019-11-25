<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurentProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurent_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('restaurent_id');
            $table->string('product_category');
            $table->string('menu');
            $table->string('name');
            $table->string('price');
            $table->string('sortdescription');
            $table->string('longdescription');
            $table->text('thumbnail');
            $table->text('image');
            $table->string('status');
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
        Schema::dropIfExists('restaurent_products');
    }
}
