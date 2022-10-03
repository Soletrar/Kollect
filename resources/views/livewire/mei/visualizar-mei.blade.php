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
        <label for="nome_fantasia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Fantasia</label>
        <span class="font-semibold">{{$mei->nome_fantasia}}</span>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="rg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RG</label>
            <span class="font-semibold">{{$mei->rg}}</span>

        </div>

        <div>
            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF</label>
            <span class="font-semibold">{{$mei->cpf}}</span>

        </div>

        <div>
            <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone</label>
            <span class="font-semibold">{{$mei->telefone}}</span>

        </div>

        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
            <span class="font-semibold">{{$mei->email}}</span>

        </div>
    </div>

    <div class="mb-6">
        <label for="enderecoResidencial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Endereço Residencial</label>
        <span class="font-semibold">{{$mei->endereco_residencial}}</span>

    </div>

    <div class="mb-6">
        <label for="enderecoComercial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Endereço Comercial</label>
        <span class="font-semibold">{{$mei->endereco_comercial}}</span>

    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="tituloEleitor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título de Eleitor</label>
            <span class="font-semibold">{{$mei->titulo_eleitor ?? '-'}}</span>

        </div>

        <div>
            <label for="senhaGovbr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha (.gov.br)</label>
            <span class="font-semibold">{{$mei->senha_govbr}}</span>

        </div>
    </div>

    <div class="mb-6">
        <label for="numeroRecibo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número Recibo IR (2 últimos anos)</label>
        <span class="font-semibold">{{$mei->numero_recibo ?? '-'}}</span>

    </div>

    <div class="mb-6">
        <label for="atividadesEconomicas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Atividades Econômicas</label>
        <span class="font-semibold">{{$mei->atividades_economicas}}</span>
    </div>
</div>
