<div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    {{-- <th scope="col" class="px-6 py-3">
                        ID
                    </th> --}}
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Expediente
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Carrera
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Semestre
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Nip
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Correo
                    </th>
                </tr>
            </thead>
            @foreach ($estudiantes as $estudiante)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                    wire:key="{{ $estudiante->id }}">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $estudiante->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $estudiante->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $estudiante->expediente }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $estudiante->carrera }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $estudiante->semestre }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $estudiante->nip }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $estudiante->correo }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center items-center gap-2">
                            <x-button style="background: white"
                                wire:click='editar({{ $estudiante->id }})'>Editar</x-button>
                            <x-danger-button wire:click='eliminar({{ $estudiante->id }})'>Eliminar</x-danger-button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>

        {{-- <div class="mt-2 mb-2">
            {{ $estudiantes->links() }}
        </div> --}}
    </div>









</div>
