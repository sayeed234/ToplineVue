<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vendor_id');
            $table->string('vendor_name');
            $table->string('vendor_logo');
            $table->string('Pro_name');
            $table->string('mobile');
            $table->string('email');
            $table->string('user_id');
            $table->string('nid');
            $table->string('tin');
            $table->string('bank');
            $table->string('address');
            $table->text('agreement');
            $table->string('agr_date');
            $table->string('contact_name');
            $table->string('Contact_mobile');
            $table->string('slider');
            $table->string('map');
            $table->string('joindate');
            $table->string('password');
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('total_view');
            $table->string('free');
            $table->string('free1');
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
        Schema::dropIfExists('vendors');
    }
}
