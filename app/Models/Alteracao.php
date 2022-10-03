<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alteracao extends Model
{
    protected $guarded = [];

    protected $table = 'alteracoes';

    protected $casts = [
        'data_integralizacao' => 'date',
        'executando_em' => 'datetime',
        'finalizado_em' => 'datetime'
    ];

    public function autor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'autor_id');
    }

    public function analista(): BelongsTo
    {
        return $this->belongsTo(User::class, 'analista_id');
    }
}
