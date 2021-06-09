<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodtodinnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodtodinner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('quantity');
            //Relación con el alimento
            $table->unsignedBigInteger('food_id');
            
            
            $table->foreign('food_id')
                ->references('id')
                ->on('food');

            //Relación con la cena
            $table->unsignedBigInteger('foodTo_id');
        
            $table->foreign('foodTo_id')
                ->references('id')
                ->on('dinner');  
            
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
        Schema::dropIfExists('foodtodinner');
    }
}
