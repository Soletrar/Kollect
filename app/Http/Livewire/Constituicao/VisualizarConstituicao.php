<?php

namespace App\Http\Livewire\Constituicao;

use App\Models\Constituicao;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class VisualizarConstituicao extends Component
{
    public Constituicao $constituicao;

    public string $analista;
    public string $status;

    public function mount()
    {
        $this->analista = $this->constituicao->analista_id ?? '0';
        $this->status = $this->constituicao->status;
    }

    public function render()
    {
        return view('livewire.constituicao.visualizar-constituicao', ['users' => User::orderBy('name')->whereId(auth()->id())->getModels()]);
    }

    public function update()
    {
        $this->validate();

        if ($this->analista != '0') {
            $this->constituicao->analista_id = auth()->id();
        }
        else {
            $this->constituicao->analista_id = null;
        }

        if ($this->status == 'Executando') {
            $this->constituicao->executando_em = now();
        }
        elseif ($this->status == 'Finalizado') {
            $this->constituicao->finalizado_em = now();
        }

        $this->constituicao->status = $this->status;

        $this->constituicao->save();

        sweetalert()->toast()->addSuccess('Informações atualizadas com sucesso.');
    }

    protected function rules(): array
    {
        return [
            'status' => ['required', Rule::in(['Não iniciado', 'Executando', 'Finalizado'])],
        ];
    }
}
