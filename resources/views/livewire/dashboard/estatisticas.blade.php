<div>
    <div class="w-full flex justify-center" wire:poll.1s>
        <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
            <dl class="grid grid-cols-2 gap-8 p-4 mx-auto max-w-screen-xl text-gray-900 sm:grid-cols-3 xl:grid-cols-4 dark:text-white sm:p-8">
                <a href="{{route('constituicao.lista-constituicoes')}}" class="flex flex-col justify-center items-center bg-gray-100 p-4 rounded hover:bg-gray-200">
                    <dt class="mb-2 text-3xl font-extrabold">{{$constituicoesCount}}</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Constituições</dd>
                </a>

                <a href="{{route('alteracao.lista-alteracoes')}}" class="flex flex-col justify-center items-center  bg-gray-100 p-4 rounded hover:bg-gray-200">
                    <dt class="mb-2 text-3xl font-extrabold">{{$alteracoesCount}}</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Alterações</dd>
                </a>

                <a href="{{route('mei.lista-meis')}}" class="flex flex-col justify-center items-center  bg-gray-100 p-4 rounded hover:bg-gray-200">
                    <dt class="mb-2 text-3xl font-extrabold">{{$meiCount}}</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">MEI</dd>
                </a>

                <a href="{{route('baixa.home')}}" class="flex flex-col justify-center items-center  bg-gray-100 p-4 rounded hover:bg-gray-200">
                    <dt class="mb-2 text-3xl font-extrabold">{{$baixaCount}}</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Baixas</dd>
                </a>
            </dl>
        </div>
    </div>
</div>
