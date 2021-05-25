<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->float('height');
            $table->float('weight');
            $table->integer('age');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('caloriesPerDay');
            $table->integer('goal');
            $table->integer('role');
            $table->unsignedBigInteger('day_id');
            
            $table->foreign('day_id')
                ->references('id')
                ->on('day')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
