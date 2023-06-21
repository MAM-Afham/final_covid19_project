<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('update_date_time');
            $table->integer('local_new_cases');
            $table->integer('local_total_cases');
            $table->integer('local_total_number_of_individuals_in_hospitals');
            $table->integer('local_deaths');
            $table->integer('local_new_deaths');
            $table->integer('local_recovered');
            $table->integer('local_active_cases');
            $table->integer('global_new_cases');
            $table->integer('global_total_cases');
            $table->integer('global_deaths');
            $table->integer('global_new_deaths');
            $table->integer('global_recovered');
            $table->integer('total_pcr_testing_count');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas');
    }
};
