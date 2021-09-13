<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateTaxPayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_tax_payers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('category');
            $table->string('sector');
            $table->string('rc_no')->nullable();
            $table->string('date_established');
            $table->string('address');
            $table->string('lga');
            $table->string('town');
            $table->string('staff_strength');
            $table->string('corporate_birs_no')->nullable();
            $table->string('corporate_tin_no')->nullable();
             //$table->string('office_phone_no');
             // $table->string('office_email');
            $table->string('geolocation')->nullable();
            $table->string('individual_tax_payer_id');
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
        Schema::dropIfExists('corporate_tax_payers');
    }
}
