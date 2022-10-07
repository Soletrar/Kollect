<div>
    <div class="p-3 mb-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="grid gap-6 mb-3 md:grid-cols-2">
            <div>
                <label for="analistas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Analista</label>
                <select id="analistas" wire:model="analista" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Selecione</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="statuses" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status</label>
                <select id="statuses" wire:model="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Não iniciado">Não iniciado</option>
                    <option value="Executando">Executando</option>
                    <option value="Finalizado">Finalizado</option>
                </select>
            </div>
        </div>

        <button class="btn-primary" wire:click="update">Salvar</button>
    </div>


    <div class="mb-6">
        <label for="nome_empresarial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial</label>
        <span class="font-semibold">{{$constituicao->nome_empresarial}}</span>
    </div>
    <div class="mb-6">
        <label for="nome_empresarial2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial 2</label>
        <span class="font-semibold">{{$constituicao->nome_empresarial2 ?? '-'}}</span>

    </div>
    <div class="mb-6">
        <label for="nome_empresarial3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Empresarial 3</label>
        <span class="font-semibold">{{$constituicao->nome_empresarial3 ?? '-'}}</span>

    </div>
    <div class="mb-6">
        <label for="nome_fantasia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome Fantasia</label>
        <span class="font-semibold">{{$constituicao->nome_fantasia ?? '-'}}</span>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CEP</label>
            <span class="font-semibold">{{$constituicao->cep}}</span>
        </div>
        <div>
            <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logradouro</label>
            <span class="font-semibold">{{$constituicao->logradouro}}</span>
        </div>
        <div>
            <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro</label>
            <span class="font-semibold">{{$constituicao->bairro}}</span>
        </div>
        <div>
            <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade</label>
            <span class="font-semibold">{{$constituicao->localidade}}</span>
        </div>
        <div>
            <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF</label>
            <span class="font-semibold">{{$constituicao->uf}}</span>
        </div>

        <div>
            <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número</label>
            <span class="font-semibold">{{$constituicao->numero}}</span>
        </div>

    </div>

    <div class="mb-6">
        <label for="referencia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Referência</label>
        <span class="font-semibold">{{$constituicao->referencia ?? '-'}}</span>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="tipoComplemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
            <span class="font-semibold">{{$constituicao->tipo_complemento ?? '-'}}</span>
        </div>
        <div>
            <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
            <span class="font-semibold">{{$constituicao->complemento ?? '-'}}</span>
        </div>

        <div>
            <label for="tipoComplemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
            <span class="font-semibold">{{$constituicao->tipo_complemento2 ?? '-'}}</span>
        </div>
        <div>
            <label for="complemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
            <span class="font-semibold">{{$constituicao->complemento2 ?? '-'}}</span>
        </div>
        <div>
            <label for="tipoComplemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
            <span class="font-semibold">{{$constituicao->tipo_complemento3 ?? '-'}}</span>
        </div>
        <div>
            <label for="complemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
            <span class="font-semibold">{{$constituicao->complemento3 ?? '-'}}</span>
        </div>

        <div>
            <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone</label>
            <span class="font-semibold">{{$constituicao->telefone}}</span>
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
            <span class="font-semibold">{{$constituicao->email}}</span>
        </div>
        <div>
            <label for="societario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Societário</label>
            <span class="font-semibold">{{$constituicao->tipo_societario}}</span>
        </div>
        <div>
            <label for="capital_social" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital Social</label>
            <span class="font-semibold">{{$constituicao->capital_social}}</span>
        </div>
        <div>
            <label for="data_integralizacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de Integralização</label>
            <span class="font-semibold">{{$constituicao->data_integralizacao->format('d/m/Y')}}</span>
        </div>
        <div>
            <label for="clausula_restritiva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cláusula Restritiva</label>
            <span class="font-semibold">{{$constituicao->clausula_restritiva ?? '-'}}</span>
        </div>

        <div>
            <label for="porte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Porte</label>
            <span class="font-semibold">{{$constituicao->porte}}</span>
        </div>
        <div>
            <label for="simples" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Simples</label>
            <span class="font-semibold">{{$constituicao->simples}}</span>
        </div>

        <div>
            <label for="area_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Área do Imóvel</label>
            <span class="font-semibold">{{$constituicao->area_imovel}}</span>
        </div>

        <div>
            <label for="pavimentos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pavimento(s)</label>
            <span class="font-semibold">{{$constituicao->pavimentos}}</span>
        </div>

        <div>
            <label for="outra_edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Inserido em outra edificação?</label>
            <span class="font-semibold">{{$constituicao->outra_edificacao}}</span>
        </div>

        <div>
            <label for="edificacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Edificação</label>
            <span class="font-semibold">{{$constituicao->edificacao ?? '-'}}</span>
        </div>

        <div>
            <label for="natureza_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Natureza do imóvel</label>
            <span class="font-semibold">{{$constituicao->natureza_imovel}}</span>
        </div>
        <div>
            <label for="inscricao_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inscrição do Imóvel</label>
            <span class="font-semibold">{{$constituicao->inscricao_imovel ?? '-'}}</span>
        </div>

    </div>

    <div class="mb-6">
        <label for="tipo_imovel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo do Imóvel</label>
        <span class="font-semibold">{{$constituicao->tipo_imovel}}</span>
    </div>

    <div class="mb-6">
        <label for="objeto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Objeto</label>
        <span class="font-semibold">{{$constituicao->objeto}}</span>
    </div>

    <div class="mb-6">
        <label for="cnae" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CNAE</label>
        <span class="font-semibold">{{$constituicao->cnae}}</span>
    </div>

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="advogado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Possui Advogado</label>
            <span class="font-semibold">{{$constituicao->advogado}}</span>
        </div>

        <div>
            <label for="advogado_oab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">OAB</label>
            <span class="font-semibold">{{$constituicao->advogado_oab ?? '-'}}</span>
        </div>

        <div>
            <label for="assinatura_contrato" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Assinatura do Contrato</label>
            <span class="font-semibold">{{$constituicao->assinatura_contrato}}</span>
        </div>

        <div>
            <label for="senha_govbr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha (Gov.br)</label>
            <span class="font-semibold">{{$constituicao->senha_govbr ?? '-'}}</span>
        </div>
    </div>

    <div class="flex flex-col">
        <span class="font-bold text-2xl my-6">Sócios</span>

        @foreach($constituicao->socios()->orderBy('nome')->getModels() as $socio)

            <span class="text-2xl mt-6 mb-3 font-bold">{{$socio->nome}}</span>

            <div class="mb-6">
                <label for="estadoCivil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Estado Civil</label>
                <span class="font-semibold">{{$socio->estado_civil}}</span>
            </div>

            <div class="grid gap-6 mb-6 md:grid-cols-2">

                <div>
                    <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF</label>
                    <span class="font-semibold">{{$socio->cpf}}</span>
                </div>

                <div>
                    <label for="rg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RG</label>
                    <span class="font-semibold">{{$socio->rg}}</span>
                </div>

            </div>

            <div class="mb-6">
                <label for="nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de Nascimento</label>
                <span class="font-semibold">{{$socio->nascimento->format('d/m/Y')}}</span>
            </div>

            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="pai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pai</label>
                    <span class="font-semibold">{{$socio->pai}}</span>
                </div>

                <div>
                    <label for="mae" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mãe</label>
                    <span class="font-semibold">{{$socio->mae}}</span>
                </div>

                <div>
                    <label for="nacionalidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nacionalidade</label>
                    <span class="font-semibold">{{$socio->nacionalidade}}</span>
                </div>

                <div>
                    <label for="naturalidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naturalidade*</label>
                    <span class="font-semibold">{{$socio->naturalidade}}</span>
                </div>

                <div>
                    <label for="profissao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Profissão</label>
                    <span class="font-semibold">{{$socio->profissao}}</span>
                </div>
                <div>
                    <label for="registroProfissional" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Registro Profissional</label>
                    <span class="font-semibold">{{$socio->registro_profissional ?? '-'}}</span>
                </div>

                <div>
                    <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone</label>
                    <span class="font-semibold">{{$socio->telefone}}</span>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail</label>
                    <span class="font-semibold">{{$socio->email}}</span>
                </div>

                <div>
                    <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CEP</label>
                    <span class="font-semibold">{{$socio->cep}}</span>
                </div>
                <div>
                    <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logradouro</label>
                    <span class="font-semibold">{{$socio->logradouro}}</span>
                </div>
                <div>
                    <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro</label>
                    <span class="font-semibold">{{$socio->bairro}}</span>
                </div>
                <div>
                    <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade</label>
                    <span class="font-semibold">{{$socio->localidade}}</span>
                </div>
                <div>
                    <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF</label>
                    <span class="font-semibold">{{$socio->uf}}</span>
                </div>

                <div>
                    <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número</label>
                    <span class="font-semibold">{{$socio->numero}}</span>
                </div>

                <div>
                    <label for="tipoComplemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                    <span class="font-semibold">{{$socio->tipo_complemento ?? '-'}}</span>
                </div>
                <div>
                    <label for="complemento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                    <span class="font-semibold">{{$socio->complemento ?? '-'}}</span>
                </div>

                <div>
                    <label for="tipoComplemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                    <span class="font-semibold">{{$socio->tipo_complemento2 ?? '-'}}</span>
                </div>
                <div>
                    <label for="complemento2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                    <span class="font-semibold">{{$socio->complemento2 ?? '-'}}</span>
                </div>

                <div>
                    <label for="tipoComplemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tipo Complemento</label>
                    <span class="font-semibold">{{$socio->tipo_complemento3 ?? '-'}}</span>
                </div>
                <div>
                    <label for="complemento3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complemento</label>
                    <span class="font-semibold">{{$socio->complemento3 ?? '-'}}</span>
                </div>

                <div>
                    <label for="capitalSocial" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital Social</label>
                    <span class="font-semibold">{{$socio->capital_social}}</span>
                </div>

                <div>
                    <label for="formaIntegralizacao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Forma de Integralização*</label>
                    <span class="font-semibold">{{$socio->forma_integralizacao}}</span>
                </div>
            </div>

            <div class="mb-6">
                <label for="socioAdministrador" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Sócio Administrador</label>
                <span class="font-semibold">{{$socio->socio_administrador}}</span>
            </div>

            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="representado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Representado/Assistido</label>
                    <span class="font-semibold">{{$socio->representado}}</span>
                </div>

                <div>
                    <label for="responsavel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Responsável</label>
                    <span class="font-semibold">{{$socio->responsavel ?? '-'}}</span>
                </div>
            </div>

        @endforeach
    </div>

    <div class="flex flex-col">
        <span class="font-bold text-2xl my-6">Filiais</span>

        @foreach($constituicao->filiais()->orderBy('nome')->getModels() as $filial)

            <span class="text-2xl mt-6 mb-3 font-bold">{{$filial->nome}}</span>

            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CEP</label>
                    <span class="font-semibold">{{$filial->cep}}</span>
                </div>
                <div>
                    <label for="logradouro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Logradouro</label>
                    <span class="font-semibold">{{$filial->logradouro}}</span>
                </div>
                <div>
                    <label for="bairro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bairro</label>
                    <span class="font-semibold">{{$filial->bairro}}</span>
                </div>
                <div>
                    <label for="localidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Localidade</label>
                    <span class="font-semibold">{{$filial->localidade}}</span>
                </div>
                <div>
                    <label for="uf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UF</label>
                    <span class="font-semibold">{{$filial->uf}}</span>
                </div>

                <div>
                    <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Número</label>
                    <span class="font-semibold">{{$filial->numero}}</span>
                </div>

                <div>
                    <label for="atividadeMesmoMatriz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Atividade (Mesma da Matriz?)</label>
                    <span class="font-semibold">{{$filial->atividade_mesmo_matriz}}</span>
                </div>
                <div>
                    <label for="objeto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Objeto</label>
                    <span class="font-semibold">{{$filial->objeto ?? '-'}}</span>
                </div>

                <div>
                    <label for="capitalMesmoMatriz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Capital (Girará com o mesmo da Matriz?)</label>
                    <span class="font-semibold">{{$filial->capital_mesmo_matriz}}</span>
                </div>

                <div>
                    <label for="capital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Capital</label>
                    <span class="font-semibold">{{$filial->capital ?? '-'}}</span>
                </div>

                <div>
                    <label for="contabilidadeCentralizadaMatriz" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Contabilidade (Será centralizada na Matriz?)</label>
                    <span class="font-semibold">{{$filial->contabilidade_centralizada_matriz}}</span>
                </div>

                <div>
                    <label for="contabilidade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Contabilidade</label>
                    <span class="font-semibold">{{$filial->contabilidade ?? '-'}}</span>
                </div>
            </div>

        @endforeach

    </div>

    @if($constituicao->hasAttachments())
        <div class="mb-6">
            <span class="font-bold text-2xl my-6">Anexos</span>

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
                    @foreach($constituicao->getAttachments() as $attachment)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$attachment}}
                            </th>
                            <td class="py-4 px-6 text-right">
                                <a wire:click="downloadAttachment('{{$attachment}}')" href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Baixar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
