<?php

namespace App\Http\Livewire\Modals\Socio;

use App\Http\Livewire\Modals\Constituicao\EditarSociosModal;
use App\Models\Socio;
use Illuminate\Support\Facades\Http;
use LivewireUI\Modal\ModalComponent;

class EditarSocio extends ModalComponent
{
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
    public Socio $socio;
    public string $cep;

    public static function modalMaxWidth(): string
    {
        return '6xl';
    }

    public function updatedCep()
    {
        $this->socio->cep = $this->cep;

        if (empty($this->cep)) return;

        $req = Http::get(sprintf('https://viacep.com.br/ws/%s/json/', $this->cep));

        if ($req->status() != 200) return;

        $data = json_decode($req->body(), true);
        if (isset($data['erro']) && $data['erro'] === true) return;

        $this->socio->logradouro = $data['logradouro'];
        $this->socio->bairro = $data['bairro'];
        $this->socio->localidade = $data['localidade'];
        $this->socio->uf = $data['uf'];
    }


    public function mount(Socio $socio)
    {
        $this->socio = $socio;
        $this->cep = $socio->cep;
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

        return view('livewire.modals.socio.editar-socio', [
            'complementos' => $complementos
        ]);
    }

    public function rules(): array
    {
        return [
            'socio.nome' => 'required',
            'socio.estado_civil' => 'required',
            'socio.cpf' => 'required',
            'socio.rg' => 'required',
            'socio.nascimento' => 'required',
            'socio.pai' => 'required',
            'socio.mae' => 'required',
            'socio.nacionalidade' => 'required',
            'socio.naturalidade' => 'present',
            'socio.profissao' => 'required',
            'socio.registro_profissional' => 'present',
            'socio.telefone' => 'required',
            'socio.email' => 'required',
            'socio.cep' => 'required',
            'socio.logradouro' => 'required',
            'socio.bairro' => 'required',
            'socio.localidade' => 'required',
            'socio.uf' => 'required',
            'socio.numero' => 'required',
            'socio.tipo_complemento' => 'present',
            'socio.complemento' => 'present',
            'socio.tipo_complemento2' => 'present',
            'socio.complemento2' => 'present',
            'socio.tipo_complemento3' => 'present',
            'socio.complemento3' => 'present',
            'socio.capital_social' => 'required',
            'socio.forma_integralizacao' => 'required',
            'socio.socio' => 'required',
            'socio.socio_administrador' => 'required',
            'socio.representado' => 'required',
            'socio.responsavel' => 'present',
        ];
    }

    public function update()
    {
        $this->validate();

        $this->socio->save();

        sweetalert()->addSuccess('Sócio/administrador atualizado com sucesso!');

        $this->closeModalWithEvents([
            EditarSociosModal::getName() => 'socioAtualizado',
            \App\Http\Livewire\Modals\Alteracao\EditarSociosModal::getName() => 'socioAtualizado'
        ]);
    }
}
