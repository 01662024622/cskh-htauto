<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHt11InsuranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht11_insurance', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('content')->nullable();
            $table->string('link')->nullable();
            $table->integer('status')->default(0);
            $table->integer('type')->default(0);
            $table->integer('create_by')->default(0);
            $table->integer('modify_by')->nullable();
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
        Schema::dropIfExists('ht11_insurance');
    }
}
