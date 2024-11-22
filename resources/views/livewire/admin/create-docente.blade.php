<div>
    <div>

        <div class="mt-8 px-8">
            <h2 class="text-4xl text-slate-800">DOCENTES</h2>
            <x-button wire:click="set('mAdd', true)">Agregar Nuevo Docente</x-button>


            <input wire:model.live='search'type="text" class="form-control" placeholder="Buscar...">


            <form wire:submit='save'>
                <x-dialog-modal wire:model='mAdd'>
                    <x-slot name='title'>
                        Crear Docente
                    </x-slot>
                    <x-slot name='content'>
                        <x-label for='nombre' value="Nombre" />
                        <x-input name='nombre' wire:model='nombre' />


                        <x-label for='expediente' value="Expediente" />
                        <x-input name='expediente' class="md-4" wire:model='expediente' />

                        <x-label for='correo' value="correo" />
                        <x-input name='correo' class="md-4" wire:model='correo' />

                        <x-label for='telefono' value="telefono" />
                        <x-input name='telefono' class="md-4" wire:model='telefono' />
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
                                Correo
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Teléfono
                            </th>
                            <th scope="col" class="px-4 py-3">
                                Opciones
                            </th>
                            {{-- <th scope="col" class="px-6 py-2">
                            Nip
                        </th> --}}
                        </tr>
                    </thead>

                    @foreach ($docentes as $docente)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                            wire:key="{{ $docente->id }}">
                            <td class="px-6 py-4">
                                {{ $docente->nombre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $docente->expediente }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $docente->correo }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $docente->telefono }}
                            </td>
                            {{-- <td class="px-6 py-4">
                            {{ $student->nip }}
                        </td> --}}
                            {{-- <td class="px-6 py-4">
                                {{ $student->correo }}
                            </td> --}}
                            <td class="px-6 py-4">
                                <div class="flex justify-center items-center gap-2">
                                    <x-button wire:click='editar({{ $docente->id }})'>Editar</x-button>
                                    <x-danger-button
                                        wire:click='eliminar({{ $docente->id }})'>Eliminar</x-danger-button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>

                <div class="mt-2 mb-2">
                    {{ $docentes->links() }}
                </div>
            </div>

            @if ($mEdit)
                <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                    <div class="py-8 max-w-md w-full">
                        <div class="bg-gray-900 shadow rounded-lg p-4">
                            <!-- Contenedor con scrollbar -->
                            <div class="max-w-md mx-auto overflow-y-auto max-h-[80vh]">
                                <div class="mb-4 flex justify-center"> <span class="text-white">Editar Estudiante</span>
                                </div>
                                <form class="max-w-sm mx-auto" wire:submit='update'>
                                    <x-label for='nombre' value="Nombre del Docente" />
                                    <x-input name='nombre' wire:model='docenteEdit.nombre' class="w-full" />
                                    {{-- Aquí me quedé en esta línea del formulario --}}
                                    <x-label for='expediente' value="Expediente" />
                                    <x-input name='expediente' class="md-4" wire:model='docenteEdit.expediente'
                                        class="w-full" />

                                    <x-label for='correo' value="Correo" />
                                    <x-input name='correo' class="md-4" wire:model='docenteEdit.correo'
                                        class="w-full" />

                                    <x-label for='telefono' value="telefono" />
                                    <x-input name='telefono' class="md-4" wire:model='docenteEdit.telefono'
                                        class="w-full" />
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

</div>
