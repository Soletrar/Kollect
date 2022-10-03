<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('meis', function (Blueprint $table) {
            $table->id();

            $table->string('nome_fantasia');
            $table->string('rg');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('email');
            $table->string('endereco_residencial');
            $table->string('endereco_comercial');
            $table->string('titulo_eleitor')->nullable();
            $table->string('senha_govbr');
            $table->string('numero_recibo')->nullable();
            $table->text('atividades_economicas');

            $table->string('prioridade');

            $table->string('status')->default('Não iniciado');

            $table->datetime('executando_em')->nullable();
            $table->datetime('finalizado_em')->nullable();

            $table->foreignIdFor(User::class, 'autor_id');
            $table->foreignIdFor(User::class, 'analista_id')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('meis');
    }
};
