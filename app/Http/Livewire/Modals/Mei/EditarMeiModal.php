<?php

namespace App\Http\Livewire\Modals\Mei;

use App\Models\Mei;
use App\Repositories\MeiRepository;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Symfony\Component\HttpFoundation\StreamedResponse;

class EditarMeiModal extends ModalComponent
{
    use WithFileUploads;

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
    public Mei $mei;
    public array $atividadesEconomicas;
    public $files = [];

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public function mount(Mei $mei)
    {
        $this->mei = $mei;
        $this->atividadesEconomicas = explode(', ', $mei->atividades_economicas);
    }

    public function render()
    {
        return view('livewire.modals.mei.editar-mei-modal', [
            'atividades' => MeiRepository::getAtividadesEconomicasArray()
        ]);
    }

    public function deleteAttachment(string $attachmentName)
    {
        \Storage::disk('mei')->delete($attachmentName);

        sweetalert()->toast()->addSuccess('Anexo excluído com sucesso!');
    }

    public function downloadAttachment(string $attachmentName): StreamedResponse
    {
        return \Storage::disk('mei')->download($attachmentName);
    }

    protected function rules()
    {
        return [
            'mei.prioridade' => ['required', Rule::in(['PRIORIDADE BAIXA', 'PRIORIDADE ALTA', 'URGENTE'])],
            'mei.nome_fantasia' => 'required',
            'mei.rg' => 'required',
            'mei.cpf' => 'required',
            'mei.telefone' => 'required',
            'mei.email' => 'required|email',
            'mei.endereco_residencial' => 'required',
            'mei.endereco_comercial' => 'required',
            'mei.capital' => 'required',
            'mei.titulo_eleitor' => 'present',
            'mei.senha_govbr' => 'required',
            'mei.numero_recibo' => 'present',
        ];
    }
}
