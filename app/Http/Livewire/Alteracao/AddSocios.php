<?php

namespace App\Http\Livewire\Alteracao;

use App\Models\Alteracao;
use App\Models\Socio;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Livewire\Component;

class AddSocios extends Component
{
    public Alteracao $alteracao;


    public string $nome = '';
    public string $nascimento = '';
    public string $nacionalidade = '';
    public string $naturalidade = '';
    public string $estadoCivil = 'Solteiro(a)';
    public string $profissao = '';
    public string $registroProfissional = '';

    public string $cpf = '';
    public string $rg = '';

    public string $pai = '';
    public string $mae = '';

    public string $telefone = '';
    public string $email = '';

    public string $cep = '';
    public string $logradouro = '';
    public string $bairro = '';
    public string $localidade = '';
    public string $uf = '';
    public string $numero = '';

    public string $tipoComplemento = '';
    public string $complemento = '';

    public string $tipoComplemento2 = '';
    public string $complemento2 = '';

    public string $tipoComplemento3 = '';
    public string $complemento3 = '';

    public string $capitalSocial = '';
    public string $formaIntegralizacao = 'ESPÉCIE';

    public string $socioAdministrador = 'SIM';
    public string $representado = 'NÃO';
    public string $responsavel = '';

    public function updatedCep()
    {
        if (empty($this->cep)) return;

        $req = Http::get(sprintf('https://viacep.com.br/ws/%s/json/', $this->cep));

        if ($req->status() != 200) return;

        $data = json_decode($req->body(), true);
        if (isset($data['erro']) && $data['erro'] === true) return;

        $this->logradouro = $data['logradouro'];
        $this->bairro = $data['bairro'];
        $this->localidade = $data['localidade'];
        $this->uf = $data['uf'];
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

        return view('livewire.alteracao.add-socios', [
            'socios' => $this->alteracao->socios()->orderBy('nome')->getModels(),
            'complementos' => $complementos
        ]);
    }

    public function rules(): array
    {
        return [
            'nome' => 'required',
            'estadoCivil' => ['required', Rule::in(['Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'Viúvo(a)'])],
            'cpf' => 'required',
            'rg' => 'required',
            'nascimento' => 'required|date',
            'pai' => 'required',
            'mae' => 'required',
            'nacionalidade' => 'required',
            'naturalidade' => 'required',
            'profissao' => 'required',
            'registroProfissional' => 'nullable',
            'telefone' => 'required',
            'email' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'localidade' => 'required',
            'uf' => 'required',
            'numero' => 'required',
            'tipoComplemento' => ['nullable', Rule::in([
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
            'complemento' => 'nullable',
            'tipoComplemento2' => ['nullable', Rule::in([
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
            'complemento2' => 'nullable',
            'tipoComplemento3' => ['nullable', Rule::in([
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
            'complemento3' => 'nullable',
            'capitalSocial' => 'required',
            'formaIntegralizacao' => ['required', Rule::in(['ESPÉCIE', 'IMÓVEIS', 'BENS MÓVEIS'])],
            'socioAdministrador' => ['required', Rule::in(['SIM', 'NÃO'])],
            'representado' => ['required', Rule::in(['SIM', 'NÃO'])],
            'responsavel' => 'nullable'
        ];
    }

    public function create()
    {
        $this->validate();

        Socio::create([
            'nome' => $this->nome,
            'estado_civil' => $this->estadoCivil,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'nascimento' => $this->nascimento,
            'pai' => $this->pai,
            'mae' => $this->mae,
            'nacionalidade' => $this->nacionalidade,
            'naturalidade' => $this->naturalidade,
            'profissao' => $this->profissao,
            'registro_profissional' => $this->registroProfissional,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'bairro' => $this->bairro,
            'localidade' => $this->localidade,
            'uf' => $this->uf,
            'numero' => $this->numero,
            'tipo_complemento' => $this->tipoComplemento,
            'complemento' => $this->complemento,
            'tipo_complemento2' => $this->tipoComplemento2,
            'complemento2' => $this->complemento2,
            'tipo_complemento3' => $this->tipoComplemento3,
            'complemento3' => $this->complemento3,
            'capital_social' => $this->capitalSocial,
            'forma_integralizacao' => $this->formaIntegralizacao,
            'socio_administrador' => $this->socioAdministrador,
            'representado' => $this->representado,
            'responsavel' => $this->responsavel,
            'alteracao_id' => $this->alteracao->id
        ]);

        sweetalert()->toast()->addSuccess('Sócio cadastrado com sucesso.');

        $this->resetFields();
    }

    protected function resetFields()
    {
        $this->nome = '';
        $this->nascimento = '';
        $this->nacionalidade = '';
        $this->naturalidade = '';
        $this->estadoCivil = 'Solteiro(a)';
        $this->profissao = '';
        $this->registroProfissional = '';

        $this->cpf = '';
        $this->rg = '';

        $this->pai = '';
        $this->mae = '';

        $this->telefone = '';
        $this->email = '';

        $this->cep = '';
        $this->logradouro = '';
        $this->bairro = '';
        $this->localidade = '';
        $this->uf = '';
        $this->numero = '';

        $this->capitalSocial = '';
        $this->formaIntegralizacao = 'ESPÉCIE';

        $this->socioAdministrador = 'SIM';
        $this->representado = 'NÃO';
        $this->responsavel = '';
    }

    public function deleteSocio(int $socioId)
    {
        $socio = Socio::findOrFail($socioId);
        $socio->delete();

        sweetalert()->toast()->addSuccess('Sócio excluído com sucesso.');
    }
}
