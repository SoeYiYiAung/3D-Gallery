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
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('work_id');
            $table->foreign('work_id')
                    ->references('id')->on('works')
                    ->onDelete('cascade');
            $table->string('first_photo');
            $table->string('second_photo');
            $table->string('third_photo');
            $table->string('first_description');
            $table->string('second_description');
            $table->string('third_description');

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
        Schema::dropIfExists('project_details');
    }
};
