<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('inseminacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('receptora_id');
            $table->unsignedBigInteger('doadora_id');
            $table->unsignedBigInteger('padriador_id');
            $table->date('data_aplicacao');
            $table->timestamps();

            $table->foreign('receptora_id')->references('id')->on('animais')->onDelete('cascade');
            $table->foreign('doadora_id')->references('id')->on('animais')->onDelete('cascade');
            $table->foreign('padriador_id')->references('id')->on('animais')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('inseminacoes');
    }
};
