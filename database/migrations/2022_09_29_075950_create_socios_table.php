<?php

use App\Models\Constituicao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('estado_civil');
            $table->string('cpf');
            $table->string('rg');
            $table->date('nascimento');
            $table->string('pai');
            $table->string('mae');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('profissao');
            $table->string('registro_profissional')->nullable();
            $table->string('telefone');
            $table->string('email');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('localidade');
            $table->string('uf');
            $table->integer('numero');
            $table->string('tipo_complemento')->nullable();
            $table->string('complemento')->nullable();
            $table->string('tipo_complemento2')->nullable();
            $table->string('complemento2')->nullable();
            $table->string('tipo_complemento3')->nullable();
            $table->string('complemento3')->nullable();
            $table->string('capital_social');
            $table->string('forma_integralizacao');
            $table->string('socio_administrador');
            $table->string('representado');
            $table->string('responsavel')->nullable();
            $table->foreignIdFor(Constituicao::class);


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('socios');
    }
};
