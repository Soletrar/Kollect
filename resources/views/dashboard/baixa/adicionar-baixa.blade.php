<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Baixa') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="post" action="{{route('baixa.store')}}" enctype="multipart/form-data">
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
                            <label for="tipo_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo da baixa</label>
                            <select name="tipo_baixa" id="tipo_baixa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="Baixa de Matriz">Baixa de Matriz</option>
                                <option value="Baixa de uma filial no Brasil">Baixa de uma filial no Brasil</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="motivo_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Motivo da baixa</label>
                            <select name="motivo_baixa" id="motivo_baixa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="Extinção, pelo encerramento da liquidação voluntária">Extinção, pelo encerramento da liquidação voluntária</option>
                                <option value="Incorporação">Incorporação</option>
                                <option value="Fusão">Fusão</option>
                                <option value="Cisão Total">Cisão Total</option>
                                <option value="Encerramento do processo de falência">Encerramento do processo de falência</option>
                                <option value="Encerramento do processo de liquidação extrajudicial">Encerramento do processo de liquidação extrajudicial</option>
                                <option value="Extinção, por unificação da inscrição da filial">Extinção, por unificação da inscrição da filial</option>
                                <option value="Transformação do órgão regional à condição de matriz">Transformação do órgão regional à condição de matriz</option>
                                <option value="Transformação do órgão local à condição de filial do órgão regional">Transformação do órgão local à condição de filial do órgão regional</option>
                            </select>
                        </div>


                        <div class="mb-6">
                            <label for="nome_empresarial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial*</label>
                            <input name="nome_empresarial" type="text" id="nome_empresarial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <div class="mb-6">
                            <label for="cnpj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CNPJ*</label>
                            <input name="cnpj" type="text" id="cnpj" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <div class="mb-6">
                            <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone*</label>
                            <input name="telefone" type="text" id="telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail*</label>
                            <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado*</label>
                                <input name="estado" type="text" id="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="" required>
                            </div>

                            <div>
                                <label for="cidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cidade*</label>
                                <input name="cidade" type="text" id="cidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="" required>
                            </div>

                            <div>
                                <label for="haveres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Haveres a restituir</label>
                                <select name="haveres" id="haveres" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="SIM">SIM</option>
                                    <option selected value="NÃO">NÃO</option>
                                </select>
                            </div>

                            <div>
                                <label for="valor_haveres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Valor</label>
                                <input name="valor_haveres" type="text" id="valor_haveres" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="responsabilidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Responsabilidade pelo Ativo e Passivo*</label>
                            <input name="responsabilidade" type="text" id="responsabilidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <div class="mb-6">
                            <label for="data_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data da Baixa*</label>
                            <input name="data_baixa" type="date" id="data_baixa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" required>
                        </div>

                        <button type="submit" class="btn-primary">
                            Finalizar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
