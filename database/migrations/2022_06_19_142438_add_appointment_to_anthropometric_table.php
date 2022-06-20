<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon; 

class AddAppointmentToAnthropometricTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('anthropometric', function (Blueprint $table) {
            $table->date('appointment')->default(Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anthropometric', function (Blueprint $table) {
            $table->dropColumn('appointment');
        });
    }
}
