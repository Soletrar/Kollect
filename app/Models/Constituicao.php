<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Constituicao extends Model
{
    protected $guarded = [];

    protected $table = 'constituicoes';

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

    public function socios(): HasMany
    {
        return $this->hasMany(Socio::class);
    }

    public function filiais(): HasMany
    {
        return $this->hasMany(Filial::class);
    }
}
