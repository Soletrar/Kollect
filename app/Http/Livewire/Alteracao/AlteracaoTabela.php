<?php

namespace App\Http\Livewire\Alteracao;

use App\Models\Alteracao;
use Livewire\Component;
use Livewire\WithPagination;

class AlteracaoTabela extends Component
{
    use WithPagination;

    public string $search = '';

    protected $listeners = ['alteracaoExcluida' => '$refresh'];

    protected $queryString = [
        'search' => ['except' => '', 'as' => 'empresa'],
        'page' => ['except' => 1, 'as' => 'pagina'],
    ];

    public function render()
    {
        return view('livewire.alteracao.alteracao-tabela', ['alteracoes' => $this->getAlteracaoPaginate()]);
    }

    protected function getAlteracaoPaginate()
    {
        if (empty($this->search)) {
            return Alteracao::orderByDesc('created_at')->paginate(50, ['*'], 'pagina');
        }

        return Alteracao::orderByDesc('created_at')
            ->where('nome_empresarial', 'like', '%'.$this->search.'%')
            ->paginate(50, ['*'], 'pagina');
    }
}
