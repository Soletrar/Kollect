<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->string('assinatura_contrato')->nullable();
            $table->string('senha_govbr')->nullable();
        });
    }

    public function down()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->dropColumn(['assinatura_contrato', 'senha_govbr']);
        });
    }
};
