<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHT10FeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht10_feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string("order");
            $table->string("content");
            $table->string("note")->nullable();
            $table->string("option")->nullable();
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
        Schema::dropIfExists('ht10_feedbacks');
    }
}
