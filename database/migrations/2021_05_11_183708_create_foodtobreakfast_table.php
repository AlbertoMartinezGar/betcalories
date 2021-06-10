<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodtobreakfastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodtobreakfast', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->float('quantity');

            //Relación con el alimento
            $table->unsignedBigInteger('food_id')->nullable();
            
            $table->foreign('food_id')
                ->references('id')
                ->on('food')->nullable();

            //Relación con el desayuno
            $table->unsignedBigInteger('foodTo_id')->nullable();
        
            $table->foreign('foodTo_id')
                ->references('id')
                ->on('breakfast')->nullable();
                
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
        Schema::dropIfExists('foodtobreakfast');
    }
}
