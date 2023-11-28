<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipmentlogs', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->unsignedInteger('equipment_id')->nullable()->unique('equipment_id');
            $table->string('asset_newlocation', 40)->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->unsignedInteger('assetlog_status')->nullable()->index('assetlog_status');

            $table->index(['id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipmentlogs');
    }
}
