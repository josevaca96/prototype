<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Activos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('activos.store')}}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="nombre" value="nombre" />
                            <x-text-input id="nombre" required class="block mt-1 w-full" type="text"
                                name="nombre"  />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="nota" name="nota" />
                            <textarea class="block mt-1 w-full" placeholder="¿Que estas pensando?" style="background: transparent" name="nota"
                                id="" cols="30" rows="3" autocomplete="nota"></textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class=" mt-4">
                                {{ __('Send') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
