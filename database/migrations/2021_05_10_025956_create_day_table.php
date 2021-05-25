<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('day');
            $table->unsignedBigInteger('breakfast_id');
            $table->foreign('breakfast_id')
                ->references('id')
                ->on('breakfast')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->unsignedBigInteger('lunch_id');
            $table->foreign('lunch_id')
                ->references('id')
                ->on('lunch')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('dinner_id');
            $table->foreign('dinner_id')
                ->references('id')
                ->on('dinner')
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
        Schema::dropIfExists('day');
    }
}
