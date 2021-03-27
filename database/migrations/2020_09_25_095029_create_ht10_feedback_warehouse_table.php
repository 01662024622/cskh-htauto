<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHT10FeedbackWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht10_feedback_warehouse', function (Blueprint $table) {
            $table->id();
            $table->string("code_product");
            $table->string("type");
            $table->integer("amount");
            $table->bigInteger("create_by")->default(0);
            $table->bigInteger("modify_by")->nullable();
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
        Schema::dropIfExists('ht10_feedback_warehouse');
    }
}
