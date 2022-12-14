<?php

namespace App\Http\Livewire\Baixa;

use App\Models\Baixa;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class VisualizarBaixa extends Component
{
    public Baixa $baixa;

    public string $analista;
    public string $status;

    public function mount()
    {
        $this->analista = $this->baixa->analista_id ?? '0';
        $this->status = $this->baixa->status;
    }

    protected function rules(): array
    {
        return [
            'status' => ['required', Rule::in(['Não iniciado', 'Executando', 'Finalizado'])],
        ];
    }

    public function render()
    {
        return view('livewire.baixa.visualizar-baixa', [
            'users' => User::orderBy('name')
                ->whereNotIn('email', ['ricardo@startinghub.com.br'])
                ->getModels()
        ]);
    }

    public function update()
    {
        $this->validate();

        if ($this->analista != '0') {
            $analista = User::findOrFail($this->analista);
            $this->baixa->analista_id = $analista->id;
        }
        else {
            $this->baixa->analista_id = null;
        }

        if ($this->status == 'Executando') {
            $this->baixa->executando_em = now();
        }
        elseif ($this->status == 'Finalizado') {
            $this->baixa->finalizado_em = now();
        }

        $this->baixa->status = $this->status;

        $this->baixa->save();

        sweetalert()->toast()->addSuccess('Informações atualizadas com sucesso.');
    }

}
