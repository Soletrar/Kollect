<?php

namespace App\Http\Livewire\Modals\Baixa;

use App\Http\Livewire\Baixa\BaixasTable;
use App\Models\Baixa;
use LivewireUI\Modal\ModalComponent;

class DeleteBaixaModal extends ModalComponent
{
    public Baixa $baixa;

    public function mount(Baixa $baixa)
    {
        $this->baixa = $baixa;
    }
    public function render()
    {
        return view('livewire.modals.baixa.delete-baixa-modal');
    }

    public function delete()
    {
        $this->baixa->delete();

        $this->closeModalWithEvents([
            BaixasTable::getName() => 'baixaExcluida'
        ]);
    }
}
