<?php

namespace App\Http\Requests\Alteracao;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CriarAlteracaoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'prioridade' => ['required', Rule::in(['PRIORIDADE BAIXA', 'PRIORIDADE ALTA', 'URGENTE'])],
            'tipo_alteracao' => ['required', Rule::in(['Alteração da forma de atuação',
                'Alteração da natureza jurídica',
                'Alteração de atividades econômicas (principal e secundárias)',
                'Alteração de capital social e/ou Quadro Societário',
                'Alteração de Cláusulas Particulares',
                'Alteração de dados cadastrais',
                'Alteração de endereço entre estados',
                'Alteração de endereço entre municípios no mesmo estado',
                'Alteração de endereço no mesmo município',
                'Alteração de nome empresarial (firma ou denominação)',
                'Alteração do tipo de unidade',
                'Cisão parcial (específico para a sucedida)',
                'Enquadramento / Reenquadramento / Desenquadramento de Porte de Empresa',
                'Espólio',
                'Incorporação de empresa',
                'Interrupção temporária de atividades',
                'Procuração',
                'Prorrogação de prazo (SPE)',
                'Reinício das atividades interrompidas temporariamente',
                'Rerratificação',
                'Restabelecimento de matriz (Reativação)',
                'Revogação de Procuração',
                'Sucessão',
                'Cancelamento de delegação de gerência',
                'Delegação de gerência',
                'Autorização de transferencia de titularidade por sucessão',
                'Averbação de nomeação de administrador',
                'Desistência de transferência de sede',
                'Destituição de gerente por renullableante ou assistente',
                'Modificacoes posteriores a autorizacao para funcionamento no pais',
                'Transferencia de sede para outro pais'])],
            'descricao_alteracao' => 'required',
            'nome_empresarial' => 'nullable',
            'nome_empresarial2' => 'nullable',
            'nome_empresarial3' => 'nullable',
            'nome_fantasia' => 'nullable',
            'cep' => 'nullable',
            'logradouro' => 'nullable',
            'bairro' => 'nullable',
            'localidade' => 'nullable',
            'uf' => 'nullable',
            'numero' => 'nullable',
            'referencia' => 'nullable',
            'tipo_complemento' => ['nullable', Rule::in([
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
            'tipo_complemento2' => ['nullable', Rule::in([
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
            'tipo_complemento3' => ['nullable', Rule::in([
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
            'telefone' => 'nullable',
            'email' => 'nullable|email',
            'tipo_societario' => ['nullable', Rule::in(['LTDA', 'S.A', 'EI', 'SIMPLES'])],
            'capital_social' => 'nullable',
            'data_integralizacao' => 'nullable|date',
            'clausula_restritiva' => 'nullable',
            'porte' => ['nullable', Rule::in(['ME', 'EPP', 'DEMAIS'])],
            'simples' => ['nullable', Rule::in(['SIM', 'NÃO'])],
            'area_imovel' => 'nullable',
            'pavimentos' => 'nullable|numeric',
            'outra_edificacao' => ['nullable', Rule::in(['SIM', 'NÃO'])],
            'edificacao' => 'nullable',
            'natureza_imovel' => ['nullable', Rule::in(['RURAL', 'URBANA', 'SEM REGULARIZAÇÃO'])],
            'inscricao_imovel' => 'nullable',
            'tipo_imovel' => ['nullable', Rule::in(['PROPRIO','CEDIDO','ALUGADO','COMODATO','CONDOMINIO','OCUPANTE','ESPOLIO','PARCERIA','ARRENDADO','USUFRUTO','DOADO'])],
            'objeto' => 'nullable',
            'cnae' => 'nullable',
            'advogado' => ['nullable', Rule::in(['SIM', 'NÃO'])],
            'advogado_oab' => 'nullable',
            'assinatura_contrato' => ['nullable', Rule::in(['GOV.BR', 'CERTIFICADO DIGITAL'])],
            'senha_govbr' => 'nullable',
            'honorario_observacao' => 'nullable',
            'honorario_extra' => 'nullable'
        ];
    }
}
