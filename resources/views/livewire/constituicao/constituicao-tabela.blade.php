<div>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" wire:poll.1s>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nome Empresarial
                </th>
                <th scope="col" class="py-3 px-6">
                    Sócios
                </th>
                <th scope="col" class="py-3 px-6">
                    Filiais
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
            @foreach($constituicoes as $constituicao)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                        title="{{$constituicao->nome_empresarial}}">
                        <a href="{{route('constituicao.visualizar-constituicao', ['constituicao' => $constituicao->id])}}">{{Str::limit($constituicao->nome_empresarial, 20)}}</a>
                    </th>
                    <td class="py-4 px-6">
                        {{$constituicao->socios()->count()}}
                    </td>
                    <td class="py-4 px-6">
                        {{$constituicao->filiais()->count()}}
                    </td>
                    <td class="py-4 px-6">
                        {{$constituicao->prioridade}}
                    </td>
                    <td class="py-4 px-6">
                        {{$constituicao->autor->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$constituicao->analista->name ?? '-'}}
                    </td>
                    <td class="py-4 px-6">
                        @if($constituicao->status == 'Não iniciado')
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-orange-400">
                                {{$constituicao->status}}
                            </span>
                        @elseif($constituicao->status == 'Executando')
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-blue-400">
                                {{$constituicao->status}}
                            </span>
                        @else
                            <span
                                class="inline-block p-1 text-center font-semibold text-white text-xs align-baseline leading-none rounded bg-green-400">
                                {{$constituicao->status}}
                            </span>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        {{$constituicoes->links()}}
    </div>
</div>
