<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHT10FeedbackPrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht10_feedback_pr', function (Blueprint $table) {
            $table->id();
            $table->integer("amount");
            $table->string("note")->nullable();
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
        Schema::dropIfExists('ht10_feedback_pr');
    }
}
