<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHt10ReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht10_reviews', function (Blueprint $table) {
            $table->id();
            $table->string("type")->default("attitude");
            $table->string("name")->nullable();
            $table->string("content",2000)->nullable();
            $table->string("image")->nullable();
            $table->string("option")->nullable();
            $table->string("confirm",2000)->nullable();
            $table->string("task_id")->nullable();
            $table->string("browser_task_id")->nullable();
            $table->bigInteger("apartment_id");
            $table->bigInteger("user_id")->default(0);
            $table->bigInteger("create_by")->default(0);
            $table->bigInteger("modify_by")->nullable();
            $table->integer("status")->nullable();
            $table->integer("user_status")->default(0);
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
        Schema::dropIfExists('ht10-reviews');
    }
}
