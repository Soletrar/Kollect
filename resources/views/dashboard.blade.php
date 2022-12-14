<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end gap-3 mb-3">
                <a href="{{route('constituicao.adicionar')}}" class="btn-primary">
                    Adicionar Constituição
                </a>

                <a href="{{route('alteracao.adicionar')}}" class="btn-primary">
                    Adicionar Alteração
                </a>

                <a href="{{route('mei.adicionar')}}" class="btn-primary">
                    Adicionar MEI
                </a>

                <a href="{{route('baixa.adicionar-baixa')}}" class="btn-primary">
                    Adicionar Baixa
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:dashboard.estatisticas />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
