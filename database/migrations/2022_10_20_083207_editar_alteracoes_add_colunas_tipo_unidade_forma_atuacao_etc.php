<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('alteracoes', function (Blueprint $table) {
            $table->string('tipo_unidade')->after('tipo_imovel')->nullable();
            $table->string('forma_atuacao')->after('tipo_unidade')->nullable();
            $table->string('inocuo_virtual')->after('forma_atuacao')->nullable();
            $table->string('residencia_empreendedor')->after('inocuo_virtual')->nullable();
            $table->string('quantidade_ambiente')->after('residencia_empreendedor')->nullable();
            $table->string('subsolo_estacionamento')->after('quantidade_ambiente')->nullable();
            $table->string('quantidade_combustivel')->after('subsolo_estacionamento')->nullable();
            $table->string('quantidade_petroleo')->after('quantidade_combustivel')->nullable();
        });
    }

    public function down()
    {
        Schema::table('alteracoes', function (Blueprint $table) {
            $table->dropColumn([
                'tipo_unidade',
                'forma_atuacao',
                'inocuo_virtual',
                'residencia_empreendedor',
                'quantidade_ambiente',
                'subsolo_estacionamento',
                'quantidade_combustivel',
                'quantidade_petroleo'
            ]);
        });
    }
};
