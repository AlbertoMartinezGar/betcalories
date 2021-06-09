<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinner', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('foodto_id')->nullable();
            
            $table->foreign('foodto_id')
                ->references('id')
                ->on('foodtodinner')
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
        Schema::dropIfExists('dinner');
    }
}
