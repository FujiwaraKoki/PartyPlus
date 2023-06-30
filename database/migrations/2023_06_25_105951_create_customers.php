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
        Schema::create('customers', function (Blueprint $table) {
            /*
            $table->id();
            $table->timestamp();
            */
            $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('last_name_fonetic');
            $table->string('first_name_fonetic');
            $table->integer('age');
            $table->string('mail');
            $table->string('phone');
            $table->string('postal_number');
            $table->string('prefecture');
            $table->string('city1');
            $table->string('city2');
            $table->string('building');
            $table->string('birth_year');
            $table->string('work_style');
            $table->string('job');
            $table->dateTime('reg_dt');
            $table->dateTime('update_dt');
            $table->text('remarks');
            $table->integer('person_type');
            //$table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
