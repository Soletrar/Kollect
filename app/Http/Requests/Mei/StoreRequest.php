<?php

namespace App\Http\Requests\Mei;

use App\Repositories\MeiRepository;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'prioridade' => ['required', Rule::in(['PRIORIDADE BAIXA', 'PRIORIDADE ALTA', 'URGENTE'])],
            'nome_fantasia' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'endereco_residencial' => 'required',
            'endereco_comercial' => 'required',
            'titulo_eleitor' => 'present',
            'senha_govbr' => 'required',
            'numero_recibo' => 'present',
            'atividades_economicas' => 'required|array',
            'atitivades_economicas.*' => [Rule::in(MeiRepository::getAtividadesEconomicasArray())],
            'capital' => 'required'
        ];
    }
}
