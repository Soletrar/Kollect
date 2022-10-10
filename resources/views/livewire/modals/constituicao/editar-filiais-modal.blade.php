<div>
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Alteração de Filiais
            </h3>
            <button wire:click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">

            <h3 class="text-xl font-bold mb-3">Filiais</h3>

            <div class="flex justify-end">
                <a href="{{route('constituicao.adicionar-filial', ['constituicao' => $constituicao->id])}}" class="btn-primary">
                    Adicionar nova filial
                </a>
            </div>

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
                                <button wire:click="$emit('openModal', 'modals.filial.editar-filial', @json([$filial->id]))" title="Editar Filial" class="focus:outline-none text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:ring-orange-300 font-medium rounded text-sm py-1 px-2 mr-2 text-xs dark:focus:ring-orange-900">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <button wire:click="deleteFilial({{$filial->id}})" title="Excluir" class="dark:border-none inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-red-600 text-white hover:bg-red-700 text-white">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
