<?php

namespace App\Http\Requests\Baixa;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBaixaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'prioridade' => ['required', Rule::in(['PRIORIDADE BAIXA', 'PRIORIDADE ALTA', 'URGENTE'])],
            'tipo_baixa' => 'required',
            'motivo_baixa' => 'required',
            'nome_empresarial' => 'required',
            'cnpj' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'estado' => 'required',
            'cidade' => 'required',
            'haveres' => ['required', Rule::in(['SIM', 'NÃO'])],
            'valor_haveres' => 'nullable',
            'responsabilidade' => 'required',
            'data_baixa' => 'required|date'
        ];
    }
}
