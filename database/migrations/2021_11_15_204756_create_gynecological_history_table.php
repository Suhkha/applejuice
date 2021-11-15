<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGynecologicalHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gynecological_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('menarche');
            $table->text('menarche_comments');
            $table->string('abortion');
            $table->text('abortion_comments');
            $table->string('menstruation');
            $table->text('menstruation_comments');
            $table->string('contraceptive_method');
            $table->text('contraceptive_method_comments');
            $table->text('medicines');
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
        Schema::dropIfExists('gynecological_history');
    }
}
