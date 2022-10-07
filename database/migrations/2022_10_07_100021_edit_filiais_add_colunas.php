<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('filiais', function (Blueprint $table) {
            $table->string('referencia')->nullable()->after('numero');
            $table->string('tipo_complemento')->nullable()->after('referencia');
            $table->string('complemento')->nullable()->after('tipo_complemento');
            $table->string('tipo_complemento2')->nullable()->after('complemento');
            $table->string('complemento2')->nullable()->after('tipo_complemento2');
            $table->string('tipo_complemento3')->nullable()->after('complemento2');
            $table->string('complemento3')->nullable()->after('tipo_complemento3');
            $table->string('area_imovel')->nullable()->after('complemento3');
            $table->string('pavimentos')->nullable()->after('area_imovel');
            $table->string('outra_edificacao')->nullable()->after('pavimentos');
            $table->string('edificacao')->nullable()->after('outra_edificacao');
            $table->string('natureza_imovel')->nullable()->after('edificacao');
            $table->string('inscricao_imovel')->nullable()->after('natureza_imovel');
            $table->string('tipo_imovel')->nullable()->after('inscricao_imovel');
        });
    }

    public function down()
    {
        Schema::table('filiais', function (Blueprint $table) {
            $table->dropColumn([]);
        });
    }
};
