<?php

namespace App\Http\Livewire\Alteracao;

use App\Models\Alteracao;
use Livewire\Component;
use Livewire\WithPagination;

class AlteracaoTabela extends Component
{
    use WithPagination;

    protected $queryString = [
//        'search' => ['except' => '', 'as' => 'fatura'],
        'page' => ['except' => 1, 'as' => 'pagina'],
    ];

    public function render()
    {
        return view('livewire.alteracao.alteracao-tabela', ['alteracoes' => $this->getAlteracaoPaginate()]);
    }

    protected function getAlteracaoPaginate()
    {
        return Alteracao::orderByDesc('created_at')->paginate(50, ['*'], 'pagina');
    }
}
