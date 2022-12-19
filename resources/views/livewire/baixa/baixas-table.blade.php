<div>

    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    CNPJ
                </th>
                <th scope="col" class="py-3 px-6">
                    Tipo da Baixa
                </th>
                <th scope="col" class="py-3 px-6">
                    Prioridade
                </th>
                <th scope="col" class="py-3 px-6">
                    Registrado Por
                </th>
                <th scope="col" class="py-3 px-6">
                    Analista
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($baixas as $baixa)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="{{route('baixa.visualizar-baixa', ['baixa' => $baixa])}}">{{$baixa->cnpj}}</a>
                    </th>
                    <td class="py-4 px-6">
                        {{$baixa->tipo_baixa}}
                    </td>
                    <td class="py-4 px-6">
                        {{$baixa->prioridade}}
                    </td>
                    <td class="py-4 px-6">
                        {{$baixa->autor->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$baixa->analista->name ?? '-'}}
                    </td>
                    <td class="py-4 px-6">
                        @if($baixa->status == 'Não iniciado')
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-orange-400">
                                {{$baixa->status}}
                            </span>
                        @elseif($baixa->status == 'Executando')
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-blue-400">
                                {{$baixa->status}}
                            </span>
                        @else
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-green-400">
                                {{$baixa->status}}
                            </span>
                        @endif
                    </td>
                    <td class="py-4 px-6 text-right">
                        <button wire:click="$emit('openModal', 'modals.baixa.editar-baixa-modal', @json([$baixa->id]))" title="Editar Solicitação" class="focus:outline-none text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:ring-orange-300 font-medium rounded text-sm py-1 px-2 text-xs dark:focus:ring-orange-900">
                            <i class="fas fa-edit"></i>
                        </button>

                        <button wire:click="$emit('openModal', 'modals.baixa.delete-baixa-modal', @json([$baixa->id]))" title="Excluir Solicitação" class="focus:outline-none text-white bg-red-500 hover:bg-red-400 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm py-1 px-2 mr-2 text-xs dark:focus:ring-red-900">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
