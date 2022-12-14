<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Baixa extends Model
{
    protected $guarded = [];

    protected $casts = ['executando_em' => 'datetime', 'finalizado_em' => 'datetime', 'data_baixa' => 'date:Y-m-d'];

    public function autor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'autor_id');
    }

    public function analista(): BelongsTo
    {
        return $this->belongsTo(User::class, 'analista_id');
    }
}
