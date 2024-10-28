<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('producoes', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('periodo');
            $table->float('litragem');
            $table->timestamps();
        });

        Schema::create('animal_producao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('producao_id');
            $table->timestamps();

            $table->foreign('animal_id')->references('id')->on('animais')->onDelete('cascade');
            $table->foreign('producao_id')->references('id')->on('producoes')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('animal_producao');
        Schema::dropIfExists('producoes');
    }
};
