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

                    <a href="{{ route("especialidades.add") }}">agregar</a>
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Especialidad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($especialidades as $especialidad)
                            <tr>
                                <td>{{$especialidad->id}}</td>
                                <td>{{$especialidad->name}}</td>
                                <td><a href="{{ route("especialidades.edit",["id"=>$especialidad->id]) }}">Editar</a>
                                <a href="{{ route("especialidades.delete",["id"=>$especialidad->id]) }}">Eliminar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
