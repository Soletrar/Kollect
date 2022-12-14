<div>
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Alteração de Baixa
            </h3>
            <button wire:click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <form wire:submit.prevent="update" method="post">
            @method('PATCH')

            <!-- Modal body -->
            <div class="p-6 space-y-6">


                <div class="mb-6">
                    <label for="prioridade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Prioridade</label>
                    <select wire:model="baixa.prioridade" name="prioridade" id="prioridade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="PRIORIDADE BAIXA">PRIORIDADE BAIXA</option>
                        <option value="PRIORIDADE ALTA">PRIORIDADE ALTA</option>
                        <option value="URGENTE">URGENTE</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="tipo_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo da baixa</label>
                    <select wire:model="baixa.tipo_baixa" name="tipo_baixa" id="tipo_baixa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="Baixa de Matriz">Baixa de Matriz</option>
                        <option value="Baixa de uma filial no Brasil">Baixa de uma filial no Brasil</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="motivo_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Motivo da baixa</label>
                    <select wire:model="baixa.motivo_baixa" name="motivo_baixa" id="motivo_baixa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                    <label for="cnpj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CNPJ*</label>
                    <input wire:model="baixa.cnpj" name="cnpj" type="text" id="cnpj" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="mb-6">
                    <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone*</label>
                    <input wire:model="baixa.telefone" name="telefone" type="text" id="telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail*</label>
                    <input wire:model="baixa.email" name="email" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estado*</label>
                        <input wire:model="baixa.estado" name="estado" type="text" id="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="cidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cidade*</label>
                        <input wire:model="baixa.cidade" name="cidade" type="text" id="cidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="haveres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Haveres a restituir</label>
                        <select wire:model="baixa.haveres" name="haveres" id="haveres" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="SIM">SIM</option>
                            <option selected value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="valor_haveres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Valor</label>
                        <input wire:model="baixa.valor_haveres" name="valor_haveres" type="text" id="valor_haveres" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="responsabilidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Responsabilidade pelo Ativo e Passivo*</label>
                    <input wire:model="baixa.responsabilidade" name="responsabilidade" type="text" id="responsabilidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="mb-6">
                    <label for="data_baixa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data da Baixa*</label>
                    <input wire:model="baixa.data_baixa" name="data_baixa" type="date" id="data_baixa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="defaultModal" type="submit" class="btn-primary" wire:loading.attr="disabled">
                    <i class="fa-solid fa-rotate"></i> Atualizar
                </button>
                <button wire:click="closeModal" data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>
