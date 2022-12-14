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
        <label for="prioridade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Prioridade</label>
        <span class="font-semibold">{{$baixa->prioridade}}</span>
    </div>

    <div class="mb-6">
        <label for="tipo_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo da baixa</label>
        <span class="font-semibold">{{$baixa->tipo_baixa}}</span>
    </div>

    <div class="mb-6">
        <label for="motivo_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Motivo da baixa</label>
        <span class="font-semibold">{{$baixa->motivo_baixa}}</span>
    </div>

    <div class="mb-6">
        <label for="cnpj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CNPJ</label>
        <span class="font-semibold">{{$baixa->cnpj}}</span>
    </div>

    <div class="mb-6">
        <label for="cnpj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone</label>
        <span class="font-semibold">{{$baixa->telefone}}</span>
    </div>

    <div class="mb-6">
        <label for="cnpj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
        <span class="font-semibold">{{$baixa->email}}</span>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado</label>
            <span class="font-semibold">{{$baixa->estado}}</span>
        </div>

        <div>
            <label for="cidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cidade</label>
            <span class="font-semibold">{{$baixa->cidade}}</span>
        </div>

        <div>
            <label for="haveres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Haveres a restituir</label>
            <span class="font-semibold">{{$baixa->haveres}}</span>
        </div>

        <div>
            <label for="valor_haveres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Valor</label>
            <span class="font-semibold">{{$baixa->valor_haveres ?? '-'}}</span>
        </div>
    </div>

    <div class="mb-6">
        <label for="responsabilidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Responsabilidade pelo Ativo e Passivo</label>
        <span class="font-semibold">{{$baixa->responsabilidade}}</span>
    </div>

    <div class="mb-6">
        <label for="data_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data da Baixa</label>
        <span class="font-semibold">{{$baixa->data_baixa->format('d/m/Y')}}</span>
    </div>
</div>
