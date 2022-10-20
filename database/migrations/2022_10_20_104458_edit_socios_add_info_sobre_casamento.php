<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->string('casado_exterior')->after('estado_civil')->nullable();
            $table->string('cpf_conjuge')->after('casado_exterior')->nullable();
            $table->string('nome_conjuge')->after('cpf_conjuge')->nullable();
            $table->string('regime_bens')->after('nome_conjuge')->nullable();
        });
    }

    public function down()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->dropColumn([
                'casado_exterior',
                'cpf_conjuge',
                'nome_conjuge',
                'regime_bens'
            ]);
        });
    }
};
