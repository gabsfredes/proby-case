<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listagem de Projetos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @csrf
                    @if ($allProjects->isEmpty())
                        <div class="text-center text-gray-500 dark:text-gray-400">
                            Nenhum projeto encontrado.
                        </div>
                    @else
                        <table class="w-full border-collapse text-sm sm:text-lg rounded-lg overflow-hidden">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 ">
                                    <th class="p-4 text-center">ID</th>
                                    <th class="p-4 text-center">Nome</th>
                                    <th class="p-4 text-center">Início</th>
                                    <th class="p-4 text-center">Status</th>
                                    <th class="p-4 text-center">Ver</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($allProjects as $project)
                                    <tr class="border-b">
                                        <td class="p-4 text-center">{{ $project->id }}</td>
                                        <td class="p-4 text-center">{{ $project->name }}</td>
                                        <td class="p-4 text-center">{{ $project->start_date }}</td>
                                        <td class="p-4 text-center">{{ $project->status }}</td>
                                        <td class="p-4 text-center">
                                            <a href="{{ url('projects/' . $project->id) }}"
                                                class="text-blue-500 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 flex justify-center"><x-carbon-view
                                                    class="w-4 h-4" /></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pt-6">
                            {{ $allProjects->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
