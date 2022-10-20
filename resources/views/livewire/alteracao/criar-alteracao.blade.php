<div>
    <form method="post" action="{{route('alteracao.post-adicionar-alteracao')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="prioridade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Prioridade</label>
            <select wire:model="prioridade" name="prioridade" id="prioridade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected value="PRIORIDADE BAIXA">PRIORIDADE BAIXA</option>
                <option value="PRIORIDADE ALTA">PRIORIDADE ALTA</option>
                <option value="URGENTE">URGENTE</option>
            </select>
        </div>

        <div class="mb-6" wire:ignore>
            <label for="tipo_alteracao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo da Alteração</label>
            <select multiple name="tipo_alteracao[]" required id="tipo_alteracao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach($tiposAlteracoes as $tipoAlteracao)
                    <option value="{{$tipoAlteracao}}">{{$tipoAlteracao}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="descricao_alteracao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Descrição da alteração*</label>
            <textarea wire:model="descricaoAlteracao" id="descricao_alteracao" name="descricao_alteracao" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="" required></textarea>
        </div>

        <div class="mb-6">
            <label for="nome_empresarial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial*</label>
            <input wire:model.defer="nomeEmpresarial" name="nome_empresarial" type="text" id="nome_empresarial" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="" required>
        </div>
        <div class="mb-6">
            <label for="nome_empresarial2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial 2</label>
            <input wire:model.defer="nomeEmpresarial2" name="nome_empresarial2" type="text" id="nome_empresarial2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="">
        </div>
        <div class="mb-6">
            <label for="nome_empresarial3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial 3</label>
            <input wire:model.defer="nomeEmpresarial3" name="nome_empresarial3" type="text" id="nome_empresarial3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="">
        </div>
        <div class="mb-6">
            <label for="nome_fantasia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Fantasia</label>
            <input wire:model.defer="nomeFantasia" name="nome_fantasia" type="text" id="nome_fantasia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                <input wire:model.defer="logradouro" name="logradouro" type="text" id="logradouro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" >
            </div>
            <div>
                <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro</label>
                <input wire:model.defer="bairro" name="bairro" type="text" id="bairro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" >
            </div>
            <div>
                <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade</label>
                <input wire:model.defer="localidade" name="localidade" type="text" id="localidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Linhares" >
            </div>
            <div>
                <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF</label>
                <input wire:model.defer="uf" name="uf" type="text" id="uf" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="ES" >
            </div>

            <div>
                <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número</label>
                <input wire:model.defer="numero" name="numero" type="text" id="numero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" >
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
                <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone</label>
                <input wire:model="telefone" name="telefone" type="text" id="telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" >
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
                <input wire:model="email" name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" >
            </div>
            <div>
                <label for="societario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Societário</label>
                <select wire:model="tipoSocietario" id="societario" name="tipo_societario"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    @foreach($tiposSocietarios as $tipoSocietario)
                        <option value="{{$tipoSocietario}}">{{$tipoSocietario}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="capital_social" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital Social</label>
                <input wire:model="capitalSocial" name="capital_social" data-prefix="R$ " data-thousands="." data-decimal="," type="text" id="capital_social" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" >
            </div>
            <div>
                <label for="data_integralizacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de Integralização</label>
                <input wire:model="integralizacao" type="date" name="data_integralizacao" id="data_integralizacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="" >
            </div>
            <div>
                <label for="clausula_restritiva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cláusula Restritiva</label>
                <input wire:model="clausulaRestritiva" name="clausula_restritiva" type="text" id="clausula_restritiva" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="porte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Porte</label>
                <select wire:model="porte" id="porte" name="porte"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    <option value="ME">ME</option>
                    <option value="EPP">EPP</option>
                    <option value="DEMAIS">DEMAIS</option>
                </select>
            </div>
            <div>
                <label for="simples" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Simples</label>
                <select wire:model="simples" id="simples" name="simples"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                    <option value="NÃO DEFINIDO">NÃO DEFINIDO</option>
                </select>
            </div>

            <div>
                <label for="area_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Área do Imóvel</label>
                <input wire:model="areaImovel" name="area_imovel" type="text" id="area_imovel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="200m²" >
            </div>

            <div>
                <label for="pavimentos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pavimento(s)</label>
                <select wire:model="pavimentos" id="porte" name="pavimentos"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    @for($i = 1; $i <= 30; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>

            <div>
                <label for="outra_edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Inserido em outra edificação?</label>
                <select wire:model="outraEdificacao" id="porte" name="outra_edificacao"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
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
                <label for="natureza_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Natureza do imóvel</label>
                <select wire:model="naturezaImovel" id="natureza_imovel" name="natureza_imovel"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
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
            <label for="tipo_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo do Imóvel</label>
            <select wire:model="tipoImovel" id="tipo_imovel" name="tipo_imovel"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                <select wire:model="tipoUnidade" id="tipoUnidade" name="tipo_unidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                <select wire:model="formaAtuacao" id="formaAtuacao" name="forma_atuacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                <select wire:model="inocuoVirtual" id="inocuoVirtual" name="inocuo_virtual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="residenciaEmpreendedor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">As atividades serão exercidas na residência do empreendedor?</label>
                <select wire:model="residenciaEmpreendedor" id="residenciaEmpreendedor" name="residencia_empreendedor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="quantidadeAmbiente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Quantidade máxima de pessoas no ambiente</label>
                <input wire:model="quantidadeAmbiente" name="quantidade_ambiente" type="number" id="quantidadeAmbiente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="subsoloEstacionamento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">A edificação possui subsolo com uso distinto de estacionamento?</label>
                <select wire:model="subsoloEstacionamento" id="subsoloEstacionamento" name="subsolo_estacionamento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="quantidadeCombustivel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Quantidade em litros de líquido inflamável ou combustível</label>
                <input wire:model="quantidadeCombustivel" name="quantidade_combustivel" type="number" id="quantidadeCombustivel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="quantidadePetroleo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Quantidade em quilos(kg) de gás liquefeito de petróleo (GLP)</label>
                <input wire:model="quantidadePetroleo" name="quantidade_petroleo" type="number" id="quantidadePetroleo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="mb-6">
            <label for="objeto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Objeto</label>
            <input wire:model="objeto" name="objeto" type="text" id="objeto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                <select wire:model="advogado" id="advogado" name="advogado"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    <option value="SIM">SIM</option>
                    <option value="NÃO">NÃO</option>
                </select>
            </div>

            <div>
                <label for="advogado_oab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">OAB</label>
                <input wire:model="advogadoOab" name="advogado_oab" type="text" id="advogado_oab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>

            <div>
                <label for="assinatura_contrato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Assinatura do Contrato</label>
                <select wire:model="assinaturaContrato" id="assinatura_contrato" name="assinatura_contrato"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Selecione</option>
                    <option value="GOV.BR">GOV.BR</option>
                    <option value="CERTIFICADO DIGITAL">CERTIFICADO DIGITAL</option>
                </select>
            </div>

            <div>
                <label for="senha_govbr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha (Gov.br)</label>
                <input wire:model="senhaGovbr" name="senha_govbr" type="text" id="senha_govbr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
            </div>
        </div>

        <div class="mb-6">
            <h3 class="text-xl">Proposta de Honorários</h3>

            <div class="mb-6">
                <label for="honorario_observacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Observação</label>
                <textarea wire:model="honorarioObservacao" rows="4" name="honorario_observacao" type="text" id="honorario_observacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="">
                </textarea>
            </div>

            <div class="mb-6">
                <label for="honorario_extra" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Honorário extra Constituição/Alteração</label>
                <textarea wire:model="honorarioExtra" id="honorario_extra" name="honorario_extra" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="">
                </textarea>
            </div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Anexar Documentos</label>
            <input accept="image/png, image/jpeg, image/jpg, image/gif, application/pdf" name="files[]" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" multiple>
        </div>


        <button type="submit" class="btn-primary">
            Prosseguir
        </button>
    </form>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#tipo_alteracao').select2();
            });
        </script>
    @endpush
</div>
