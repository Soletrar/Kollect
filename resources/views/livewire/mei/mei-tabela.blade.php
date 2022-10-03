<div>
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
                        @if($mei->status == 'Não iniciado')
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        {{$meis->links()}}
    </div>
</div>
