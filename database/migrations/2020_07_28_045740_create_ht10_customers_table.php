<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHT10CustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht10_customers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name_follow');
            $table->string('name_main')->nullable();
            $table->string('name_business')->nullable();
            $table->string('address')->nullable();
            $table->integer('main_group_id')->nullable();
            $table->integer('categorize_customer_id')->nullable();
            $table->integer('classify_customer_id')->nullable();
            $table->string('supplies')->nullable();
            $table->string('supplies_phone_1')->nullable();
            $table->string('supplies_phone_2')->nullable();
            $table->string('supplies_phone_3')->nullable();
            $table->string('accountant_name')->nullable();
            $table->string('accountant_phone')->nullable();
            $table->string('boss_name')->nullable();
            $table->string('boss_phone')->nullable();
            $table->string('user_code')->nullable();
            $table->string('location')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('ht10_customers');
    }
}
