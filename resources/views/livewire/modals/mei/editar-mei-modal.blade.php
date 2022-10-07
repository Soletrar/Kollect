<div>
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Alteração de MEI
            </h3>
            <button wire:click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <form action="{{route('mei.patch-atualizar-mei', ['mei' => $mei])}}" method="post" enctype="multipart/form-data">
            @method('PATCH')

            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="mb-6">
                    <label for="prioridade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Prioridade</label>
                    <select wire:model="mei.prioridade" name="prioridade" id="prioridade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="PRIORIDADE BAIXA">PRIORIDADE BAIXA</option>
                        <option value="PRIORIDADE ALTA">PRIORIDADE ALTA</option>
                        <option value="URGENTE">URGENTE</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="nome_fantasia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Fantasia*</label>
                    <input wire:model="mei.nome_fantasia" name="nome_fantasia" type="text" id="nome_fantasia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="rg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RG*</label>
                        <input wire:model="mei.rg" name="rg" type="text" id="rg" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF*</label>
                        <input wire:model="mei.cpf" name="cpf" type="text" id="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone*</label>
                        <input wire:model="mei.telefone" name="telefone" type="text" id="telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail*</label>
                        <input wire:model="mei.email" name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="enderecoResidencial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Endereço Residencial*</label>
                    <input wire:model="mei.endereco_residencial" name="endereco_residencial" type="text" id="enderecoResidencial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="mb-6">
                    <label for="enderecoComercial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Endereço Comercial*</label>
                    <input wire:model="mei.endereco_comercial" name="endereco_comercial" type="text" id="enderecoComercial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="mb-6">
                    <label for="capital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital*</label>
                    <input wire:model="mei.capital" name="capital" type="text" id="capital" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="tituloEleitor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título de Eleitor</label>
                        <input wire:model="mei.titulo_eleitor" name="titulo_eleitor" type="text" id="tituloEleitor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="senhaGovbr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha (.gov.br)*</label>
                        <input wire:model="mei.senha_govbr" name="senha_govbr" type="text" id="senhaGovbr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="numeroRecibo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número Recibo IR (2 últimos anos)</label>
                    <input wire:model="mei.numero_recibo" name="numero_recibo" type="text" id="numeroRecibo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="">
                </div>

                <div class="mb-6" wire:ignore>
                    <label for="atividadesEconomicas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Atividades Econômicas*</label>
                    <select wire:model="atividadesEconomicas" id="atividadesEconomicas" name="atividades_economicas[]" multiple required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($atividades as $atividade)
                            <option value="{{$atividade}}">{{$atividade}}</option>
                        @endforeach
                    </select>
                </div>

                @if($mei->hasAttachments())
                    <div class="mb-6">
                        <span class="font-semibold text-xl">Anexos</span>

                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Nome
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        <span class="sr-only">Ações</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($mei->getAttachments() as $attachment)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$attachment}}
                                        </th>
                                        <td class="py-4 px-6 text-right">
                                            <a wire:click="downloadAttachment('{{$attachment}}')" href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Baixar</a>
                                            <a wire:click="deleteAttachment('{{$attachment}}')" href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Excluir</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Anexar Documentos</label>
                    <input wire:model="files" accept="image/png, image/jpeg, image/jpg, image/gif, application/pdf" name="files[]" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" multiple>
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

    <script>
        $(document).ready(function() {
            $('#atividadesEconomicas').select2();
        });
    </script>
</div>
