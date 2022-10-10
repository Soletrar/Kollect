<div>
    <form wire:submit.prevent="create">
        <div class="mb-6">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome*</label>
            <input wire:model.debounce.300ms="nome" name="nome" type="text" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                <input wire:model="logradouro" name="logradouro" type="text" id="logradouro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>
            <div>
                <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro*</label>
                <input wire:model="bairro" name="bairro" type="text" id="bairro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>
            <div>
                <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade*</label>
                <input wire:model="localidade" name="localidade" type="text" id="localidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Linhares" required>
            </div>
            <div>
                <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF*</label>
                <input wire:model="uf" name="uf" type="text" id="uf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="ES" required>
            </div>

            <div>
                <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número*</label>
                <input wire:model="numero" name="numero" type="number" id="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>

        </div>

        <div class="mb-6">
            <label for="referencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Referência</label>
            <input wire:model.defer="referencia" name="referencia" type="text" id="referencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="">
        </div>

        <div class="mb-6 gap-3 flex">
            <div>
                <label for="tipoComplemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                <select wire:model="tipoComplemento" name="tipo_complemento" id="tipoComplemento" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Selecione</option>
                    @foreach($complementos as $complemento)
                        <option value="{{$complemento}}">{{$complemento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full">
                <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                <input wire:model.defer="complemento" name="complemento" type="text" id="complemento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="mb-6 gap-3 flex">
            <div>
                <label for="tipoComplemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                <select wire:model="tipoComplemento2" name="tipo_complemento2" id="tipoComplemento2" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Selecione</option>
                    @foreach($complementos as $complemento)
                        <option value="{{$complemento}}">{{$complemento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full">
                <label for="complemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                <input wire:model.defer="complemento2" name="complemento2" type="text" id="complemento2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="mb-6 gap-3 flex">
            <div>
                <label for="tipoComplemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                <select wire:model="tipoComplemento3" name="tipo_complemento3" id="tipoComplemento3" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Selecione</option>
                    @foreach($complementos as $complemento)
                        <option value="{{$complemento}}">{{$complemento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full">
                <label for="complemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                <input wire:model.defer="complemento3" name="complemento3" type="text" id="complemento3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="area_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Área do Imóvel*</label>
                <input wire:model="areaImovel" name="area_imovel" type="text" id="area_imovel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="200m²" required>
            </div>

            <div>
                <label for="pavimentos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pavimento(s)*</label>
                <select wire:model="pavimentos" id="pavimentos" name="pavimentos" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @for($i = 1; $i <= 30; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>

            <div>
                <label for="outra_edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Inserido em outra edificação?*</label>
                <select wire:model="outraEdificacao" id="outra_edificacao" name="outra_edificacao" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Edificação</label>
                <input wire:model="edificacao" name="edificacao" type="text" id="edificacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="natureza_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Natureza do imóvel*</label>
                <select wire:model="naturezaImovel" id="natureza_imovel" name="natureza_imovel" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="RURAL">RURAL</option>
                    <option value="URBANA">URBANA</option>
                    <option value="SEM REGULARIZAÇÃO">SEM REGULARIZAÇÃO</option>
                </select>
            </div>
            <div>
                <label for="inscricao_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inscrição do Imóvel</label>
                <input wire:model="inscricaoImovel" name="inscricao_imovel" type="text" id="inscricao_imovel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

        </div>

        <div class="mb-6">
            <label for="tipo_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo do Imóvel*</label>
            <select wire:model="tipoImovel" id="tipo_imovel" name="tipo_imovel" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                <select wire:model="atividadeMesmoMatriz" id="atividadeMesmoMatriz" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="SIM">SIM</option>
                    <option selected value="NÃO">NÃO</option>
                </select>
            </div>
            <div>
                <label for="objeto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Objeto</label>
                <input wire:model="objeto" name="objeto" type="text" id="objeto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="capitalMesmoMatriz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Capital (Girará com o mesmo da Matriz?)*</label>
                <select wire:model="capitalMesmoMatriz" id="capitalMesmoMatriz" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="SIM">SIM</option>
                    <option selected value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="capital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital</label>
                <input wire:model="capital" name="capital" type="text" id="capital" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="contabilidadeCentralizadaMatriz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Contabilidade (Será centralizada na Matriz?)*</label>
                <select wire:model="contabilidadeCentralizadaMatriz" id="contabilidadeCentralizadaMatriz" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="SIM">SIM</option>
                    <option selected value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="contabilidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contabilidade</label>
                <input wire:model="contabilidade" name="contabilidade" type="text" id="contabilidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <button type="submit" class="btn-secondary">
            Adicionar Filial
        </button>
    </form>

    <div class="mt-6">
        <h3 class="text-xl font-bold mb-3">Filiais</h3>
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Nome
                    </th>
                    <th scope="col" class="py-3 px-6">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($filiais as $filial)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$filial->nome}}
                        </th>
                        <td>
                            <button wire:click="deleteFilial({{$filial->id}})" title="Excluir" class="dark:border-none inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-red-600 text-white hover:bg-red-700 text-white">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        @if($errors->any())
            {{$errors}}
        @endif
        <a href="{{route('constituicao.lista-constituicoes')}}" type="button" class="mt-6 btn-primary">
            Finalizar
        </a>
    </div>
</div>
