<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nueva Publicación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título</label>
                            <input type="text" name="title" id="title" class="w-full p-2 border rounded" required>
                        </div>
                        <div class="mt-4">
                            <label for="body" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Contenido</label>
                            <textarea name="body" id="body" rows="5" class="w-full p-2 border rounded" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Publicar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
