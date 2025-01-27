<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inserir novo projeto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form name="newProject" id="newProject" method="POST" action="{{ url('projetos') }}">
                        @csrf
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm sm:text-lg font-medium text-gray-900 dark:text-white">Nome do
                                projeto <span class="text-red-500">*</span></label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm sm:text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Project BETA" required />
                        </div>
                        <div class="mt-4">
                            <label for="start_date"
                                class="block mb-2 text-sm sm:text-lg font-medium text-gray-900 dark:text-white">Data de
                                início <span class="text-red-500">*</span></label>
                            <input type="date" id="start_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm sm:text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                        <div class="mt-4">
                            <label for="status"
                                class="block mb-2 text-sm sm:text-lg font-medium text-gray-900 dark:text-white">Status <span class="text-red-500">*</span></label>
                            <select id="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm sm:text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                                <option value="Em Andamento">Em Andamento</option>
                                <option value="Concluido">Concluido</option>
                                <option value="Pendente">Pendente</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <label for="description"
                                class="block mb-2 text-sm sm:text-lg font-medium text-gray-900 dark:text-white">Descrição</label>
                            <textarea id="description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm sm:text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Descreva o projeto"></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Inserir
                                projeto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
