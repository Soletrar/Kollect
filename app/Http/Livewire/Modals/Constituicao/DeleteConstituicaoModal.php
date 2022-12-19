<?php

namespace App\Http\Livewire\Modals\Constituicao;

use App\Http\Livewire\Constituicao\ConstituicaoTabela;
use App\Models\Constituicao;
use LivewireUI\Modal\ModalComponent;

class DeleteConstituicaoModal extends ModalComponent
{
    public Constituicao $constituicao;

    public function mount(Constituicao $constituicao)
    {
        $this->constituicao = $constituicao;
    }
    public function render()
    {
        return view('livewire.modals.constituicao.delete-constituicao-modal');
    }

    public function delete()
    {
        $this->constituicao->deleteAttachments();

        $this->constituicao->filiais()->delete();
        $this->constituicao->socios()->delete();

        $this->constituicao->delete();

        $this->closeModalWithEvents([
            ConstituicaoTabela::getName() => 'constituicaoExcluida'
        ]);
    }
}
