<head>
<link rel="stylesheet" href="{{ asset('css/Estilo.css') }}" />
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Preguntas Frecuentes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div id="tarjeta" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach ($faqs as $faq)
                            <div class="preguntas-container">
                                <div class="preguntas-card">
                                    <div class="preguntas-front">
                                        <h3>{{ $faq->question }}</h3>
                                    </div>
                                    <div class="preguntas-back">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <br><br><br><br><br><br><br><br><br><br>
                    <br><br><br>

                    @role('Administrador')
                    <div class="mt-6">
                        <h2><strong>Realizar una pregunta</strong></h2>
                        <form action="{{ route('faq.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="question" class="block text-gray-700 dark:text-gray-300">Pregunta:</label>
                                <input type="text" name="question" id="question" class="w-full p-2 border rounded" required>
                            </div>
                            <div class="mb-4">
                                <label for="answer" class="block text-gray-700 dark:text-gray-300">Respuesta:</label>
                                <textarea name="answer" id="answer" class="w-full p-2 border rounded" required></textarea>
                            </div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enviar</button>
                        </form>
                    </div>
                    @endrole
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>