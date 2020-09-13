<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroceryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grocery_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('grocery_id');
            $table->string('grocery_category');
            $table->string('grocery_menu');
            $table->string('product_name');
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
        Schema::dropIfExists('grocery_products');
    }
}
