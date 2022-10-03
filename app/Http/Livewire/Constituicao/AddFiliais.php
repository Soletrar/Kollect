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

    public string $atividadeMesmoMatriz = 'NÃO';
    public string $objeto = '';

    public string $capitalMesmoMatriz = 'NÃO';
    public string $capital = '';

    public string $contabilidadeCentralizadaMatriz = 'NÃO';
    public string $contabilidade = '';

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
        return view('livewire.constituicao.add-filiais', [
            'filiais' => $this->constituicao->filiais()->orderBy('nome')->getModels()
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
