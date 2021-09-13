<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemittancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remittances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('agent_id');
            $table->decimal('amount', 8, 2)->default(0.00);
            $table->enum('payment_type', ['cash','card','bank','card_bank','card_ussd']);
            $table->string('transaction_reference');
            $table->string('invoice');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['agent_id', 'transaction_reference']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remittances');
    }
}
