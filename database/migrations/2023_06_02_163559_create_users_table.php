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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 72);
            $table->smallInteger('idade');
            $table->string('cpf', 14)->unique();
            $table->string('rg', 12)->unique();
            $table->string('data_nasc', 10);
            $table->string('sexo', 24);
            $table->string("signo", 24);
            $table->string('mae', 72);
            $table->string('pai', 72);
            $table->string('email', 72)->unique();
            $table->text('senha');
            $table->string('cep', 9);
            $table->string('endereco', 217);
            $table->string('numero', 16);
            $table->string('bairro', 72);
            $table->string('cidade', 72);
            $table->string('estado', 72);
            $table->string('telefone_fixo', 14);
            $table->string('celular', 16);
            $table->string('altura', 4);
            $table->string('peso', 6);
            $table->string('tipo_sanguineo', 4);
            $table->string('cor', 24);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
