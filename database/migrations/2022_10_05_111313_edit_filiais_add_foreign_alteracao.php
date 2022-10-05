<?php

use App\Models\Alteracao;
use App\Models\Constituicao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('filiais', function (Blueprint $table) {
            $table->foreignIdFor(Constituicao::class)->nullable()->change();
            $table->foreignIdFor(Alteracao::class)->nullable()->after('constituicao_id');
        });
    }

    public function down()
    {
        Schema::table('filiais', function (Blueprint $table) {
            $table->dropColumn('alteracao_id');
        });
    }
};
