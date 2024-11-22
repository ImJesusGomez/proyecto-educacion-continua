<div>
    <div>
        <div class="mt-8 px-8">
            <h2 class="text-4xl text-slate-800">CURSOS</h2>
            <x-button wire:click="set('mAdd', true)">Agregar Nuevo Curso</x-button>


            <input wire:model.live='search'type="text" class="form-control" placeholder="Buscar...">


            <form wire:submit='save'>
                <x-dialog-modal wire:model='mAdd'>
                    <x-slot name='title'>
                        Crear Curso
                    </x-slot>
                    <x-slot name='content'>
                        <x-label for='nombre' value="Nombre" />
                        <x-input name='nombre' wire:model='nombre' />

                        <x-label for='cupo_max' value="cupo_max" />
                        <x-input name='cupo_max' wire:model='cupo_max' />

                        <x-label for='horario' value="horario" />
                        <x-input name='horario' wire:model='horario' />

                        <x-label for='link' value="link" />
                        <x-input name='link' wire:model='link' />

                        <x-label for='duracion' value="duracion" />
                        <x-input name='duracion' wire:model='duracion' />

                        <x-label for='fecha_inicio' value="fecha_inicio" />
                        <x-input name='fecha_inicio' wire:model='fecha_inicio' />

                        <x-label for='fecha_fin' value="fecha_fin" />
                        <x-input name='fecha_fin' wire:model='fecha_fin' />

                        <x-label for='descripcion' value="descripcion" />
                        <x-input name='descripcion' wire:model='descripcion' />
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
                                Cupo Máximo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Horario
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Link
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Duracion
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha Inicio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha Fin
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descripción
                            </th>
                            {{-- <th scope="col" class="px-4 py-3">
                                Opciones
                            </th> --}}
                            {{-- <th scope="col" class="px-6 py-2">
                            Nip
                        </th> --}}
                        </tr>
                    </thead>

                    @foreach ($cursos as $curso)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"
                            wire:key="{{ $curso->id }}">
                            <td class="px-6 py-4">
                                {{ $curso->nombre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->cupo_max }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->horario }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->link }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->duracion }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->fecha_inicio }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->fecha_fin }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $curso->descripcion }}
                            </td>
                            {{-- <td class="px-6 py-4">
                            {{ $student->nip }}
                        </td> --}}
                            {{-- <td class="px-6 py-4">
                                {{ $student->correo }}
                            </td> --}}
                            {{-- <td class="px-6 py-4">
                                <div class="flex justify-center items-center gap-2">
                                    <x-button style="background: white"
                                        wire:click='editar({{ $curso->id }})'>Editar</x-button>
                                    <x-danger-button
                                        wire:click='eliminar({{ $curso->id }})'>Eliminar</x-danger-button>
                                </div>
                            </td> --}}
                        </tr>
                    @endforeach
                </table>

                <div class="mt-2 mb-2">
                    {{ $cursos->links() }}
                </div>
            </div>

            @if ($mEdit)
                <div class="bg-gray-800 bg-opacity-25 fixed inset-0">
                    <div class="py-12">
                        <div class="bg-white shadow rounded-lg p-6">
                            <form class="max-w-sm mx-auto" wire:submit='update'>
                                <div class="mb-4 flex justify-center"> <span>Editar Curso</span> </div>
                                <x-label for='nombre' value="Nombre del Curso" />
                                <x-input name='nombre' wire:model='cursoEdit.nombre' />

                                <x-label for='cupo_max' value="Cupo Máximo" />
                                <x-input name='cupo_max' wire:model='cursoEdit.cupo_max' />

                                <x-label for='horario' value="Horario" />
                                <x-input name='horario' wire:model='cursoEdit.horario' />

                                <x-label for='link' value="Link" />
                                <x-input name='link' wire:model='cursoEdit.link' />

                                <x-label for='duracion' value="Duración" />
                                <x-input name='duracion' wire:model='cursoEdit.duracion' />

                                <x-label for='fecha_inicio' value="Fecha de Inicio" />
                                <x-input name='fecha_inicio' wire:model='cursoEdit.fecha_inicio' />

                                <x-label for='fecha_fin' value="Fecha Fin" />
                                <x-input name='fecha_fin' wire:model='cursoEdit.fecha_fin' />

                                <x-label for='descripcion' value="Dscripcion" />
                                <x-input name='descripcion' wire:model='cursoEdit.descripcion' />

                                <x-danger-button class="mt-2"
                                    wire:click="set('mEdit',false)">Cancelar</x-danger-button>
                                <x-button class="mt-2">Actualizar</x-button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

</div>
