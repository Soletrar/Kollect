<div>
    <div class="flex w-full mb-3">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input wire:model="search" type="search" id="default-search" class="w-96 block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nome fantasia" required>
        </div>
    </div>


    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" wire:poll.1s>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nome Fantasia
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
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($meis as $mei)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                        title="{{$mei->nome_fantasia}}">
                        <a href="{{route('mei.visualizar-mei', ['mei' => $mei])}}">{{Str::limit($mei->nome_fantasia, 20)}}</a>
                    </th>
                    <td class="py-4 px-6">
                        {{$mei->prioridade}}
                    </td>
                    <td class="py-4 px-6">
                        {{$mei->autor->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$mei->analista->name ?? '-'}}
                    </td>
                    <td class="py-4 px-6">
                        @if($mei->status == 'N??o iniciado')
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-orange-400">
                                {{$mei->status}}
                            </span>
                        @elseif($mei->status == 'Executando')
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-blue-400">
                                {{$mei->status}}
                            </span>
                        @else
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-green-400">
                                {{$mei->status}}
                            </span>
                        @endif
                    </td>
                    <td class="flex gap-1">
                        <button wire:click="$emit('openModal', 'modals.mei.editar-mei-modal', @json([$mei->id]))" title="Editar Solicita????o" class="focus:outline-none text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:ring-orange-300 font-medium rounded text-sm py-1 px-2 mr-2 text-xs dark:focus:ring-orange-900">
                            <i class="fas fa-edit"></i>
                        </button>

                        <button wire:click="$emit('openModal', 'modals.mei.delete-mei-modal', @json([$mei->id]))" title="Excluir Solicita????o" class="focus:outline-none text-white bg-red-500 hover:bg-red-400 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm py-1 px-2 mr-2 text-xs dark:focus:ring-red-900">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        {{$meis->links()}}
    </div>
</div>
