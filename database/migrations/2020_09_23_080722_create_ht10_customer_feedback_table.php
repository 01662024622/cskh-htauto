<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHT10CustomerFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht10_customer_feedback', function (Blueprint $table) {
            $table->id();
            $table->string("customer_code")->nullable();
            $table->integer("attitude")->nullable();
            $table->integer("knowledge")->nullable();
            $table->integer("time")->nullable();
            $table->integer("cost")->nullable();
            $table->integer("diversity")->nullable();
            $table->integer("quality")->nullable();
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
        Schema::dropIfExists('ht10_customer_feedback');
    }
}
