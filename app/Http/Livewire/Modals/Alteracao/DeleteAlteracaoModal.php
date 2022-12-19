<?php

namespace App\Http\Livewire\Modals\Alteracao;

use App\Http\Livewire\Alteracao\AlteracaoTabela;
use App\Models\Alteracao;
use LivewireUI\Modal\ModalComponent;

class DeleteAlteracaoModal extends ModalComponent
{
    public Alteracao $alteracao;

    public function mount(Alteracao $alteracao)
    {
        $this->alteracao = $alteracao;
    }

    public function render()
    {
        return view('livewire.modals.alteracao.delete-alteracao-modal');
    }

    public function delete()
    {
        $this->alteracao->deleteAttachments();

        $this->alteracao->filiais()->delete();
        $this->alteracao->socios()->delete();

        $this->alteracao->delete();

        $this->closeModalWithEvents([
            AlteracaoTabela::getName() => 'alteracaoExcluida'
        ]);
    }
}
