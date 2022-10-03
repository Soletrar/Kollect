<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar MEI') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


{{--                    <livewire:mei.criar-mei/>--}}

                    <form method="post" action="{{route('mei.post-adicionar-mei')}}">
                        @csrf

                        <div class="mb-6">
                            <label for="prioridade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Prioridade</label>
                            <select name="prioridade" id="prioridade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="PRIORIDADE BAIXA">PRIORIDADE BAIXA</option>
                                <option value="PRIORIDADE ALTA">PRIORIDADE ALTA</option>
                                <option value="URGENTE">URGENTE</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="nome_fantasia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Fantasia*</label>
                            <input name="nome_fantasia" type="text" id="nome_fantasia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="rg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RG*</label>
                                <input name="rg" type="text" id="rg" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="" required>
                            </div>

                            <div>
                                <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF*</label>
                                <input name="cpf" type="text" id="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="" required>
                            </div>

                            <div>
                                <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone*</label>
                                <input name="telefone" type="text" id="telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="" required>
                            </div>

                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail*</label>
                                <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="" required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="enderecoResidencial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Endereço Residencial*</label>
                            <input name="endereco_residencial" type="text" id="enderecoResidencial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <div class="mb-6">
                            <label for="enderecoComercial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Endereço Comercial*</label>
                            <input name="endereco_comercial" type="text" id="enderecoComercial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="tituloEleitor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título de Eleitor</label>
                                <input name="titulo_eleitor" type="text" id="tituloEleitor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="">
                            </div>

                            <div>
                                <label for="senhaGovbr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha (.gov.br)*</label>
                                <input name="senha_govbr" type="text" id="senhaGovbr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="" required>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="numeroRecibo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número Recibo IR (2 últimos anos)</label>
                            <input name="numero_recibo" type="text" id="numeroRecibo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="">
                        </div>

                        <div class="mb-6">
                            <label for="atividadesEconomicas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Atividades Econômicas*</label>
                            <select id="atividadesEconomicas" name="atividades_economicas[]" multiple required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                               @foreach($atividades as $atividade)
                                    <option value="{{$atividade}}">{{$atividade}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn-primary">
                            Finalizar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#atividadesEconomicas').select2();
        });
    </script>
</x-app-layout>
