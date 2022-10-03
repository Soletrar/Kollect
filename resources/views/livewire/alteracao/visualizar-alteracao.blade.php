<div>
    <div class="p-3 mb-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="grid gap-6 mb-3 md:grid-cols-2">
            <div>
                <label for="analistas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Analista</label>
                <select id="analistas" wire:model="analista" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Selecione</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="statuses" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status</label>
                <select id="statuses" wire:model="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Não iniciado">Não iniciado</option>
                    <option value="Executando">Executando</option>
                    <option value="Finalizado">Finalizado</option>
                </select>
            </div>
        </div>

        <button class="btn-primary" wire:click="update">Salvar</button>
    </div>

    <div class="mb-6">
        <label for="descricao_alteracao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Descrição da alteração</label>
        <span class="font-semibold">{!! nl2br(e($alteracao->descricao_alteracao)) !!}</span>
    </div>

    <div class="mb-6">
        <label for="nome_empresarial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial</label>
        <span class="font-semibold">{{$alteracao->nome_empresarial ?? '-'}}</span>
    </div>
    <div class="mb-6">
        <label for="nome_empresarial2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial 2</label>
        <span class="font-semibold">{{$alteracao->nome_empresarial2 ?? '-'}}</span>

    </div>
    <div class="mb-6">
        <label for="nome_empresarial3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial 3</label>
        <span class="font-semibold">{{$alteracao->nome_empresarial3 ?? '-'}}</span>

    </div>
    <div class="mb-6">
        <label for="nome_fantasia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Fantasia</label>
        <span class="font-semibold">{{$alteracao->nome_fantasia ?? '-'}}</span>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CEP</label>
            <span class="font-semibold">{{$alteracao->cep ?? '-'}}</span>
        </div>
        <div>
            <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logradouro</label>
            <span class="font-semibold">{{$alteracao->logradouro ?? '-'}}</span>
        </div>
        <div>
            <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro</label>
            <span class="font-semibold">{{$alteracao->bairro ?? '-'}}</span>
        </div>
        <div>
            <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade</label>
            <span class="font-semibold">{{$alteracao->localidade ?? '-'}}</span>
        </div>
        <div>
            <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF</label>
            <span class="font-semibold">{{$alteracao->uf ?? '-'}}</span>
        </div>

        <div>
            <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número</label>
            <span class="font-semibold">{{$alteracao->numero ?? '-'}}</span>
        </div>

    </div>

    <div class="mb-6">
        <label for="referencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Referência</label>
        <span class="font-semibold">{{$alteracao->referencia ?? '-'}}</span>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="tipoComplemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
            <span class="font-semibold">{{$alteracao->tipo_complemento ?? '-'}}</span>
        </div>
        <div>
            <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
            <span class="font-semibold">{{$alteracao->complemento ?? '-'}}</span>
        </div>

        <div>
            <label for="tipoComplemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
            <span class="font-semibold">{{$alteracao->tipo_complemento2 ?? '-'}}</span>
        </div>
        <div>
            <label for="complemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
            <span class="font-semibold">{{$alteracao->complemento2 ?? '-'}}</span>
        </div>
        <div>
            <label for="tipoComplemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
            <span class="font-semibold">{{$alteracao->tipo_complemento3 ?? '-'}}</span>
        </div>
        <div>
            <label for="complemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
            <span class="font-semibold">{{$alteracao->complemento3 ?? '-'}}</span>
        </div>

        <div>
            <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone</label>
            <span class="font-semibold">{{$alteracao->telefone ?? '-'}}</span>
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
            <span class="font-semibold">{{$alteracao->email ?? '-'}}</span>
        </div>
        <div>
            <label for="societario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Societário</label>
            <span class="font-semibold">{{$alteracao->tipo_societario ?? '-'}}</span>
        </div>
        <div>
            <label for="capital_social" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital Social</label>
            <span class="font-semibold">{{$alteracao->capital_social ?? '-'}}</span>
        </div>
        <div>
            <label for="data_integralizacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de Integralização</label>
            <span class="font-semibold">{{!empty($alteracao->data_integralizacao) ? $alteracao->data_integralizacao->format('d/m/Y') : '-'}}</span>
        </div>
        <div>
            <label for="clausula_restritiva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cláusula Restritiva</label>
            <span class="font-semibold">{{$alteracao->clausula_restritiva ?? '-'}}</span>
        </div>

        <div>
            <label for="porte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Porte</label>
            <span class="font-semibold">{{$alteracao->porte ?? '-'}}</span>
        </div>
        <div>
            <label for="simples" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Simples</label>
            <span class="font-semibold">{{$alteracao->simples ?? '-'}}</span>
        </div>

        <div>
            <label for="area_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Área do Imóvel</label>
            <span class="font-semibold">{{$alteracao->area_imovel ?? '-'}}</span>
        </div>

        <div>
            <label for="pavimentos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pavimento(s)</label>
            <span class="font-semibold">{{$alteracao->pavimentos ?? '-'}}</span>
        </div>

        <div>
            <label for="outra_edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Inserido em outra edificação?</label>
            <span class="font-semibold">{{$alteracao->outra_edificacao ?? '-'}}</span>
        </div>

        <div>
            <label for="edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Edificação</label>
            <span class="font-semibold">{{$alteracao->edificacao ?? '-'}}</span>
        </div>

        <div>
            <label for="natureza_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Natureza do imóvel</label>
            <span class="font-semibold">{{$alteracao->natureza_imovel ?? '-'}}</span>
        </div>
        <div>
            <label for="inscricao_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inscrição do Imóvel</label>
            <span class="font-semibold">{{$alteracao->inscricao_imovel ?? '-'}}</span>
        </div>

    </div>

    <div class="mb-6">
        <label for="tipo_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo do Imóvel</label>
        <span class="font-semibold">{{$alteracao->tipo_imovel ?? '-'}}</span>
    </div>

    <div class="mb-6">
        <label for="objeto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Objeto</label>
        <span class="font-semibold">{{$alteracao->objeto ?? '-'}}</span>
    </div>

    <div class="mb-6">
        <label for="cnae" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CNAE</label>
        <span class="font-semibold">{{$alteracao->cnae ?? '-'}}</span>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="advogado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Possui Advogado</label>
            <span class="font-semibold">{{$alteracao->advogado ?? '-'}}</span>
        </div>

        <div>
            <label for="advogado_oab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">OAB</label>
            <span class="font-semibold">{{$alteracao->advogado_oab ?? '-'}}</span>
        </div>

        <div>
            <label for="assinatura_contrato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Assinatura do Contrato</label>
            <span class="font-semibold">{{$alteracao->assinatura_contrato ?? '-'}}</span>
        </div>

        <div>
            <label for="senha_govbr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha (Gov.br)</label>
            <span class="font-semibold">{{$alteracao->senha_govbr ?? '-'}}</span>
        </div>
    </div>
</div>
