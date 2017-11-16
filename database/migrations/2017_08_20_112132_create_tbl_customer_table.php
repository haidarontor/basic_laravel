<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCustomerTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_customer', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('company_name', 80);
            $table->string('email_address', 100);
            $table->string('address');
            $table->string('country', 50);
            $table->string('city', 50);
            $table->string('state', 30);
            $table->string('post_zip_code', 25);
            $table->string('mobile_number', 30);
            $table->string('password', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_customer');
    }

}
