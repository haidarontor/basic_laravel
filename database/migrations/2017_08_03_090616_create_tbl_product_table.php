<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('id');
            $table->string('product_title', 100);
            $table->string('product_name', 100);
            $table->string('product_price', 50);
            $table->text('product_short_description');
            $table->text('product_long_description');
            $table->string('image_name');
            $table->tinyInteger('is_feature');
           
            $table->tinyInteger('product_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_product');
    }

}
