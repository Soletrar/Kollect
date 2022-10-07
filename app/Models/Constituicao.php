<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Constituicao extends Model
{
    protected $guarded = [];

    protected $table = 'constituicoes';

    protected $casts = [
        'data_integralizacao' => 'date:Y-m-d',
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

    public function hasAttachments(): bool
    {
        $files = Storage::disk('constituicao')->files('attachments/' . $this->id);
        return sizeof($files) > 0;
    }

    public function getAttachments(): array
    {
        return Storage::disk('constituicao')->files('attachments/' . $this->id);
    }

    public function deleteAttachments()
    {
        if ($this->hasAttachment()) {
            Storage::disk('constituicao')->deleteDir('attachments/' . $this->id);
        }
    }
}
