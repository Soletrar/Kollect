<?php

namespace App\Http\Livewire\Modals\Baixa;

use App\Http\Livewire\Baixa\BaixasTable;
use App\Models\Baixa;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class EditarBaixaModal extends ModalComponent
{
    public Baixa $baixa;

    protected static array $maxWidths = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
        '3xl' => 'sm:max-w-3xl',
        '4xl' => 'sm:max-w-4xl',
        '5xl' => 'sm:max-w-5xl',
        '6xl' => 'sm:max-w-6xl',
        '7xl' => 'sm:max-w-7xl',
        'full' => 'sm:max-w-full'
    ];

    public function rules(): array
    {
        return [
            'baixa.prioridade' => ['required', Rule::in(['PRIORIDADE BAIXA', 'PRIORIDADE ALTA', 'URGENTE'])],
            'baixa.tipo_baixa' => 'required',
            'baixa.motivo_baixa' => 'required',
            'baixa.nome_empresarial' => 'required',
            'baixa.cnpj' => 'required',
            'baixa.telefone' => 'required',
            'baixa.email' => 'required|email',
            'baixa.estado' => 'required',
            'baixa.cidade' => 'required',
            'baixa.haveres' => ['required', Rule::in(['SIM', 'NÃO'])],
            'baixa.valor_haveres' => 'present',
            'baixa.responsabilidade' => 'required',
            'baixa.data_baixa' => 'required|date'
        ];
    }

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function mount(Baixa $baixa)
    {
        $this->baixa = $baixa;
    }

    public function render()
    {
        return view('livewire.modals.baixa.editar-baixa-modal');
    }

    public function update()
    {
        $this->baixa->save();

        sweetalert()->toast()->addSuccess('As informações foram salvas.');

        $this->closeModalWithEvents([
           BaixasTable::getName() => 'baixaAtualizada'
        ]);
    }
}
