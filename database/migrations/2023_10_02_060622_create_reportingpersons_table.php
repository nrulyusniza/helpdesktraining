<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportingpersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportingpersons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rptpers_name')->nullable();
            $table->string('rptpers_phone')->nullable();
            $table->string('rptpers_ext')->nullable();
            $table->string('rptpers_mobile')->nullable();
            $table->string('rptpers_email')->nullable();
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
        Schema::dropIfExists('reportingpersons');
    }
}
