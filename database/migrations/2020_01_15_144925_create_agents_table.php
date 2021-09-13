<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('revenue_point_id');
          //  $table->string('agentable_type');
            $table->string('dept');
            $table->decimal('cash_remittance', 8, 2)->default(0.00);
            $table->decimal('max_collection', 8, 2)->default(0.00);
            $table->unsignedInteger('remit_days')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
