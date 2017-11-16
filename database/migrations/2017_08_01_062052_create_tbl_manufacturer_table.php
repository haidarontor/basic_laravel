<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblManufacturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_manufacturer', function (Blueprint $table) {
            $table->increments('manufacturer_id');
            $table->string('manufacturer_name', 50);
            $table->text('manufacturer_description');
            $table->tinyInteger('Manufacturer_status');
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
        Schema::dropIfExists('tbl_manufacturer');
    }
}
