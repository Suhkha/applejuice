<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnthropometricTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anthropometric', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->float('size');
            $table->float('weight');
            $table->float('average_fat');
            $table->float('muscle_mass_kilo');
            $table->string('muscle_quality');
            $table->float('bone_mass');
            $table->float('visceral');
            $table->integer('metabolic_age');
            $table->float('waist');
            $table->float('thigh');
            $table->float('hips');
            $table->float('biceps');
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
        Schema::dropIfExists('anthropometric');
    }
}
