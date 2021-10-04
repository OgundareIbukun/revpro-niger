<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoMdasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imo_mdas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('default_itemcode')->nullable();
            $table->string('hide_from_agent')->default('no');
            $table->string('can_complete_payment_on_revpro')->default('yes');
            $table->string('external_api_token')->nullable();
            $table->float('commission_percentage')->default(0);
            $table->string('moneta_token')->nullable();
            $table->string('moneta_mac_id')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('imo_mdas');
    }
}
