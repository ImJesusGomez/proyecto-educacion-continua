<div>

    <div class="mt-8 px-8">
        <h2 class="text-4xl text-slate-800">ESTUDIANTES</h2>
        <x-button wire:click="set('mAdd', true)">Agregar Nuevo Estudiante</x-button>


        <input wire:model.live='search'type="text" class="form-control" placeholder="Buscar...">


        <form wire:submit='save'>
            <x-dialog-modal wire:model='mAdd'>
                <x-slot name='title'>
                    Crear Usuario
                </x-slot>
                <x-slot name='content'>
                    <x-label for='nombre' value="Nombre" />
                    <x-input name='nombre' wire:model='nombre' />


                    <x-label for='expediente' value="Expediente" />
                    <x-input name='expediente' class="md-4" wire:model='expediente' />

                    <x-label for='carrera' value="Carrera" />
                    <x-input name='carrera' class="md-4" wire:model='carrera' />

                    <x-label for='semestre' value="Semestre" />
                    <x-input name='semestre' class="md-4" wire:model='semestre' />

                    <x-label for='nip' value="Nip" />
                    <x-input name='nip' class="md-4" wire:model='nip' />

                    <x-label for='correo' value="Correo" />
                    <x-input name='correo' class="md-4" wire:model='correo' />
                </x-slot>
                <x-slot name='footer'>
                    <x-danger-button wire:click="$set('mAdd', false)">Cancelar</x-danger-button>
                    <x-button type='submit'>Guardar</x-button>
                </x-slot>
            </x-dialog-modal>
        </form>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Expediente
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Carrera
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Semestre
                        </th>
                        {{-- <th scope="col" class="px-6 py-2">
                            Nip
                        </th> --}}
                        <th scope="col" class="px-6 py-2">
                            Correo
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Opciones
                        </th>

                    </tr>
                </thead>

                @foreach ($students as $student)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                        wire:key="{{ $student->id }}">
                        <td class="px-6 py-4">
                            {{ $student->nombre }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->expediente }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->carrera }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->semestre }}
                        </td>
                        {{-- <td class="px-6 py-4">
                            {{ $student->nip }}
                        </td> --}}
                        <td class="px-6 py-4">
                            {{ $student->correo }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-center items-center gap-2">
                                <x-button wire:click='editar({{ $student->id }})'>Editar</x-button>
                                <x-danger-button wire:click='eliminar({{ $student->id }})'>Eliminar</x-danger-button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="mt-2 mb-2">
                {{ $students->links() }}
            </div>
        </div>



        @if ($mEdit)
            <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                <div class="py-8 max-w-md w-full">
                    <div class="bg-gray-900 shadow rounded-lg p-4">
                        <!-- Contenedor con scrollbar -->
                        <div class="max-w-md mx-auto overflow-y-auto max-h-[80vh]">
                            <span class="flex text-2xl text-white font-bold mb-4 ml-4">
                                Editar Docente
                            </span>
                            <form class="max-w-sm mx-auto" wire:submit='update'>
                                <x-label for='nombre' value="Nombre del Estudiante" />
                                <x-input name='nombre' wire:model='studentEdit.nombre' class="w-full" />
                                {{-- Aquí me quedé en esta línea del formulario --}}
                                <x-label for='expediente' value="Expediente" />
                                <x-input name='expediente' class="md-4" wire:model='studentEdit.expediente'
                                    class="w-full" />

                                <x-label for='carrera' value="Carrera" />
                                <x-input name='carrera' class="md-4" wire:model='studentEdit.carrera'
                                    class="w-full" />

                                <x-label for='semestre' value="Semestre" />
                                <x-input name='semestre' class="md-4" wire:model='studentEdit.semestre'
                                    class="w-full" />

                                <x-label for='nip' value="Nip" />
                                <x-input name='nip' class="md-4" wire:model='studentEdit.nip'
                                    class="w-full" />

                                <x-label for='correo' value="Correo" />
                                <x-input name='correo' wire:model='studentEdit.correo' class="w-full" />
                                <br>
                                <x-danger-button class="mt-2"
                                    wire:click="set('mEdit',false)">Cancelar</x-danger-button>
                                <x-button class="mt-2">Actualizar</x-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif



    </div>
</div>
