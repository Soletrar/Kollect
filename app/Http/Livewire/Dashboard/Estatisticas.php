<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Alteracao;
use App\Models\Constituicao;
use App\Models\Mei;
use Livewire\Component;

class Estatisticas extends Component
{
    public function render()
    {
        return view('livewire.dashboard.estatisticas', [
            'constituicoesCount' => Constituicao::whereStatus('Não iniciado')->count(),
            'alteracoesCount' => Alteracao::whereStatus('Não iniciado')->count(),
            'meiCount' => Mei::whereStatus('Não iniciado')->count(),
        ]);
    }
}
