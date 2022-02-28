<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('custom_recipe_id');
            $table->foreign('custom_recipe_id')
                ->references('id')
                ->on('custom_recipes')
                ->onDelete('cascade');
            $table->longText('ingredients')->nullable();
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
        Schema::dropIfExists('ingredients_list');
    }
}
