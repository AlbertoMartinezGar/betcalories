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
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->integer('age')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('caloriesPerDay')->nullable();
            $table->string('role')->nullable();
            $table->unsignedBigInteger('day_id')->nullable();
            
            $table->foreign('day_id')
                ->references('id')
                ->on('day')
                ->onDelete('cascade')
                ->onUpdate('cascade')->nullable();
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
