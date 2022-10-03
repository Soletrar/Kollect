<?php

namespace App\Http\Livewire\Constituicao;

use App\Models\Constituicao;
use Livewire\Component;
use Livewire\WithPagination;

class ConstituicaoTabela extends Component
{
    use WithPagination;

    protected $queryString = [
//        'search' => ['except' => '', 'as' => 'fatura'],
        'page' => ['except' => 1, 'as' => 'pagina'],
    ];

    public function render()
    {
        return view('livewire.constituicao.constituicao-tabela', ['constituicoes' => $this->getConstituicaoPaginate()]);
    }

    protected function getConstituicaoPaginate()
    {
        return Constituicao::orderByDesc('created_at')->paginate(50, ['*'], 'pagina');
    }
}
