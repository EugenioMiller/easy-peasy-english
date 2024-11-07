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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nulleable();
            $table->text('content')->nulleable();
            $table->date('start')->nulleable();
            $table->date('end')->nulleable();
            $table->smallInteger('limit');
            $table->smallInteger('price');

            //FK levels
            $table->unsignedBigInteger('level_id');
            $table->foreign('level_id')->references('id')->on('levels');


            //FK divitions
            $table->unsignedBigInteger('divition_id');
            $table->foreign('divition_id')->references('id')->on('divitions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
