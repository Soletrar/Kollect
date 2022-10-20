<div>
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Modificando Alteração
            </h3>
            <button wire:click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <form action="{{route('alteracao.patch-atualizar-alteracao', ['alteracao' => $alteracao])}}" method="post" enctype="multipart/form-data">
            @method('PATCH')

            <!-- Modal body -->
            <div class="p-6 space-y-6">

                <div class="mb-6 gap-3">
                    <button type="button" wire:click="$emit('openModal', 'modals.alteracao.editar-socios-modal', @json([$alteracao->id]))"
                            class="btn-primary">Editar Sócios/administradores</button>

                    <button type="button" wire:click="$emit('openModal', 'modals.alteracao.editar-filiais-modal', @json([$alteracao->id]))"
                            class="btn-primary">Editar Filiais</button>
                </div>

                <div class="mb-6">
                    <label for="prioridade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Prioridade</label>
                    <select wire:model="alteracao.prioridade" name="prioridade" id="prioridade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="PRIORIDADE BAIXA">PRIORIDADE BAIXA</option>
                        <option value="PRIORIDADE ALTA">PRIORIDADE ALTA</option>
                        <option value="URGENTE">URGENTE</option>
                    </select>
                </div>

                <div class="mb-6" wire:ignore>
                    <label for="tipo_alteracao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo da Alteração</label>
                    <select wire:model="tiposAlteracao" multiple name="tipo_alteracao[]" required id="tipo_alteracao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($tiposAlteracoes as $tipoAlteracao)
                            <option value="{{$tipoAlteracao}}">{{$tipoAlteracao}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <label for="descricao_alteracao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Descrição da alteração*</label>
                    <textarea wire:model="alteracao.descricao_alteracao" val id="descricao_alteracao" name="descricao_alteracao" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="" required></textarea>
                </div>

                <div class="mb-6">
                    <label for="nome_empresarial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial*</label>
                    <input wire:model="alteracao.nome_empresarial" name="nome_empresarial" type="text" id="nome_empresarial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="nome_empresarial2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial 2</label>
                    <input wire:model="alteracao.nome_empresarial2" name="nome_empresarial2" type="text" id="nome_empresarial2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="">
                </div>
                <div class="mb-6">
                    <label for="nome_empresarial3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial 3</label>
                    <input wire:model="alteracao.nome_empresarial3" name="nome_empresarial3" type="text" id="nome_empresarial3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="">
                </div>
                <div class="mb-6">
                    <label for="nome_fantasia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Fantasia</label>
                    <input wire:model="alteracao.nome_fantasia" name="nome_fantasia" type="text" id="nome_fantasia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="">
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CEP</label>
                        <input wire:model.debounce.300ms="cep" name="cep" type="number" id="cep" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="29900500" >
                    </div>
                    <div>
                        <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logradouro</label>
                        <input wire:model="alteracao.logradouro" name="logradouro" type="text" id="logradouro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" >
                    </div>
                    <div>
                        <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro</label>
                        <input wire:model="alteracao.bairro" name="bairro" type="text" id="bairro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" >
                    </div>
                    <div>
                        <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade</label>
                        <input wire:model="alteracao.localidade" name="localidade" type="text" id="localidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Linhares" >
                    </div>
                    <div>
                        <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF</label>
                        <input wire:model="alteracao.uf" name="uf" type="text" id="uf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="ES" >
                    </div>

                    <div>
                        <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número</label>
                        <input wire:model="alteracao.numero" name="numero" type="text" id="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" >
                    </div>

                </div>

                <div class="mb-6">
                    <label for="referencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Referência</label>
                    <input wire:model="alteracao.referencia" name="referencia" type="text" id="referencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="">
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="alteracao.tipo_complemento" name="tipo_complemento" id="tipoComplemento" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model="alteracao.complemento" name="complemento" type="text" id="complemento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="alteracao.tipo_complemento2" name="tipo_complemento2" id="tipoComplemento2" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model="alteracao.complemento2" name="complemento2" type="text" id="complemento2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="mb-6 gap-3 flex">
                    <div>
                        <label for="tipoComplemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                        <select wire:model="alteracao.tipo_complemento3" name="tipo_complemento3" id="tipoComplemento3" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>Selecione</option>
                            @foreach($complementos as $complemento)
                                <option value="{{$complemento}}">{{$complemento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="complemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                        <input wire:model="alteracao.complemento3" name="complemento3" type="text" id="complemento3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone</label>
                        <input wire:model="alteracao.telefone" name="telefone" type="text" id="telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" >
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
                        <input wire:model="alteracao.email" name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" >
                    </div>
                    <div>
                        <label for="societario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Societário</label>
                        <select wire:model="alteracao.tipo_societario" id="societario" name="tipo_societario"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            @foreach($tiposSocietarios as $tipoSocietario)
                                <option value="{{$tipoSocietario}}">{{$tipoSocietario}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="capital_social" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital Social</label>
                        <input wire:model="alteracao.capital_social" name="capital_social" data-prefix="R$ " data-thousands="." data-decimal="," type="text" id="capital_social" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" >
                    </div>
                    <div>
                        <label for="data_integralizacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de Integralização</label>
                        <input wire:model="alteracao.data_integralizacao" type="date" name="data_integralizacao" id="data_integralizacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="" >
                    </div>
                    <div>
                        <label for="clausula_restritiva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cláusula Restritiva</label>
                        <input wire:model="alteracao.clausula_restritiva" name="clausula_restritiva" type="text" id="clausula_restritiva" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="porte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Porte</label>
                        <select wire:model="alteracao.porte" id="porte" name="porte"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="ME">ME</option>
                            <option value="EPP">EPP</option>
                            <option value="DEMAIS">DEMAIS</option>
                        </select>
                    </div>
                    <div>
                        <label for="simples" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Simples</label>
                        <select wire:model="alteracao.simples" id="simples" name="simples"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                            <option value="NÃO DEFINIDO">NÃO DEFINIDO</option>
                        </select>
                    </div>

                    <div>
                        <label for="area_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Área do Imóvel</label>
                        <input wire:model="alteracao.area_imovel" name="area_imovel" type="text" id="area_imovel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="200m²" >
                    </div>

                    <div>
                        <label for="pavimentos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pavimento(s)</label>
                        <select wire:model="alteracao.pavimentos" id="porte" name="pavimentos"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            @for($i = 1; $i <= 30; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>

                    <div>
                        <label for="outra_edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Inserido em outra edificação?</label>
                        <select wire:model="alteracao.outra_edificacao" id="porte" name="outra_edificacao"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Edificação</label>
                        <input wire:model="alteracao.edificacao" name="edificacao" type="text" id="edificacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="natureza_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Natureza do imóvel</label>
                        <select wire:model="alteracao.natureza_imovel" id="natureza_imovel" name="natureza_imovel"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="RURAL">RURAL</option>
                            <option value="URBANA">URBANA</option>
                            <option value="SEM REGULARIZAÇÃO">SEM REGULARIZAÇÃO</option>
                        </select>
                    </div>
                    <div>
                        <label for="inscricao_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inscrição do Imóvel</label>
                        <input wire:model="alteracao.inscricao_imovel" name="inscricao_imovel" type="text" id="inscricao_imovel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                </div>

                <div class="mb-6">
                    <label for="tipo_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo do Imóvel</label>
                    <select wire:model="alteracao.tipo_imovel" id="tipo_imovel" name="tipo_imovel"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="">Selecione</option>
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
                        <label for="tipoUnidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo de Unidade</label>
                        <select wire:model="alteracao.tipo_unidade" id="tipoUnidade" name="tipo_unidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="UNIDADE PRODUTIVA">UNIDADE PRODUTIVA</option>
                            <option value="SEDE">SEDE</option>
                            <option value="ESCRITÓRIO ADMINISTRATIVO">ESCRITÓRIO ADMINISTRATIVO</option>
                            <option value="DEPÓSITO FECHADO">DEPÓSITO FECHADO</option>
                            <option value="ALMOXARIFADO">ALMOXARIFADO</option>
                            <option value="OFICINA DE REPARAÇÃO">OFICINA DE REPARAÇÃO</option>
                            <option value="GARAGEM">GARAGEM</option>
                            <option value="UNIDADE DE ABASTECIMENTO DE COMBUSTÍVEIS">UNIDADE DE ABASTECIMENTO DE COMBUSTÍVEIS</option>
                            <option value="PONTO DE EXPOSIÇÃO">PONTO DE EXPOSIÇÃO</option>
                            <option value="CENTRO DE TREINAMENTO">CENTRO DE TREINAMENTO</option>
                            <option value="CENTRO DE PROCESSAMENTO DE DADOS">CENTRO DE PROCESSAMENTO DE DADOS</option>
                            <option value="POSTO DE COLETA">POSTO DE COLETA</option>
                            <option value="POSTO DE SERVIÇO">POSTO DE SERVIÇO</option>
                        </select>
                    </div>

                    <div>
                        <label for="formaAtuacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Forma de Atuação</label>
                        <select wire:model="alteracao.forma_atuacao" id="formaAtuacao" name="forma_atuacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="ESTABELECIMENTO FIXO">ESTABELECIMENTO FIXO</option>
                            <option value="INTERNET">INTERNET</option>
                            <option value="EM LOCAL FIXO FORA DE LOJA">EM LOCAL FIXO FORA DE LOJA</option>
                            <option value="CORREIO">CORREIO</option>
                            <option value="TELEVENDAS">TELEVENDAS</option>
                            <option value="PORTA A PORTA, POSTOS MOVEIS OU POR AMBULANTES">PORTA A PORTA, POSTOS MOVEIS OU POR AMBULANTES</option>
                            <option value="MÁQUINAS AUTOMÁTICAS">MÁQUINAS AUTOMÁTICAS</option>
                            <option value="ATIVIDADE DESENVOLVIDA FORA DO ESTABELECIMENTO">ATIVIDADE DESENVOLVIDA FORA DO ESTABELECIMENTO</option>
                            <option value="E-Commerce">E-Commerce</option>
                        </select>
                    </div>

                    <div>
                        <label for="inocuoVirtual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">O estabelecimento é inócuo ou virtual?</label>
                        <select wire:model="alteracao.inocuo_virtual" id="inocuoVirtual" name="inocuo_virtual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="residenciaEmpreendedor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">As atividades serão exercidas na residência do empreendedor?*</label>
                        <select wire:model="alteracao.residencia_empreendedor" id="residenciaEmpreendedor" name="residencia_empreendedor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="quantidadeAmbiente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Quantidade máxima de pessoas no ambiente</label>
                        <input wire:model="alteracao.quantidade_ambiente" name="quantidade_ambiente" type="number" id="quantidadeAmbiente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="subsoloEstacionamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">A edificação possui subsolo com uso distinto de estacionamento?</label>
                        <select wire:model="alteracao.subsolo_estacionamento" id="subsoloEstacionamento" name="subsolo_estacionamento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="quantidadeCombustivel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Quantidade em litros de líquido inflamável ou combustível</label>
                        <input wire:model="alteracao.quantidade_combustivel" name="quantidade_combustivel" type="number" id="quantidadeCombustivel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="quantidadePetroleo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Quantidade em quilos(kg) de gás liquefeito de petróleo (GLP)</label>
                        <input wire:model="alteracao.quantidade_petroleo" name="quantidade_petroleo" type="number" id="quantidadePetroleo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                </div>

                <div class="mb-6">
                    <label for="objeto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Objeto</label>
                    <input wire:model="alteracao.objeto" name="objeto" type="text" id="objeto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" >
                </div>

                <div class="mb-6">
                    <label for="cnae" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CNAE (somente números, separados por virgula)</label>
                    <input wire:model="cnae" name="cnae" type="text" id="cnae" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" >
                </div>

                <div class="mb-6">
                    <label for="risco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Risco</label>
                    <span class="font-bold" id="risco">{{$risco}}</span>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="advogado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Possui Advogado</label>
                        <select wire:model="alteracao.advogado" id="advogado" name="advogado"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                    </div>

                    <div>
                        <label for="advogado_oab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">OAB</label>
                        <input wire:model="alteracao.advogado_oab" name="advogado_oab" type="text" id="advogado_oab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>

                    <div>
                        <label for="assinatura_contrato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Assinatura do Contrato</label>
                        <select wire:model="alteracao.assinatura_contrato" id="assinatura_contrato" name="assinatura_contrato"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Selecione</option>
                            <option value="GOV.BR">GOV.BR</option>
                            <option value="CERTIFICADO DIGITAL">CERTIFICADO DIGITAL</option>
                        </select>
                    </div>

                    <div>
                        <label for="senha_govbr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha (Gov.br)</label>
                        <input wire:model="alteracao.senha_govbr" name="senha_govbr" type="text" id="senha_govbr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="">
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-xl">Proposta de Honorários</h3>

                    <div class="mb-6">
                        <label for="honorario_observacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Observação</label>
                        <textarea wire:model="alteracao.honorario_observacao" rows="4" name="honorario_observacao" type="text" id="honorario_observacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="">
                </textarea>
                    </div>

                    <div class="mb-6">
                        <label for="honorario_extra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Honorário extra Constituição/Alteração</label>
                        <textarea wire:model="alteracao.honorario_extra" id="honorario_extra" name="honorario_extra" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="">
                </textarea>
                    </div>
                </div>

                @if($alteracao->hasAttachments())
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
                                @foreach($alteracao->getAttachments() as $attachment)
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
                    <input accept="image/png, image/jpeg, image/jpg, image/gif, application/pdf" name="files[]" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" multiple>
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
            $('#tipo_alteracao').select2();
        });

        $('#tipo_alteracao').change(function (e) {
            @this.set('tiposAlteracao', $('#tipo_alteracao').select2("val"))
        });

        document.addEventListener("livewire:load", function (event) {
            window.livewire.hook('afterDomUpdate', () => {
                $('#tipo_alteracao').select2();
            });
        });
    </script>
</div>
