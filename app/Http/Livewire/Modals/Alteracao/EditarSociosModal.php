<?php

namespace App\Http\Livewire\Modals\Alteracao;

use App\Models\Alteracao;
use App\Models\Socio;
use LivewireUI\Modal\ModalComponent;

class EditarSociosModal extends ModalComponent
{
    public Alteracao $alteracao;

    public $sociosCount = 0;

    protected $listeners = ['socioAtualizado' => '$refresh'];

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
        return '7xl';
    }

    public function mount(Alteracao $alteracao)
    {
        $this->alteracao = $alteracao;
    }

    public function render()
    {
        return view('livewire.modals.alteracao.editar-socios-modal', [
            'socios' => $this->alteracao->socios()->orderBy('nome')->getModels()
        ]);
    }

    public function deleteSocio(Socio $socio)
    {
        $socio->delete();

        sweetalert()->toast()->addSuccess('Sócio excluído com sucesso');

        $this->sociosCount++;
    }
}
