<div>
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Editar Filial - {{$filial->nome}}
            </h3>
            <button wire:click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <!-- Modal body -->
        <form wire:submit.prevent="update">

            <div class="p-6 space-y-6">
                <div class="mb-6">
                    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome*</label>
                    <input wire:model="filial.nome" name="nome" type="text" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CEP*</label>
                        <input wire:model.debounce.300ms="cep" name="cep" type="number" id="cep" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="29900500" required>
                    </div>
                    <div>
                        <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logradouro*</label>
                        <input wire:model="filial.logradouro" name="logradouro" type="text" id="logradouro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                    <div>
                        <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro*</label>
                        <input wire:model="filial.bairro" name="bairro" type="text" id="bairro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                    <div>
                        <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade*</label>
                        <input wire:model="filial.localidade" name="localidade" type="text" id="localidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Linhares" required>
                    </div>
                    <div>
                        <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF*</label>
                        <input wire:model="filial.uf" name="uf" type="text" id="uf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="ES" required>
                    </div>

                    <div>
                        <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número*</label>
                        <input wire:model="filial.numero" name="numero" type="number" id="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                </div>

                <div class="mb-6">
                    <label for="referencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Referência</label>
                    <input wire:model.defer="filial.referencia" name="referencia" type="text" id="referencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="">
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="filial.tipo_complemento" name="tipo_complemento" id="tipoComplemento" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model.defer="filial.complemento" name="complemento" type="text" id="complemento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="filial.tipo_complemento2" name="tipo_complemento2" id="tipoComplemento2" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model.defer="filial.complemento2" name="complemento2" type="text" id="complemento2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="filial.tipo_complemento3" name="tipo_complemento3" id="tipoComplemento3" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model.defer="filial.complemento3" name="complemento3" type="text" id="complemento3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="area_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Área do Imóvel*</label>
                        <input wire:model="filial.area_imovel" name="area_imovel" type="text" id="area_imovel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="200m²" required>
                    </div>

                    <div>
                        <label for="pavimentos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pavimento(s)*</label>
                        <select wire:model="filial.pavimentos" id="pavimentos" name="pavimentos" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @for($i = 1; $i <= 30; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>

                    <div>
                        <label for="outra_edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Inserido em outra edificação?*</label>
                        <select wire:model="filial.outra_edificacao" id="porte" name="outra_edificacao" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Edificação</label>
                        <input wire:model="filial.edificacao" name="edificacao" type="text" id="edificacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="natureza_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Natureza do imóvel*</label>
                        <select wire:model="filial.natureza_imovel" id="natureza_imovel" name="natureza_imovel" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="RURAL">RURAL</option>
                            <option value="URBANA">URBANA</option>
                            <option value="SEM REGULARIZAÇÃO">SEM REGULARIZAÇÃO</option>
                        </select>
                    </div>
                    <div>
                        <label for="inscricao_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inscrição do Imóvel</label>
                        <input wire:model="filial.inscricao_imovel" name="inscricao_imovel" type="text" id="inscricao_imovel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                </div>

                <div class="mb-6">
                    <label for="tipo_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo do Imóvel*</label>
                    <select wire:model="filial.tipo_imovel" id="tipo_imovel" name="tipo_imovel" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="PROPRIO">PROPRIO</option>
                        <option value="CEDIDO">CEDIDO</option>
                        <option value="ALUGADO">ALUGADO</option>
                        <option value="COMODATO">COMODATO</option>
                        <option value="CONDOMINIO">CONDOMINIO</option>
                        <option value="OCUPANTE">OCUPANTE</option>
                        <option value="ESPOLIO">ESPOLIO</option>
                        <option value="PARCERIA">PARCERIA</option>
                        <option value="ARRENDADO">ARRENDADO</option>
                        <option value="USUFRUTO">USUFRUTO</option>
                        <option value="DOADO">DOADO</option>
                    </select>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="atividadeMesmoMatriz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Atividade (Mesma da Matriz?)*</label>
                        <select wire:model="filial.atividade_mesmo_matriz" id="atividadeMesmoMatriz" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="SIM">SIM</option>
                            <option selected value="NÃO">NÃO</option>
                        </select>
                    </div>
                    <div>
                        <label for="objeto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Objeto</label>
                        <input wire:model="filial.objeto" name="objeto" type="text" id="objeto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="capitalMesmoMatriz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Capital (Girará com o mesmo da Matriz?)*</label>
                        <select wire:model="filial.capital_mesmo_matriz" id="capitalMesmoMatriz" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="SIM">SIM</option>
                            <option selected value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="capital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital</label>
                        <input wire:model="filial.capital" name="capital" type="text" id="capital" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="contabilidadeCentralizadaMatriz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Contabilidade (Será centralizada na Matriz?)*</label>
                        <select wire:model="filial.contabilidade_centralizada_matriz" id="contabilidadeCentralizadaMatriz" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="SIM">SIM</option>
                            <option selected value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="contabilidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contabilidade</label>
                        <input wire:model="filial.contabilidade" name="contabilidade" type="text" id="contabilidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button type="submit" class="btn-primary mr-2"><i class="fa-solid fa-arrows-rotate"></i> Salvar</button>
                <button wire:click="closeModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    Cancelar
                </button>
            </div>
        </form>

    </div>
</div>
