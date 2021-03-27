<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHt50InformationCustomerSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht50_information_customer_surveys', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name_gara');
            $table->string('name');
            $table->string('birthday');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('name_sale');
            $table->string('phone_sale');
            $table->string('name_accountant')->nullable();
            $table->string('phone_accountant')->nullable();
            $table->string('address');
            $table->string('province');
            $table->string('city');
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
        Schema::dropIfExists('ht50_information_customer_surveys');
    }
}
