<div>
    <form wire:submit.prevent="create">

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="socio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Sócio</label>
                <select wire:model="socio" id="socio"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="socioAdministrador" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Administrador</label>
                <select wire:model="socioAdministrador" id="socioAdministrador"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>
            </div>

        </div>

        <div class="mb-6">
            <div>
                <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome*</label>
                <input wire:model="nome" type="text" id="nome"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2">

            <div>
                <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF*</label>
                <input wire:model="cpf" type="text" id="cpf"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>

            <div>
                <label for="rg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RG*</label>
                <input wire:model="rg" type="text" id="rg"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>

        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="estadoCivil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Estado
                    Civil*</label>
                <select wire:model="estadoCivil" id="estadoCivil"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Viúvo(a)">Viúvo(a)</option>
                </select>
            </div>

            <div>
                <label for="casadoExterior" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Casado(a)
                    no Exterior</label>
                <select wire:model="casadoExterior" id="casadoExterior"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Selecione</option>
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="cpfConjuge" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF do
                    Cônjuge</label>
                <input wire:model="cpfConjuge" type="text" id="cpfConjuge"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="regimeBens" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Regime
                    de Bens</label>
                <select wire:model="regimeBens" id="regimeBens"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Selecione</option>
                    <option value="Comunhão Parcial">Comunhão Parcial</option>
                    <option value="Comunhão Universal">Comunhão Universal</option>
                    <option value="Participação final nos aquesto">Participação final nos aquesto</option>
                    <option value="Separação de bens">Separação de bens</option>
                </select>
            </div>
        </div>

        <div class="mb-6">
            <div>
                <label for="nomeConjuge" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome do
                    Cônjuge</label>
                <input wire:model="nomeConjuge" type="text" id="nomeConjuge"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="mb-6">
            <label for="nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de
                Nascimento*</label>
            <input wire:model="nascimento" type="date" id="nascimento"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="" required>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="pai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pai*</label>
                <input wire:model="pai" type="text" id="pai"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>

            <div>
                <label for="mae" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mãe*</label>
                <input wire:model="mae" type="text" id="mae"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>

            <div>
                <label for="nacionalidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nacionalidade*</label>
                <input wire:model="nacionalidade" type="text" id="nacionalidade"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>

            <div>
                <label for="naturalidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naturalidade</label>
                <input wire:model="naturalidade" type="text" id="naturalidade"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="profissao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Profissão*</label>
                <input wire:model="profissao" type="text" id="profissao"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>
            <div>
                <label for="registroProfissional"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Registro
                    Profissional</label>
                <input wire:model="registroProfissional" type="text" id="registroProfissional"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="telefone"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone*</label>
                <input wire:model="telefone" name="telefone" type="text" id="telefone"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>
            <div>
                <label for="email"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail*</label>
                <input wire:model="email" name="email" type="email" id="email"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>

            <div>
                <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CEP*</label>
                <input wire:model.debounce.300ms="cep" name="cep" type="number" id="cep"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="29900500" required>
            </div>
            <div>
                <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logradouro*</label>
                <input wire:model="logradouro" name="logradouro" type="text" id="logradouro"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>
            <div>
                <label for="bairro"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro*</label>
                <input wire:model="bairro" name="bairro" type="text" id="bairro"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>
            <div>
                <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade*</label>
                <input wire:model="localidade" name="localidade" type="text" id="localidade"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Linhares" required>
            </div>
            <div>
                <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF*</label>
                <input wire:model="uf" name="uf" type="text" id="uf"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="ES" required>
            </div>

            <div>
                <label for="numero"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número*</label>
                <input wire:model="numero" name="numero" type="number" id="numero"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>
        </div>

        <div class="mb-6 gap-3 flex">
            <div>
                <label for="tipoComplemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo
                    Complemento</label>
                <select wire:model="tipoComplemento" name="tipo_complemento" id="tipoComplemento"
                        class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Selecione</option>
                    @foreach($complementos as $complemento)
                        <option value="{{$complemento}}">{{$complemento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full">
                <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                <input wire:model.defer="complemento" name="complemento" type="text" id="complemento"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="mb-6 gap-3 flex">
            <div>
                <label for="tipoComplemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo
                    Complemento</label>
                <select wire:model="tipoComplemento2" name="tipo_complemento2" id="tipoComplemento2"
                        class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Selecione</option>
                    @foreach($complementos as $complemento)
                        <option value="{{$complemento}}">{{$complemento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full">
                <label for="complemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                <input wire:model.defer="complemento2" name="complemento2" type="text" id="complemento2"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="mb-6 gap-3 flex">
            <div>
                <label for="tipoComplemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo
                    Complemento</label>
                <select wire:model="tipoComplemento3" name="tipo_complemento3" id="tipoComplemento3"
                        class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Selecione</option>
                    @foreach($complementos as $complemento)
                        <option value="{{$complemento}}">{{$complemento}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full">
                <label for="complemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                <input wire:model.defer="complemento3" name="complemento3" type="text" id="complemento3"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2">

            <div>
                <label for="capitalSocial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital
                    Social*</label>
                <input wire:model="capitalSocial" name="capital_social" type="text" id="capitalSocial"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" required>
            </div>

            <div>
                <label for="formaIntegralizacao"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Forma de
                    Integralização*</label>
                <select wire:model="formaIntegralizacao" id="formaIntegralizacao"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="ESPÉCIE">ESPÉCIE</option>
                    <option value="IMÓVEIS">IMÓVEIS</option>
                    <option value="BENS MÓVEIS">BENS MÓVEIS</option>
                </select>
            </div>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="representado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Representado/Assistido*</label>
                <select wire:model="representado" id="representado"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="SIM">SIM</option>
                    <option selected value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="responsavel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Responsável</label>
                <input wire:model="responsavel" name="responsavel" type="text" id="responsavel"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <button type="submit" class="btn-secondary">
            Adicionar Sócio/administrador
        </button>
    </form>

    <div class="mt-6">
        <h3 class="text-xl font-bold mb-3">Sócios/administradores</h3>
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Nome
                    </th>
                    <th scope="col" class="py-3 px-6">
                        CPF
                    </th>
                    <th scope="col" class="py-3 px-6">

                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($socios as $socio)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$socio->nome}}
                        </th>
                        <td class="py-4 px-6">
                            {{$socio->cpf}}
                        </td>
                        <td>
                            <button wire:click="deleteSocio({{$socio->id}})" title="Excluir"
                                    class="dark:border-none inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-red-600 text-white hover:bg-red-700 text-white">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{route('alteracao.adicionar-filial', ['alteracao' => $alteracao->id])}}" type="button"
           class="mt-6 btn-primary">
            Prosseguir
        </a>
    </div>
</div>
