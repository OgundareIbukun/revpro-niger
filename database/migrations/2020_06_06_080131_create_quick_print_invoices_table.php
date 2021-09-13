<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuickPrintInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quick_print_invoices', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->unsignedBigInteger('revenue_point_id');
            //  $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('agent_id');
          //  $table->unsignedBigInteger('individual_tax_payer_id')->nullable();
            $table->decimal('amount', 10, 2)->default(0.00);
            // $table->enum('payment_type', ['cash','card','bank','card_bank','card_ussd']);
            // $table->string('payment_category');
            $table->string('transaction_reference', 100)->nullable();
              $table->string('status')->nullable();
            $table->string('invoice');
           // $table->unsignedBigInteger('log_id')->nullable();
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
        Schema::dropIfExists('quick_print_invoices');
    }
}
