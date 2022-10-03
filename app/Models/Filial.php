<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Filial extends Model
{
    protected $guarded = [];

    protected $table = 'filiais';

    public function constituicao(): BelongsTo
    {
        return $this->belongsTo(Constituicao::class);
    }
}
