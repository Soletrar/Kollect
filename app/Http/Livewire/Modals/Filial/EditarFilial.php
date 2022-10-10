<?php

namespace App\Http\Livewire\Modals\Filial;

use App\Http\Livewire\Modals\Constituicao\EditarFiliaisModal;
use App\Models\Filial;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditarFilial extends ModalComponent
{
    public Filial $filial;

    public string $cep;

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
        return '6xl';
    }

    public function updatedCep()
    {
        $this->filial->cep = $this->cep;

        if (empty($this->cep)) return;

        $req = Http::get(sprintf('https://viacep.com.br/ws/%s/json/', $this->cep));

        if ($req->status() != 200) return;

        $data = json_decode($req->body(), true);
        if (isset($data['erro']) && $data['erro'] === true) return;

        $this->filial->logradouro = $data['logradouro'];
        $this->filial->bairro = $data['bairro'];
        $this->filial->localidade = $data['localidade'];
        $this->filial->uf = $data['uf'];
    }

    public function mount(Filial $filial)
    {
        $this->filial = $filial;
        $this->cep = $filial->cep;
    }

    public function render()
    {
        $complementos = [
            'ANDAR',
            'ANEXO',
            'APARTAMENTO',
            'ARMAZEM',
            'BANCA',
            'BARRACÃO',
            'CAIXA POSTAL',
            'CASA',
            'CONDOMINIO',
            'CONJUNTO',
            'EDIFICIO',
            'FUNDOS',
            'GALPAO',
            'GARAGEM',
            'LETRA',
            'LOJA',
            'LOTE',
            'MEZANINO',
            'NIVEL',
            'PAVILHAO',
            'PAVIMENTO',
            'PILOTIS',
            'QUADRA',
            'QUILOMETRO',
            'QUIOSQUE',
            'SALA',
            'SETOR',
            'SOBRELOJA',
            'STAND',
            'SUBSOLO',
            'TERREO'
        ];

        return view('livewire.modals.filial.editar-filial', [
            'complementos' => $complementos
        ]);
    }

    public function update()
    {
        $this->validate();

        $this->filial->save();

        sweetalert()->addSuccess('Filial atualizada com sucesso!');

        $this->closeModalWithEvents([
            EditarFiliaisModal::getName() => 'filialAtualizada',
            \App\Http\Livewire\Modals\Alteracao\EditarFiliaisModal::getName() => 'filialAtualizada'
        ]);
    }

    public function rules(): array
    {
        return [
            'filial.nome' => 'required',
            'filial.cep' => 'required',
            'filial.logradouro' => 'required',
            'filial.bairro' => 'required',
            'filial.localidade' => 'required',
            'filial.uf' => 'required',
            'filial.numero' => 'required',
            'filial.referencia' => 'present',
            'filial.tipo_complemento' => ['nullable', Rule::in([
                'ANDAR',
                'ANEXO',
                'APARTAMENTO',
                'ARMAZEM',
                'BANCA',
                'BARRACÃO',
                'CAIXA POSTAL',
                'CASA',
                'CONDOMINIO',
                'CONJUNTO',
                'EDIFICIO',
                'FUNDOS',
                'GALPAO',
                'GARAGEM',
                'LETRA',
                'LOJA',
                'LOTE',
                'MEZANINO',
                'NIVEL',
                'PAVILHAO',
                'PAVIMENTO',
                'PILOTIS',
                'QUADRA',
                'QUILOMETRO',
                'QUIOSQUE',
                'SALA',
                'SETOR',
                'SOBRELOJA',
                'STAND',
                'SUBSOLO',
                'TERREO'
            ])],
            'filial.complemento' => 'present',
            'filial.tipo_complemento2' => ['nullable', Rule::in([
                'ANDAR',
                'ANEXO',
                'APARTAMENTO',
                'ARMAZEM',
                'BANCA',
                'BARRACÃO',
                'CAIXA POSTAL',
                'CASA',
                'CONDOMINIO',
                'CONJUNTO',
                'EDIFICIO',
                'FUNDOS',
                'GALPAO',
                'GARAGEM',
                'LETRA',
                'LOJA',
                'LOTE',
                'MEZANINO',
                'NIVEL',
                'PAVILHAO',
                'PAVIMENTO',
                'PILOTIS',
                'QUADRA',
                'QUILOMETRO',
                'QUIOSQUE',
                'SALA',
                'SETOR',
                'SOBRELOJA',
                'STAND',
                'SUBSOLO',
                'TERREO'
            ])],
            'filial.complemento2' => 'present',
            'filial.tipo_complemento3' => ['nullable', Rule::in([
                'ANDAR',
                'ANEXO',
                'APARTAMENTO',
                'ARMAZEM',
                'BANCA',
                'BARRACÃO',
                'CAIXA POSTAL',
                'CASA',
                'CONDOMINIO',
                'CONJUNTO',
                'EDIFICIO',
                'FUNDOS',
                'GALPAO',
                'GARAGEM',
                'LETRA',
                'LOJA',
                'LOTE',
                'MEZANINO',
                'NIVEL',
                'PAVILHAO',
                'PAVIMENTO',
                'PILOTIS',
                'QUADRA',
                'QUILOMETRO',
                'QUIOSQUE',
                'SALA',
                'SETOR',
                'SOBRELOJA',
                'STAND',
                'SUBSOLO',
                'TERREO'
            ])],
            'filial.complemento3' => 'present',
            'filial.area_imovel' => 'required',
            'filial.pavimentos' => 'required|numeric',
            'filial.outra_edificacao' => ['required', Rule::in(['SIM', 'NÃO'])],
            'filial.edificacao' => 'present',
            'filial.natureza_imovel' => ['required', Rule::in(['RURAL', 'URBANA', 'SEM REGULARIZAÇÃO'])],
            'filial.inscricao_imovel' => 'present',
            'filial.tipo_imovel' => ['required', Rule::in(['PROPRIO','CEDIDO','ALUGADO','COMODATO','CONDOMINIO','OCUPANTE','ESPOLIO','PARCERIA','ARRENDADO','USUFRUTO','DOADO'])],
            'filial.atividade_mesmo_matriz' => ['required', Rule::in('SIM', 'NÃO')],
            'filial.objeto' => 'nullable',
            'filial.capital_mesmo_matriz' => ['required', Rule::in('SIM', 'NÃO')],
            'filial.capital' => 'nullable',
            'filial.contabilidade_centralizada_matriz' => ['required', Rule::in('SIM', 'NÃO')],
            'filial.contabilidade' => 'nullable'
        ];
    }
}
