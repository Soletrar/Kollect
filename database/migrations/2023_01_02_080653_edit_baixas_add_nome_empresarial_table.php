<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('baixas', function (Blueprint $table) {
            $table->string('nome_empresarial')->nullable()->after('data_baixa');
        });
    }

    public function down()
    {
        Schema::table('baixas', function (Blueprint $table) {
            $table->dropColumn('nome_empresarial');
        });
    }
};
