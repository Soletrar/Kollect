<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Mei extends Model
{
    protected $guarded = [];

    protected $casts = ['executando_em' => 'datetime', 'finalizado_em' => 'datetime'];

    public function autor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'autor_id');
    }

    public function analista(): BelongsTo
    {
        return $this->belongsTo(User::class, 'analista_id');
    }

    public function hasAttachments(): bool
    {
        $files = Storage::disk('mei')->files('attachments/' . $this->id);
        return sizeof($files) > 0;
    }

    public function getAttachments(): array
    {
        return Storage::disk('mei')->files('attachments/' . $this->id);
    }

    public function deleteAttachments()
    {
        if ($this->hasAttachment()) {
            Storage::disk('mei')->deleteDir('attachments/' . $this->id);
        }
    }
}
