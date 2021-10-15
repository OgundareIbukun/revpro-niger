<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imo_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('service_cat')->nullable();
            $table->string('description')->nullable();
            $table->string('service_group')->nullable();
            $table->string('has_group')->nullable();
            $table->integer('mda_id');
            $table->float('amount')->default(0);
            $table->integer('frequency')->nullable();
            $table->string('location')->nullable();
            $table->integer('quick_print')->default(0);
            $table->string('eligibility')->nullable();
            $table->integer('status')->default(0);
            $table->integer('service_type_id')->nullable();
            $table->string('item_code');
            $table->integer('split_rule')->nullable();
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
        Schema::dropIfExists('imo_services');
    }
}
