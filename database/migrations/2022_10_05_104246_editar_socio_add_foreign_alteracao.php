<?php

use App\Models\Alteracao;
use App\Models\Constituicao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->foreignIdFor(Constituicao::class)->nullable()->change();
            $table->foreignIdFor(Alteracao::class)->after('constituicao_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->foreignIdFor(Constituicao::class)->change();
            $table->dropColumn(['alteracao_id']);
        });
    }
};
