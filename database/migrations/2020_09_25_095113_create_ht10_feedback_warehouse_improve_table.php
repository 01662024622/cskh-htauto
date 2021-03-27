<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHT10FeedbackWarehouseImproveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht10_feedback_warehouse_improve', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("improve_360_id");
            $table->bigInteger("feedback_warehouse_id");
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
        Schema::dropIfExists('ht10_feedback_warehouse_improve');
    }
}
