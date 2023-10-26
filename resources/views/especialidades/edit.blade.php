<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Especialidades
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('especialidades.update') }}">
                        @csrf

                        <input name="id" value="{{$especialidad->id}}" type="hidden"/>

                        <!-- Nombre de la especialidad -->
                        <div>
                            <x-input-label for="name" value="Nombre" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$especialidad->name" required autofocus  />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>



                        <div class="flex items-center justify-end mt-4">

                            <button class="ml-3">
                                <a href="{{ route("especialidades") }}">Cancelar</a>
                            </button>

                            <x-primary-button class="ml-3">
                            Guardar
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
