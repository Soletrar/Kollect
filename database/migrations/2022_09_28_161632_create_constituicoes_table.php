<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('constituicoes', function (Blueprint $table) {
            $table->id();

            $table->string('nome_empresarial');
            $table->string('nome_empresarial2')->nullable();
            $table->string('nome_empresarial3')->nullable();
            $table->string('nome_fantasia')->nullable();
            $table->string('cep');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('localidade');
            $table->string('uf');
            $table->string('numero');
            $table->string('referencia')->nullable();
            $table->string('tipo_complemento')->nullable();
            $table->string('complemento')->nullable();
            $table->string('tipo_complemento2')->nullable();
            $table->string('complemento2')->nullable();
            $table->string('tipo_complemento3')->nullable();
            $table->string('complemento3')->nullable();
            $table->string('telefone');
            $table->string('email');
            $table->string('tipo_societario');
            $table->string('capital_social');
            $table->date('data_integralizacao');
            $table->string('clausula_restritiva')->nullable();
            $table->string('porte');
            $table->string('simples');
            $table->string('area_imovel');
            $table->string('pavimentos');
            $table->string('outra_edificacao');
            $table->string('edificacao')->nullable();
            $table->string('natureza_imovel');
            $table->string('inscricao_imovel')->nullable();
            $table->string('tipo_imovel');
            $table->string('advogado');
            $table->string('advogado_oab')->nullable();
            $table->string('assinatura_contrato');
            $table->string('senha_govbr')->nullable();
            $table->string('objeto');
            $table->string('cnae');
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
        Schema::dropIfExists('constituicoes');
    }
};
