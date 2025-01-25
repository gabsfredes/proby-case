<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard (Listagem de Projetos)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-700 rounded-lg">
                                <th class="p-4 text-center">Nome do projeto</th>
                                <th class="p-4 text-center">Data de início</th>
                                <th class="p-4 text-center">Status</th>
                                <th class="p-4 text-center">Visualizar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="border-b">
                                <td class="p-4 text-center">Projeto A</td>
                                <td class="p-4 text-center">01/01/2025</td>
                                <td class="p-4 text-center">Em andamento</td>
                                <td class="p-4 text-center">
                                    <a href="#"
                                        class="text-blue-500 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 flex justify-center"><x-carbon-view
                                            class="w-4 h-4" /></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
