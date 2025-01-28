<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Informações de projeto') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center justify-between">
                        <div class="text-base sm:text-lg ml-3">{{ __('Nome: ') }}<span
                                class="font-bold">{{ $project->name }}</span></div>
                        <div class="flex">
                            <button type="button"
                                onclick="window.location.href='{{ url('projects/' . $project->id . '/edit') }}'"
                                class="text-base sm:text-lg text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Editar projeto
                            </button>
                            <a href="{{ url('projects/' . $project->id . '') }}" class="js-delete">
                                <div
                                    class="text-base sm:text-lg text-center focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-5 py-2.5 ml-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Excluir
                                    Projeto</div>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="flex-row sm:flex justify-between border-t-2 border-gray-200 dark:border-gray-700 ">
                    @if ($project->status == 'Em Andamento')
                        <div class="text-base sm:text-lg p-6 dark:text-white">
                            {{ __('Status: ') }}<span class="font-bold text-yellow-500">{{ $project->status }}</span>
                        </div>
                    @elseif ($project->status == 'Pendente')
                        <div class="text-base sm:text-lg p-6 dark:text-white">
                            {{ __('Status: ') }}<span class="font-bold text-red-500">{{ $project->status }}</span>
                        </div>
                    @else
                        <div class="text-base sm:text-lg p-6 dark:text-white">
                            {{ __('Status: ') }}<span class="font-bold text-green-500">{{ $project->status }}</span>
                        </div>
                    @endif

                    <div class="text-base sm:text-lg p-6 min-w-[150px] dark:text-white">
                        {{ __('Data de início: ') }}<span class="font-bold">{{ $project->start_date }}</span>
                    </div>
                </div>

                <div class="border-t-2 border-gray-200 dark:border-gray-700 dark:text-white">
                    <div class="text-base sm:text-lg p-6">
                        {{ __('Descrição: ') }}<span class="font-bold">{{ $project->description ?? 'Não há.' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
