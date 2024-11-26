<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{  $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-bold">{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                    <p class="text-sm text-gray-600">{{ $post->user->name }} - {{ $post->created_at->format('d M Y') }}</p>
                    <hr class="my-4">
                    <h4 class="font-bold">Comentarios</h4>
                    @foreach($post->comments as $comment)
                        <div class="mt-2">
                            <p>{{ $comment->body }}</p>
                            <p class="text-sm text-gray-600">{{ $comment->user->name }} - {{ $comment->created_at->format('d M Y') }}</p>
                        </div>
                    @endforeach
                    <form method="POST" action="{{ route('comments.store', $post) }}" class="mt-4">
                        @csrf
                        <textarea name="body" rows="3" class="w-full p-2 border rounded" placeholder="Agregar un comentario..."></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Comentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
