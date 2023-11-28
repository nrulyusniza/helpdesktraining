<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('request_id')->index('request_id');
            $table->string('ticket_no', 25)->nullable();
            $table->integer('ticket_type')->nullable()->default(1)->index('ticket_type');
            $table->integer('severity_id')->nullable()->index('severity_id');
            $table->integer('ticstatus_id')->nullable()->index('status_id');
            $table->dateTime('report_received')->nullable();
            $table->string('created_by', 20)->nullable();
            $table->dateTime('create_date')->nullable();
            $table->string('updated_by', 20)->nullable();
            $table->dateTime('update_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
