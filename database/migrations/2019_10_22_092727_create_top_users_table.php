<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name');
            $table->char('mobile');
            $table->char('email');
            $table->string('address');
            $table->char('password');
            $table->string('type');
            $table->integer('roleid');
            $table->string('status');
            $table->string('customer_status');
            $table->text('image');
            $table->string('joindate');
            $table->string('nid');
            $table->string('free');
            $table->string('free1');
            $table->string('remember');
            $table->string('created_by');
            $table->string('updated_by');
  
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
        Schema::dropIfExists('top_users');
    }
}
