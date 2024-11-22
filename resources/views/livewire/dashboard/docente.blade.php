<div>
    @if (Auth::guard('docentes')->check())

        <body class="bg-blue-100">
            <div class="flex flex-row">
                <aside
                    class="flex flex-col w-64 min-h-min px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
                    <a href="#">
                        <img class="w-auto h-7"
                            src="https://portalinformatica.uaq.mx/asesorias/public/img/logos-fif-uaq.png" alt="">

                    </a>
                    <h2 class="text-white mt-8 text-2xl font-bold">Docente:</h2>
                    <h3 class="text-white text-sm font-bold">{{ $docente->nombre }}</h3>


                    <div class="flex flex-col justify-between flex-1 mt-6">
                        <nav class="-mx-3 space-y-6 ">
                            <div class="space-y-3">
                                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Opciones</label>

                                <div
                                    class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>

                                    <button class="ml-1.5" wire:click="abrirperfil">Perfil</button>
                                </div>

                                <div
                                    class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>


                                    <button class="ml-1.5" wire:click="abrirajustes">Ajustes</button>
                                </div>
                                <div
                                    class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                    </svg>



                                    <button class="ml-1.5" wire:click="abrirayuda">Ayuda</button>
                                </div>
                            </div>
                            <div class="space-y-3 ">
                                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Opciones</label>

                                <div class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                    </svg>
                                    <button>
                                        <span wire:click='logout' class="mx-2 text-sm font-medium">Cerrar Sesión</span>
                                    </button>
                                </div>
                            </div>
                        </nav>
                    </div>
                </aside>
                <div class="flex justify-center w-full h-screen">
                    <!-- Contenido Principal -->
                    <div class="w-full p-6">
                        <!-- Título principal -->
                        <header class="mb-6">
                            <h1 class="text-3xl font-bold text-center">Razonamiento y Tecnología para Innovar y
                                Trascender
                            </h1>
                        </header>
                        <!-- Botones de acceso rápido -->
                        <div class="flex justify-around mb-6">

                            <button wire:click="abrirF"
                                class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-900 rounded-lg hover:bg-gray-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Agregar
                                Curso
                            </button>

                        </div>
                        <!-- Área de contenido principal -->
                        <div class="bg-white p-6 rounded-md shadow-md">
                            <div class="container mx-auto p-6">
                                <h1 class="text-3xl font-bold mb-4">Mis Cursos</h1>
                                @if (isset($cursos) && $cursos->count() > 0)


                                    <div class="relative overflow-x-auto">
                                        <table
                                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Nombre
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Cupo Máximo
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Horario
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Link
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Duración
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Fecha Inicio
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Fecha Fin
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Descripción
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Fecha de Pago
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Costo
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Opciones
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cursos as $curso)
                                                    <tr class="bg-white dark:bg-gray-800">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $curso->nombre }}
                                                        </th>
                                                        <td class="px-6 py-4 text-center">
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
                                                        <td class="px-6 py-4">
                                                            {{ $curso->fecha_pago }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            ${{ $curso->costo }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <button class="mr-2"
                                                                wire:click='editar({{ $curso->id }})'>
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                                </svg>
                                                            </button>
                                                            <button wire:click='eliminar({{ $curso->id }})'>
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                                                </svg>

                                                            </button>

                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>No tienes cursos asignados.</p>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @if ($mCreate)
                <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                    <div class="py-8 max-w-md w-full">
                        <div class="bg-gray-900 shadow rounded-lg p-4">
                            <!-- Contenedor con scrollbar -->
                            <div class="max-w-md mx-auto overflow-y-auto max-h-[80vh]">
                                <span class="flex text-2xl text-white font-bold mb-4 ml-4">
                                    Crear Nuevo Curso
                                </span>
                                <div class="mb-4 ml-4 mr-4">
                                    <form class="max-w-sm text-white" wire:submit.prevent='enviar'>
                                        <x-label for="nombre" value='Nombre del curso' />
                                        <x-input id="nombre" wire:model='nombre' type='text'
                                            class="w-full mt-2" />
                                        @error('nombre')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="cupo_max" value='Cupo máximo' />
                                        <x-input id="cupo_max" wire:model='cupo_max' type='number'
                                            class="w-full mt-2" />
                                        @error('cupo_max')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="horario" value='Horario' />
                                        <x-input id="horario" wire:model='horario' type='text'
                                            class="w-full mt-2" />
                                        @error('horario')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="link" value='Link' />
                                        <x-input id="link" wire:model='link' type='text'
                                            class="w-full mt-2" />
                                        @error('link')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="duracion" value='Duración (Horas)' />
                                        <x-input id="duracion" wire:model='duracion' type='number'
                                            class="w-full mt-2" />
                                        @error('duracion')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="fecha_inicio" value='Fecha de inicio' />
                                        <x-input id="fecha_inicio" wire:model='fecha_inicio' type='date'
                                            class="w-full mt-2" />
                                        @error('fecha_inicio')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="fecha_fin" value='Fecha de finalización' />
                                        <x-input id="fecha_fin" wire:model='fecha_fin' type='date'
                                            class="w-full mt-2" />
                                        @error('fecha_fin')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="descripcion" value='Descripción' />
                                        <textarea id="descripcion" wire:model='descripcion' class="w-full mt-2 bg-gray-900"></textarea>
                                        @error('descripcion')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="costo" value='Costo' />
                                        <x-input id="costo" wire:model='costo' type='number'
                                            class="w-full mt-2" />
                                        @error('costo')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <x-label for="fecha_pago" value='Fecha de pago' />
                                        <x-input id="fecha_pago" wire:model='fecha_pago' type='date'
                                            class="w-full mt-2" />
                                        @error('fecha_pago')
                                            <span class="text-red-500 text-sm block">{{ $message }}</span>
                                        @enderror

                                        <div class="flex justify-between mt-4">
                                            <x-danger-button
                                                class="bg-red-500 border-red-500 hover:bg-red-800 hover:text-white"
                                                wire:click="formCancel">
                                                Cancelar
                                                </x-danger-boton>
                                                <button type='submit'
                                                    class="inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                                    Guardar
                                                </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


            @if ($mEdit)
                <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                    <div class="py-8 max-w-md w-full">
                        <div class="bg-gray-900 shadow rounded-lg p-4">
                            <!-- Contenedor con scrollbar -->
                            <div class="max-w-md mx-auto overflow-y-auto max-h-[80vh]">
                                <span class="flex text-2xl text-white font-bold mb-4 ml-4">
                                    Editar Curso
                                </span>
                                <div class="mb-4 ml-4 mr-4">
                                    <form class="max-w-sm text-white" wire:submit.prevent='update'>
                                        <x-label for="nombre" value='Nombre del curso' />
                                        <x-input id="nombre" wire:model='cursoEdit.nombre' type='text'
                                            class="w-full mt-2" />
                                        <x-label for="cupo_max" value='Cupo máximo' />
                                        <x-input id="cupo_max" wire:model='cursoEdit.cupo_max' type='number'
                                            class="w-full mt-2" />
                                        <x-label for="horario" value='Horario' />
                                        <x-input id="horario" wire:model='cursoEdit.horario' type='text'
                                            class="w-full mt-2" />
                                        <x-label for="link" value='Link' />
                                        <x-input id="link" wire:model='cursoEdit.link' type='text'
                                            class="w-full mt-2" />
                                        <x-label for="duracion" value='Duración (Horas)' />
                                        <x-input id="duracion" wire:model='cursoEdit.duracion' type='number'
                                            class="w-full mt-2" />
                                        <x-label for="fecha_inicio" value='Fecha de inicio' />
                                        <x-input id="fecha_inicio" wire:model='cursoEdit.fecha_inicio' type='date'
                                            class="w-full mt-2" />
                                        <x-label for="fecha_fin" value='Fecha de finalización' />
                                        <x-input id="fecha_fin" wire:model='cursoEdit.fecha_fin' type='date'
                                            class="w-full mt-2" />
                                        <x-label for="descripcion" value='Descripción' />
                                        <textarea id="descripcion" wire:model='cursoEdit.descripcion' class="w-full mt-2 bg-gray-900">
                                          
                                        </textarea>
                                        <x-label for="costo" value='Costo' />
                                        <x-input id="costo" wire:model='cursoEdit.costo' type='number'
                                            class="w-full mt-2" />
                                        <x-label for="fecha_pago" value='Fecha de pago' />
                                        <x-input id="fecha_pago" wire:model='cursoEdit.fecha_pago' type='date'
                                            class="w-full mt-2" />
                                        <div class="flex justify-between mt-4">
                                            <x-danger-button
                                                class="bg-red-500 border-red-500 hover:bg-red-800 hover:text-white"
                                                wire:click="formCancelEdit">
                                                Cancelar
                                                </x-danger-boton>
                                                <button type='submit'
                                                    class="inline-flex items-center justify-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                                    Guardar
                                                </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($abrirPerfil)
                <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                    <div class="py-12 max-w-md w-full">
                        <div class="bg-gray-900  shadow rounded-lg p-6">
                            <div class="mb-4 ml-4 flex justify-center">
                                <div class="card"
                                    style="width: 18rem; margin: 20px auto; border: 0px solid #ccc; border-radius: 10px;">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold text-xl text-white">Información del
                                            Docente</h5>
                                        <h3 class="mt-2 text-white">Nombre: {{ $docente->nombre }}</h3>
                                        <h3 class="mt-2 text-white">Expediente: {{ $docente->expediente }}</h3>
                                        <h3 class="mt-2 text-white">Correo: {{ $docente->correo }}</h3>
                                        <h3 class="mt-2 mb-2 text-white">Teléfono: {{ $docente->telefono }}</h3>
                                        <x-danger-button
                                            wire:click="set('abrirPerfil',false)">Cancelar</x-danger-button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            @endif

            @if ($abrirAjustes)
                <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                    <div class="py-12 max-w-md w-full">
                        <div class="bg-gray-900  shadow rounded-lg p-6">
                            <div class="card"
                                style="width: 20rem; margin: 20px auto; border: 0px solid #ccc; border-radius: 10px;">
                                <div class="card-body text-white">
                                    <h5 class="card-title font-weight-bold text-2xl">Ajustes del Docente</h5>
                                    <p class="card-text text-lg">Aquí puedes gestionar la configuración de este
                                        docente.</p>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item mt-2">
                                            <strong>Cambiar Nombre:</strong>
                                            <button class="btn btn-sm btn-primary float-end">Editar</button>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Actualizar Correo:</strong>
                                            <button class="btn btn-sm btn-primary float-end">Actualizar</button>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Restablecer Contraseña:</strong>
                                            <button class="btn btn-sm btn-warning float-end">Restablecer</button>
                                        </li>
                                        <li class="list-group-item mb-4">
                                            <strong>Eliminar Docente:</strong>
                                            <button class="btn btn-sm btn-danger float-end">Eliminar</button>
                                        </li>
                                    </ul>
                                    <x-danger-button wire:click="set('abrirAjustes',false)">Cancelar</x-danger-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($abrirAyuda)
                <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                    <div class="py-12 max-w-md w-full">
                        <div class="bg-gray-900  shadow rounded-lg p-6">
                            <div class="card"
                                style="width: 18rem; margin: 20px auto; border: 0px solid #ccc; border-radius: 10px;">
                                <div class="card-body text-center text-white">
                                    <h5 class="card-title font-weight-bold text-2xl">¿Necesitas Ayuda?</h5>
                                    <p class="card-text">Si tienes dudas o necesitas asistencia, haz clic en el botón
                                        de
                                        abajo para obtener ayuda.</p>
                                    <button class="btn btn-info" onclick="mostrarAyuda()">Ver Ayuda</button>
                                    <x-danger-button
                                        class="mt-2 bg-red-500 border-red-500 hover:bg-red-800 hover:text-white"
                                        wire:click="set('abrirAyuda',false)">Cancelar</x-danger-button>
                                    <script>
                                        function mostrarAyuda() {
                                            alert("Por favor, contacta a soporte en soporte@ejemplo.com o llama al +123 456 7890.");
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </body>
    @endif
</div>
