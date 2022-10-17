<div>
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Editar sócio/administrador
            </h3>
            <button wire:click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <!-- Modal body -->
        <form wire:submit.prevent="update">

            <div class="p-6 space-y-6">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="socio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Sócio</label>
                        <select wire:model="socio.socio" id="socio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="socioAdministrador" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Administrador</label>
                        <select wire:model="socio.socio_administrador" id="socioAdministrador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome*</label>
                        <input wire:model="socio.nome" type="text" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="estadoCivil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Estado Civil*</label>
                        <select wire:model="socio.estado_civil" id="estadoCivil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="Solteiro(a)">Solteiro(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                            <option value="Viúvo(a)">Viúvo(a)</option>
                        </select>
                    </div>

                    <div>
                        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF*</label>
                        <input wire:model="socio.cpf" type="text" id="cpf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="rg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RG*</label>
                        <input wire:model="socio.rg" type="text" id="rg" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                </div>

                <div class="mb-6">
                    <label for="nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de Nascimento*</label>
                    <input wire:model="socio.nascimento" type="date" id="nascimento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="pai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pai*</label>
                        <input wire:model="socio.pai" type="text" id="pai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="mae" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mãe*</label>
                        <input wire:model="socio.mae" type="text" id="mae" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="nacionalidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nacionalidade*</label>
                        <input wire:model="socio.nacionalidade" type="text" id="nacionalidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="naturalidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naturalidade</label>
                        <input wire:model="socio.naturalidade" type="text" id="naturalidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="profissao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Profissão*</label>
                        <input wire:model="socio.profissao" type="text" id="profissao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                    <div>
                        <label for="registroProfissional" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Registro Profissional</label>
                        <input wire:model="socio.registro_profissional" type="text" id="registroProfissional" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone*</label>
                        <input wire:model="socio.telefone" name="telefone" type="text" id="telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail*</label>
                        <input wire:model="socio.email" name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CEP*</label>
                        <input wire:model.debounce.300ms="cep" name="cep" type="number" id="cep" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="29900500" required>
                    </div>
                    <div>
                        <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logradouro*</label>
                        <input wire:model="socio.logradouro" name="logradouro" type="text" id="logradouro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                    <div>
                        <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro*</label>
                        <input wire:model="socio.bairro" name="bairro" type="text" id="bairro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                    <div>
                        <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade*</label>
                        <input wire:model="socio.localidade" name="localidade" type="text" id="localidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Linhares" required>
                    </div>
                    <div>
                        <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF*</label>
                        <input wire:model="socio.uf" name="uf" type="text" id="uf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="ES" required>
                    </div>

                    <div>
                        <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número*</label>
                        <input wire:model="socio.numero" name="numero" type="number" id="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="socio.tipo_complemento" name="tipo_complemento" id="tipoComplemento" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model.defer="socio.complemento" name="complemento" type="text" id="complemento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="socio.tipo_complemento2" name="tipo_complemento2" id="tipoComplemento2" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model.defer="socio.complemento2" name="complemento2" type="text" id="complemento2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="socio.tipo_complemento3" name="tipo_complemento3" id="tipoComplemento3" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model.defer="socio.complemento3" name="complemento3" type="text" id="complemento3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div>
                        <label for="capitalSocial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital Social*</label>
                        <input wire:model="socio.capital_social" name="capital_social" type="text" id="capitalSocial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" required>
                    </div>

                    <div>
                        <label for="formaIntegralizacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Forma de Integralização*</label>
                        <select wire:model="socio.forma_integralizacao" id="formaIntegralizacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="ESPÉCIE">ESPÉCIE</option>
                            <option value="IMÓVEIS">IMÓVEIS</option>
                            <option value="BENS MÓVEIS">BENS MÓVEIS</option>
                        </select>
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="representado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Representado/Assistido*</label>
                        <select wire:model="socio.representado" id="representado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="SIM">SIM</option>
                            <option selected value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="responsavel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Responsável</label>
                        <input wire:model="socio.responsavel" name="responsavel" type="text" id="responsavel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
