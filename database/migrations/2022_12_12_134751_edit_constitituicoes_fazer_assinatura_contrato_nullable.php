<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('constituicoes', function (Blueprint $table) {
            $table->string('assinatura_contrato')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('constituicoes', function (Blueprint $table) {
            $table->dropColumn(['assinatura_contrato']);
        });
    }
};
