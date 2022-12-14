<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Baixas') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="{{route('baixa.adicionar-baixa')}}" class="btn-primary mb-3">
                    Adicionar nova Baixa
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <livewire:baixa.baixas-table />

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
