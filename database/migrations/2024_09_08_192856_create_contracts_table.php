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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Название договора
            $table->text('description'); // Описание договора
            $table->text('company');
            $table->unsignedBigInteger('user_id'); // ID пользователя
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('contract_date'); // Дата договора
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
        Schema::dropIfExists('contracts');
    }
};
