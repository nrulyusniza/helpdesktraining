<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('req_no')->nullable();
            $table->string('req_type')->nullable();
            $table->string('req_div')->nullable();
            $table->date('req_date')->nullable();
            $table->string('req_attachment')->nullable();
            $table->string('req_desc')->nullable();
            $table->foreign('asset_id')->references('id')->on('equipments');
            $table->foreign('site_id')->references('id')->on('sites');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('reptpers_id')->references('id')->on('reportingpersons');
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
        Schema::dropIfExists('requests');
    }
}
