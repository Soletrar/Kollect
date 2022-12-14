<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('baixas', function (Blueprint $table) {
            $table->id();

            $table->string('tipo_baixa');
            $table->string('motivo_baixa');
            $table->date('data_baixa');

            $table->string('cnpj');
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('estado');
            $table->string('cidade');
            $table->string('haveres');
            $table->string('valor_haveres')->nullable();
            $table->string('responsabilidade')->nullable();

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
        Schema::dropIfExists('baixas');
    }
};
