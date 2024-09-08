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
        Schema::table('contracts', function (Blueprint $table) {
            // Поле для стороны, которая подписывает договор (например, клиент)
            $table->string('signed_by')->nullable();

            // Поле для стороны, с которой подписывают договор (например, контрагент)
            $table->string('signed_with')->nullable();

            // Поле для даты начала действия договора
            $table->date('start_date')->nullable();

            // Поле для даты окончания действия договора
            $table->date('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contracts', function (Blueprint $table) {
            //
        });
    }
};
