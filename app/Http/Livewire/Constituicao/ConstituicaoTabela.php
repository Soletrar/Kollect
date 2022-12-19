<?php

namespace App\Http\Livewire\Constituicao;

use App\Models\Constituicao;
use Livewire\Component;
use Livewire\WithPagination;

class ConstituicaoTabela extends Component
{
    use WithPagination;

    public string $search = '';

    protected $listeners = ['constituicaoExcluida' => '$refresh'];

    protected $queryString = [
        'search' => ['except' => '', 'as' => 'empresa'],
        'page' => ['except' => 1, 'as' => 'pagina'],
    ];

    public function render()
    {
        return view('livewire.constituicao.constituicao-tabela', ['constituicoes' => $this->getConstituicaoPaginate()]);
    }

    protected function getConstituicaoPaginate()
    {
        if (empty($this->search)) {
            return Constituicao::orderByDesc('created_at')->paginate(50, ['*'], 'pagina');
        }

        return Constituicao::orderByDesc('created_at')
            ->where('nome_empresarial', 'like', '%'.$this->search.'%')
            ->paginate(50, ['*'], 'pagina');
    }
}
