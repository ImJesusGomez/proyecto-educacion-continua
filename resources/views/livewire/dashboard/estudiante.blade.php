<div>
    @if (Auth::guard('estudiantes')->check())
        <div class="flex flex-row bg-blue-100">
            <aside
                class="flex flex-col w-64 min-h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
                <a href="#">
                    <img class="w-auto h-7" src="https://portalinformatica.uaq.mx/asesorias/public/img/logos-fif-uaq.png"
                        alt="">

                </a>
                <h2 class="text-white mt-8 text-2xl font-bold">Estudiante:</h2>
                <h3 class="text-white text-sm font-bold">{{ $estudiante->nombre }}</h3>


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
                @if ($abrirPerfil)
                    <div
                        class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                        <div class="py-12 max-w-md w-full">
                            <div class="bg-gray-900  shadow rounded-lg p-6">
                                <div class="mb-4 ml-4 flex justify-center">
                                    <div class="card"
                                        style="width: 18rem; margin: 20px auto; border: 0px solid #ccc; border-radius: 10px;">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold text-xl text-white">Información del
                                                Estudiante</h5>
                                            <h3 class="mt-2 text-white">Nombre: {{ $estudiante->nombre }}</h3>
                                            <h3 class="mt-2 text-white">Expediente: {{ $estudiante->expediente }}</h3>
                                            <h3 class="mt-2 text-white">Carrera: {{ $estudiante->carrera }}</h3>
                                            <h3 class="mt-2 text-white">Semestre: {{ $estudiante->semestre }}</h3>
                                            <h3 class="mt-2 mb-2 text-white">Correo: {{ $estudiante->correo }}</h3>
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
                    <div
                        class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                        <div class="py-12 max-w-md w-full">
                            <div class="bg-gray-900  shadow rounded-lg p-6">
                                <div class="card"
                                    style="width: 20rem; margin: 20px auto; border: 0px solid #ccc; border-radius: 10px;">
                                    <div class="card-body text-white">
                                        <h5 class="card-title font-weight-bold text-2xl">Ajustes del Estudiante</h5>
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
                                                <strong>Eliminar Estudiante:</strong>
                                                <button class="btn btn-sm btn-danger float-end">Eliminar</button>
                                            </li>
                                        </ul>
                                        <x-danger-button
                                            wire:click="set('abrirAjustes',false)">Cancelar</x-danger-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($abrirAyuda)
                    <div
                        class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                        <div class="py-12 max-w-md w-full">
                            <div class="bg-gray-900  shadow rounded-lg p-6">
                                <div class="card"
                                    style="width: 18rem; margin: 20px auto; border: 0px solid #ccc; border-radius: 10px;">
                                    <div class="card-body text-center text-white">
                                        <h5 class="card-title font-weight-bold text-2xl">¿Necesitas Ayuda?</h5>
                                        <p class="card-text">Si tienes dudas o necesitas asistencia, haz clic en el
                                            botón
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
            </aside>
            <div class="max-w-6xl mx-auto p-6">
                <!-- Mensaje de Bienvenida -->
                <h1 class="text-3xl font-bold mb-4 text-black">
                    Bienvenido, {{ $estudiante->nombre ?? 'Estudiante' }}
                </h1>


                <div class="max-w-6xl mx-auto p-6">

                    <!-- Tabla de Cursos Disponibles -->
                    <h1 class="text-2xl font-bold mb-4 text-black">Cursos Disponibles</h1>
                    <!-- Campo de búsqueda -->
                    <div class="flex justify-between items-center mb-4">

                        <input type="text" placeholder="Buscar cursos..." wire:model.live="searchCurso"
                            class="p-2 border rounded w-1/3 focus:outline-none focus:ring focus:border-blue-300" />
                    </div>

                    <table class="table-auto w-full bg-gray-800 text-white shadow-lg rounded border border-gray-700">
                        <thead class="bg-gray-900 text-gray-300">
                            <tr>
                                <th class="px-4 py-2 border-b">Nombre del Curso</th>
                                <th class="px-4 py-2 border-b">Docente</th>
                                <th class="px-4 py-2 border-b">Cupo Máximo</th>
                                <th class="px-4 py-2 border-b">Cupos Disponibles</th>
                                <th class="px-4 py-2 border-b">Fecha de Inicio</th>
                                <th class="px-4 py-2 border-b">Acción</th>
                                <th class="px-4 py-2 border-b">Más Información</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursos as $curso)
                                <tr class="border-t border-gray-300" wire:key="{{ $curso->id }}">
                                    <td class="px-4 py-2">{{ $curso->nombre }}</td>
                                    <td class="px-4 py-2">{{ $curso->docente->nombre ?? 'Docente no asignado' }}</td>
                                    <td class="px-4 py-2 text-center">{{ $curso->cupo_max }}</td>
                                    <td class="px-4 py-2 text-center">
                                        {{ $curso->cupo_max - $curso->estudiantes->count() }}
                                    </td>
                                    <td class="px-4 py-2">{{ $curso->fecha_inicio }}</td>
                                    <td class="px-4 py-2">
                                        @if ($curso->cupo_max - $curso->estudiantes->count() > 0)
                                            <button wire:click="inscribir({{ $curso->id }})"
                                                class="bg-green-600 text-white px-4 py-1 rounded hover:bg-green-700">
                                                Inscribirme
                                            </button>
                                        @else
                                            <button class="bg-gray-400 text-white px-4 py-1 rounded cursor-not-allowed"
                                                disabled>
                                                Cupo Lleno
                                            </button>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2 flex justify-center items-center">
                                        <button wire:click="mostrarInfoCurso({{ $curso->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                            </svg>
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $cursos->links() }}


                    <!-- Tabla de Mis Cursos -->
                    <h1 class="text-2xl font-bold mt-8 mb-4 text-black">Mis Cursos</h1>
                    <!-- Campo de búsqueda -->
                    <div class="flex justify-between items-center mb-4">

                        <input type="text" placeholder="Buscar cursos..." wire:model.live="searchPro"
                            class="p-2 border rounded w-1/3 focus:outline-none focus:ring focus:border-blue-300" />
                    </div>

                    <table class="table-auto w-full bg-gray-800 text-white shadow-lg rounded border border-gray-700">
                        <thead class="bg-gray-900 text-gray-300">
                            <tr>
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Docente</th>
                                <th class="px-4 py-2">Fecha Inicio</th>
                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursosInscritos as $curso)
                                <tr class="border-t border-gray-700">
                                    <td class="px-4 py-2">{{ $curso->nombre }}</td>
                                    <td class="px-4 py-2">{{ $curso->docente->nombre ?? 'Docente no asignado' }}</td>
                                    <td class="px-4 py-2">{{ $curso->fecha_inicio }}</td>
                                    <td class="px-4 py-2">
                                        <div class="flex flex-row gap-4 items-center justify-center">
                                            <button wire:click="darDeBaja({{ $curso->id }})"
                                                class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700">
                                                Dar de baja
                                            </button>
                                            <a href="{{ route('pdf-recibo', ['cursoID' => $curso->id, 'estudianteID' => $estudiante->id]) }}"
                                                target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                                </svg>

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $cursosInscritos->links() }}
                </div>
                <!-- Modal para decir que ya estas inscrito -->
                @if ($openInscrito)
                    <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
                        <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Ya estás inscrito a este curso</h3>
                            <button wire:click="closeInscrito"
                                class="px-4 py-2 bg-blue-500 text-white rounded-md w-24 text-xs">
                                Cerrar
                            </button>
                        </div>
                    </div>
                @endif
                <!-- Modal para decir que está lleno el curso -->
                @if ($openLleno)
                    <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
                        <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">El curso ha alcanzado el cupo máximo
                            </h3>
                            <button wire:click="closeLleno"
                                class="px-4 py-2 bg-blue-500 text-white rounded-md w-24 text-xs">
                                Cerrar
                            </button>
                        </div>
                    </div>
                @endif
                <!-- Modal para decir que haz dado de baja un curso -->
                @if ($openBaja)
                    <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
                        <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Curso dado de baja con éxito</h3>
                            <button wire:click="closeBaja"
                                class="px-4 py-2 bg-blue-500 text-white rounded-md w-24 text-xs">
                                Cerrar
                            </button>
                        </div>
                    </div>
                @endif

                <!-- Modal para decir que te haz inscrito con éxito -->
                @if ($openExito)
                    <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
                        <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Curso inscrito con éxito</h3>
                            <button wire:click="closeExito"
                                class="px-4 py-2 bg-blue-500 text-white rounded-md w-24 text-xs">
                                Cerrar
                            </button>
                        </div>
                    </div>
                @endif

                <!-- Modal para decir que te haz inscrito con éxito -->
                @if ($cursoSeleccionado)
                    <div class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-75">
                        <div class="bg-gray-900 p-6 rounded-lg w-1/2 text-white">
                            <h2 class="text-xl font-bold mb-4">{{ $cursoSeleccionado->nombre }}</h2>
                            <p><strong>Docente:</strong> {{ $cursoSeleccionado->docente->nombre ?? 'No asignado' }}</p>
                            <p><strong>Cupo máximo:</strong> {{ $cursoSeleccionado->cupo_max }}</p>
                            <p><strong>Cupos disponibles:</strong>
                                {{ $cursoSeleccionado->cupo_max - $cursoSeleccionado->estudiantes->count() }}</p>
                            <p><strong>Horario:</strong> {{ $cursoSeleccionado->horario }}</p>
                            <p><strong>Link:</strong> {{ $cursoSeleccionado->link }}</p>
                            <p><strong>Duración:</strong> {{ $cursoSeleccionado->duracion }}</p>
                            <p><strong>Fecha de inicio:</strong> {{ $cursoSeleccionado->fecha_inicio }}</p>
                            <p><strong>Fecha de Fin:</strong> {{ $cursoSeleccionado->fecha_fin }}</p>
                            <p><strong>Fecha de Pago:</strong> {{ $cursoSeleccionado->fecha_pago }}</p>
                            <p><strong>Descripción:</strong> {{ $cursoSeleccionado->descripcion }}</p>
                            <p><strong>Costo:</strong> ${{ $cursoSeleccionado->costo }}</p>
                            <button wire:click="closeInfo"
                                class="mt-4 bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700">
                                Cerrar
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>
