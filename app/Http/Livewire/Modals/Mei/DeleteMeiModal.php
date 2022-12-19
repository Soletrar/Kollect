<?php

namespace App\Http\Livewire\Modals\Mei;

use App\Http\Livewire\Mei\MeiTabela;
use App\Models\Mei;
use LivewireUI\Modal\ModalComponent;

class DeleteMeiModal extends ModalComponent
{
    public Mei $mei;

    public function mount(Mei $mei)
    {
        $this->mei = $mei;
    }

    public function render()
    {
        return view('livewire.modals.mei.delete-mei-modal');
    }

    public function delete()
    {
        $this->mei->delete();

        $this->closeModalWithEvents([
            MeiTabela::getName() => 'meiExcluido'
        ]);
    }
}
