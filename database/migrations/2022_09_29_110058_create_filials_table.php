<?php

use App\Models\Constituicao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('localidade');
            $table->string('uf');
            $table->integer('numero');
            $table->string('atividade_mesmo_matriz');
            $table->string('objeto')->nullable();
            $table->string('capital_mesmo_matriz');
            $table->string('capital')->nullable();
            $table->string('contabilidade_centralizada_matriz');
            $table->string('contabilidade')->nullable();

            $table->foreignIdFor(Constituicao::class);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('filials');
    }
};
