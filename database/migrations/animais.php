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
            $table->string('imagem')->nullable();
            $table->string('sexo');
            $table->date('nascimento');
            $table->boolean('prenhez')->default(false);
            $table->boolean('ativo')->default(true);
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Adicionando a coluna user_id
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animais');
    }
};
