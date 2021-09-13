<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('code')->nullable();
            $table->string('name');
            $table->decimal('price', 8, 2)->default(0.00);
            $table->String('frequency')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('other_category')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->decimal('percentage', 8, 2)->nullable();
            $table->String('location')->nullable();

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
        Schema::dropIfExists('services');
    }
}
