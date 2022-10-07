<?php

namespace App\Http\Livewire\Constituicao;

use App\Models\Constituicao;
use App\Models\Filial;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Livewire\Component;

class AddFiliais extends Component
{
    public Constituicao $constituicao;

    public string $nome = '';

    public string $cep = '';
    public string $logradouro = '';
    public string $bairro = '';
    public string $localidade = '';
    public string $uf = '';
    public string $numero = '';
    public string $referencia = '';

    public string $tipoComplemento = '';
    public string $complemento = '';

    public string $tipoComplemento2 = '';
    public string $complemento2 = '';

    public string $tipoComplemento3 = '';
    public string $complemento3 = '';

    public string $areaImovel = '';
    public string $pavimentos = '1';

    public string $atividadeMesmoMatriz = 'NÃO';
    public string $objeto = '';

    public string $capitalMesmoMatriz = 'NÃO';
    public string $capital = '';

    public string $contabilidadeCentralizadaMatriz = 'NÃO';
    public string $contabilidade = '';

    public string $outraEdificacao = 'NÃO';
    public string $edificacao = '';
    public string $naturezaImovel = 'URBANA';
    public string $inscricaoImovel = '';
    public string $tipoImovel = 'PROPRIO';

    public function rules(): array
    {
        return [
            'nome' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'localidade' => 'required',
            'uf' => 'required',
            'numero' => 'required',
            'referencia' => 'present',
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
            'complemento' => 'present',
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
            'complemento2' => 'present',
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
            'complemento3' => 'present',
            'areaImovel' => 'required',
            'pavimentos' => 'required|numeric',
            'outraEdificacao' => ['required', Rule::in(['SIM', 'NÃO'])],
            'edificacao' => 'present',
            'naturezaImovel' => ['required', Rule::in(['RURAL', 'URBANA', 'SEM REGULARIZAÇÃO'])],
            'inscricaoImovel' => 'present',
            'tipoImovel' => ['required', Rule::in(['PROPRIO','CEDIDO','ALUGADO','COMODATO','CONDOMINIO','OCUPANTE','ESPOLIO','PARCERIA','ARRENDADO','USUFRUTO','DOADO'])],
            'atividadeMesmoMatriz' => ['required', Rule::in('SIM', 'NÃO')],
            'objeto' => 'nullable',
            'capitalMesmoMatriz' => ['required', Rule::in('SIM', 'NÃO')],
            'capital' => 'nullable',
            'contabilidadeCentralizadaMatriz' => ['required', Rule::in('SIM', 'NÃO')],
            'contabilidade' => 'nullable'
        ];
    }

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

        return view('livewire.constituicao.add-filiais', [
            'filiais' => $this->constituicao->filiais()->orderBy('nome')->getModels(),
            'complementos' => $complementos
        ]);
    }

    public function create()
    {
        $this->validate();

        Filial::create([
            'nome' => $this->nome,
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'bairro' => $this->bairro,
            'localidade' => $this->localidade,
            'uf' => $this->uf,
            'numero' => $this->numero,
            'referencia' => $this->referencia,
            'tipo_complemento' => $this->tipoComplemento,
            'tipo_complemento2' => $this->tipoComplemento2,
            'tipo_complemento3' => $this->tipoComplemento3,
            'complemento' => $this->complemento,
            'complemento2' => $this->complemento2,
            'complemento3' => $this->complemento3,
            'area_imovel' => $this->areaImovel,
            'pavimentos' => $this->pavimentos,
            'outra_edificacao' => $this->outraEdificacao,
            'edificacao' => $this->edificacao,
            'natureza_imovel' => $this->naturezaImovel,
            'inscricao_imovel' => $this->inscricaoImovel,
            'tipo_imovel' => $this->tipoImovel,
            'atividade_mesmo_matriz' => $this->atividadeMesmoMatriz,
            'objeto' => $this->objeto,
            'capital_mesmo_matriz' => $this->capitalMesmoMatriz,
            'capital' => $this->capital,
            'contabilidade_centralizada_matriz' => $this->contabilidadeCentralizadaMatriz,
            'contabilidade' => $this->contabilidade,
            'constituicao_id' => $this->constituicao->id
        ]);

        sweetalert()->toast()->addSuccess('Filial adicionada com sucesso.');
    }

    public function deleteFilial(int $filialId)
    {
        $filial = Filial::findOrFail($filialId);
        $filial->delete();

        sweetalert()->toast()->addSuccess('Filial excluída com sucesso.');
    }
}
