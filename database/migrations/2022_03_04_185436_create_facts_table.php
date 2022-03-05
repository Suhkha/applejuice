<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->string('weight')->nullable();
            $table->string('average_fat')->nullable();
            $table->string('muscle')->nullable();
            $table->string('metabolic_age')->nullable();
            $table->string('waist')->nullable();
            $table->string('thigh')->nullable();
            $table->string('hips')->nullable();
            $table->string('biceps')->nullable();
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
        Schema::dropIfExists('facts');
    }
}
