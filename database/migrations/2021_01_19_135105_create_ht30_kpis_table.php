<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHt30KpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht30_kpis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('td_id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('level');
            $table->integer('type')->default(0);
            $table->integer('minus')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('ht30_kpis');
    }
}
