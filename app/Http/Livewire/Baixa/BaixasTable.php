<?php

namespace App\Http\Livewire\Baixa;

use App\Models\Baixa;
use Livewire\Component;
use Livewire\WithPagination;

class BaixasTable extends Component
{
    use WithPagination;

    public string $search = '';
    protected $queryString = [
        'search' => ['except' => '', 'as' => 'empresa'],
        'page' => ['except' => 1, 'as' => 'pagina'],
    ];

    protected $listeners = [
        'baixaAtualizada' => '$refresh',
        'baixaExcluida' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.baixa.baixas-table', ['baixas' => $this->getPagination()]);
    }

    public function getPagination()
    {
        if (empty($this->search)) {
            return Baixa::orderByDesc('created_at')->paginate(50, ['*'], 'pagina');
        }

        return Baixa::orderByDesc('created_at')
            ->where('nome_empresarial', 'like', '%'.$this->search.'%')
            ->paginate(50, ['*'], 'pagina');
    }
}
