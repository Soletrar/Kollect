<?php

namespace App\Http\Livewire\Mei;

use App\Models\Mei;
use Livewire\Component;
use Livewire\WithPagination;

class MeiTabela extends Component
{
    use WithPagination;

    protected $queryString = [
//        'search' => ['except' => '', 'as' => 'fatura'],
        'page' => ['except' => 1, 'as' => 'pagina'],
    ];

    public function render()
    {
        return view('livewire.mei.mei-tabela', ['meis' => $this->getMeiPaginate()]);
    }

    protected function getMeiPaginate()
    {
        return Mei::orderByDesc('created_at')->paginate(50, ['*'], 'pagina');
    }
}
