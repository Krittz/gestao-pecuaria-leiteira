<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('imagem')->nullable();  // Caminho da imagem
            $table->string('sexo');
            $table->date('nascimento');
            $table->boolean('prenhez')->default(false);
            $table->unsignedBigInteger('mae_id')->nullable();
            $table->unsignedBigInteger('pai_id')->nullable();
            $table->timestamps();

            $table->foreign('mae_id')->references('id')->on('animais')->onDelete('set null');
            $table->foreign('pai_id')->references('id')->on('animais')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('animais');
    }
};
