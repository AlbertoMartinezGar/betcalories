<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodcountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodcount', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('quantity');

            //Relación con el alimento
            $table->unsignedBigInteger('food_id')->nullable();
            $table->foreign('food_id')
                ->references('id')
                ->on('food')->nullable();

            //Relación con el dia
            $table->unsignedBigInteger('day_id')->nullable();
        
            $table->foreign('day_id')
                ->references('id')
                ->on('day')->nullable();  
            
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
        Schema::dropIfExists('foodcount');
    }
}
