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
                ->on('users')
                ->onDelete('cascade');
            $table->float('size')->nullable();
            $table->float('weight')->nullable();
            $table->float('average_fat')->nullable();
            $table->float('muscle_mass_kilo')->nullable();
            $table->string('muscle_quality')->nullable();
            $table->float('bone_mass')->nullable();
            $table->float('visceral')->nullable();
            $table->float('imc')->nullable();
            $table->float('water')->nullable();
            $table->integer('metabolic_age')->nullable();
            $table->float('waist')->nullable();
            $table->float('thigh')->nullable();
            $table->float('hips')->nullable();
            $table->float('biceps')->nullable();
            $table->text('comments')->nullable();
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
