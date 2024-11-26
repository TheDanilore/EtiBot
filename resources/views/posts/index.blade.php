<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Foros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary"><strong>--Nueva Publicación--</strong></a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($posts as $post)
                    <div class="mt-4">
                        <a href="{{ route('posts.show', $post) }}">
                            <h1 class="font-bold">{{ $post->title }}</h1>
                        </a>
                        <p>{{ $post->body }}</p>
                        <p class="text-sm text-gray-600">{{ $post->user->name }} - {{ $post->created_at->format('d M Y') }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</x-app-layout>