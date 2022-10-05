<?php

namespace App\Http\Livewire\Alteracao;

use App\Models\Alteracao;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class VisualizarAlteracao extends Component
{
    public Alteracao $alteracao;

    public string $analista;
    public string $status;

    public function mount()
    {
        $this->analista = $this->alteracao->analista_id ?? '0';
        $this->status = $this->alteracao->status;
    }

    public function render()
    {
        return view('livewire.alteracao.visualizar-alteracao', ['users' => User::orderBy('name')->getModels()]);
    }

    public function update()
    {
        $this->validate();

        if ($this->analista != '0') {
            $analista = User::findOrFail($this->analista);
            $this->alteracao->analista_id = $analista->id;
        }
        else {
            $this->alteracao->analista_id = null;
        }

        if ($this->status == 'Executando') {
            $this->alteracao->executando_em = now();
        }
        elseif ($this->status == 'Finalizado') {
            $this->alteracao->finalizado_em = now();
        }

        $this->alteracao->status = $this->status;

        $this->alteracao->save();

        sweetalert()->toast()->addSuccess('Informações atualizadas com sucesso.');
    }

    protected function rules(): array
    {
        return [
            'status' => ['required', Rule::in(['Não iniciado', 'Executando', 'Finalizado'])],
        ];
    }
}
