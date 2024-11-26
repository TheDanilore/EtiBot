<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Foto de Perfil') }}
        </h2>
        <div class="flex items-center">
            <img src="{{ asset(Auth::user()->avatar) }}" alt="Foto de perfil" 
            class="img-profile-perfil rounded-circle mr-1">

        </div>


    </header>


</section>