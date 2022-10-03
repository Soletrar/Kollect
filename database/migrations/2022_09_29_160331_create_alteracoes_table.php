<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('alteracoes', function (Blueprint $table) {
            $table->id();

            $table->string('tipo_alteracao');
            $table->text('descricao_alteracao');
            $table->string('nome_empresarial');
            $table->string('nome_empresarial2')->nullable();
            $table->string('nome_empresarial3')->nullable();
            $table->string('nome_fantasia')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('bairro')->nullable();
            $table->string('localidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('numero')->nullable();
            $table->string('referencia')->nullable();
            $table->string('tipo_complemento')->nullable();
            $table->string('complemento')->nullable();
            $table->string('tipo_complemento2')->nullable();
            $table->string('complemento2')->nullable();
            $table->string('tipo_complemento3')->nullable();
            $table->string('complemento3')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('tipo_societario')->nullable();
            $table->string('capital_social')->nullable();
            $table->date('data_integralizacao')->nullable();
            $table->string('clausula_restritiva')->nullable();
            $table->string('porte')->nullable();
            $table->string('simples')->nullable();
            $table->string('area_imovel')->nullable();
            $table->string('pavimentos')->nullable();
            $table->string('outra_edificacao')->nullable();
            $table->string('edificacao')->nullable();
            $table->string('natureza_imovel')->nullable();
            $table->string('inscricao_imovel')->nullable();
            $table->string('tipo_imovel')->nullable();
            $table->string('advogado')->nullable();
            $table->string('advogado_oab')->nullable();
            $table->string('assinatura_contrato')->nullable();
            $table->string('senha_govbr')->nullable();
            $table->string('objeto')->nullable();
            $table->string('cnae')->nullable();
            $table->text('honorario_observacao')->nullable();
            $table->text('honorario_extra')->nullable();

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
        Schema::dropIfExists('alteracoes');
    }
};
