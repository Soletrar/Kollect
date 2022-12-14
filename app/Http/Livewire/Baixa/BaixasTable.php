<?php

namespace App\Http\Livewire\Baixa;

use App\Models\Baixa;
use Livewire\Component;

class BaixasTable extends Component
{
    protected $listeners = [
        'baixaAtualizada' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.baixa.baixas-table', ['baixas' => Baixa::orderByDesc('created_at')->getModels()]);
    }
}
