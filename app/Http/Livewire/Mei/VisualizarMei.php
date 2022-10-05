<?php

namespace App\Http\Livewire\Mei;

use App\Models\Mei;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class VisualizarMei extends Component
{
    public Mei $mei;

    public string $analista;
    public string $status;

    public function mount()
    {
        $this->analista = $this->mei->analista_id ?? '0';
        $this->status = $this->mei->status;
    }

    public function render()
    {
        return view('livewire.mei.visualizar-mei',  [
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
            $this->mei->analista_id = $analista->id;
        }
        else {
            $this->mei->analista_id = null;
        }

        if ($this->status == 'Executando') {
            $this->mei->executando_em = now();
        }
        elseif ($this->status == 'Finalizado') {
            $this->mei->finalizado_em = now();
        }

        $this->mei->status = $this->status;

        $this->mei->save();

        sweetalert()->toast()->addSuccess('Informações atualizadas com sucesso.');
    }

    protected function rules(): array
    {
        return [
            'status' => ['required', Rule::in(['Não iniciado', 'Executando', 'Finalizado'])],
        ];
    }
}
