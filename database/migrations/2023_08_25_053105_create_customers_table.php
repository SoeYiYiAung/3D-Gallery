<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('message');
            $table->string('last_name');
            $table->string('company_name');
            $table->string('country_code');
            $table->string('phone_no');
            $table->string('email');
            $table->string('subject');
            $table->string('about_project');
            $table->string('used_budget');
            $table->string('detail');

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
        Schema::dropIfExists('customers');
    }
};
