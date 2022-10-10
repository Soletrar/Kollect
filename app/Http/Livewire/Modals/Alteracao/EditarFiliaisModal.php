<?php

namespace App\Http\Livewire\Modals\Alteracao;

use App\Models\Alteracao ;
use App\Models\Filial;
use LivewireUI\Modal\ModalComponent;

class EditarFiliaisModal extends ModalComponent
{
    public Alteracao $alteracao;

    public int $filialCount = 0;

    protected $listeners = [
        'filialAtualizada' => '$refresh'
    ];

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

    public static function modalMaxWidth(): string
    {
        return '3xl';
    }

    public function mount(Alteracao $alteracao)
    {
        $this->alteracao = $alteracao;
    }

    public function render()
    {
        return view('livewire.modals.alteracao.editar-filiais-modal', [
            'filiais' => $this->alteracao->filiais()->orderBy('nome')->getModels()
        ]);
    }

    public function deleteFilial(Filial $filial)
    {
        $filial->delete();

        sweetalert()->toast()->addSuccess('Filial excluída com sucesso');

        $this->filialCount++;
    }
}
