<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Constituições') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="{{route('constituicao.adicionar')}}" class="btn-primary mb-3">
                    Adicionar Constituição
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <livewire:constituicao.constituicao-tabela />

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
