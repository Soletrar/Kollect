<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Socio extends Model
{
    protected $guarded = [];

    protected $casts = [
        'nascimento' => 'date:Y-m-d'
    ];

    public function constituicao(): BelongsTo
    {
        return $this->belongsTo(Constituicao::class);
    }
}
