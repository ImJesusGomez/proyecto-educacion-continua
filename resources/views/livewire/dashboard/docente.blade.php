<div>
    <body class="bg-blue-100">
        AQUI PONER EL MENU DE DOCENTE
        {{-- {{ session('docente')->nombre }} --}}
        {{-- @if (session('docente'))
        
           
        @endif --}}
        <div class="flex h-screen">
            <!-- Menú Lateral -->
            <div class="w-1/4 bg-gray-100 text-gray-800 flex flex-col items-center p-6 space-y-4">
                <!-- Foto de perfil y nombre -->
                <div class="text-center">
                    <img src="https://via.placeholder.com/80" alt="Foto de perfil" class="rounded-full w-20 h-20 mx-auto mb-2">
                    @if(session('docente') )
                        <p class="font-bold">{{ session('docente')->nombre }}</p>
                    @endif
                    <p class="text-sm text-gray-500">Docente</p>
                </div>
                <!-- Opciones del menú lateral -->
                <nav class="flex flex-col w-full space-y-2">
                    <button class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" wire:click="abrirperfil">Perfil</button>
                    <button class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" wire:click="abrirajustes">Ajustes</button>
                    <button class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" wire:click="abrirayuda">Ayuda</button>
                    <button class="w-full py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Cerrar Sesión</button>
                </nav>
            </div>
            <!-- Contenido Principal -->
            <div class="w-3/4 p-6">
                <!-- Título principal -->
                <header class="mb-6">
                    <h1 class="text-3xl font-bold text-center">Razonamiento y Tecnología para Innovar y Trascender</h1>
                </header>
                <!-- Botones de acceso rápido -->
                <div class="flex justify-around mb-6">
                    
                    <x-button class="mt-2 bg-green-400 border-green-950 text-green-950 hover:bg-green-950 hover:text-green-400 hover:border-green-400" wire:click="abrirF">Agregar Curso</x-button>
                    
                </div>
                <!-- Área de contenido principal -->
                <div class="bg-white p-6 rounded-md shadow-md">
                    <div class="container mx-auto p-6">
                        <h1 class="text-3xl font-bold mb-4">Mis Cursos</h1>
                        @if(isset($cursos) && $cursos->count() > 0)
                        <ul class="list-disc pl-6">
                            @foreach($cursos as $curso)
                            <li class="mb-2">{{ $curso->nombre }}</li>
                            @endforeach
                            </ul> 
                            @else 
                            <p>No tienes cursos asignados.</p>
                            @endif 
                    </div>
                    
                </div>
            </div>
        </div>
        
        @if($mCreate)
        <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
            <div class="py-12 max-w-md w-full">
            <div class="bg-white shadow rounded-lg p-6">
                <div class="max-w-sm mx-auto"><span class="flex justify-center" style="color: black">Crear Nuevo Curso</span></div>
                <div class="mb-4 ml-4 flex justify-center">
                    <form class="max-w-sm mx-auto" wire:submit='enviar'>
                    <x-label style="color: black" for="nombre" value='Nombre del curso'/>
                    <x-input for="nombre" wire:model='nombre'/>
                    <x-label style="color: black" for="cupo_max" value='Cupo maximo'/>
                    <x-input for="cupo_max" wire:model='cupo_max'/>
                    <x-label style="color: black" for="horario" value='Horario'/>
                    <x-input for="horario" wire:model='horario'/>
                    <x-label style="color: black" for="link" value='Link'/>
                    <x-input for="link" wire:model='link'/>
                    <x-label style="color: black" for="duracion" value='Duracion'/>
                    <x-input for="duracion" wire:model='duracion'/>
                    <x-label style="color: black" for="fecha_inicio" value='Fecha de inicio'/>
                    <x-input type="date" for="fecha_inicio" wire:model='fecha_inicio'/>
                    <x-label style="color: black" for="fecha_fin" value='Fecha de finalizacion'/>
                    <x-input type="date" for="fecha_fin" wire:model='fecha_fin'/>
                    <x-label style="color: black" for="descripcion" value='Descripción del curso'/>
                    <x-input for="descripcion" wire:model='descripcion'/>
                    <br>
                    <div class="flex justify-between">
                        <x-button class="mt-2 bg-red-500 border-red-500 hover:bg-red-800 hover:text-white" wire:click="set('mCreate',false)">Cancelar</x-mi-boton>
                        <x-button class=" mt-2 bg-transparent text-black border-blue-700 hover:bg-blue-700 hover:border-cyan-300 hover:text-white" wire:click.prevent='enviar({{$curso->id}})'>Guardar</x-mi-boton>
                    </div>
                    </form> 
                </div>
                
            </div>
            </div>
        </div>
        @endif

        @if($abrirPerfil)
            
        
            <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                <div class="py-12 max-w-md w-full">
                <div class="bg-white shadow rounded-lg p-6">
                    <div class="mb-4 ml-4 flex justify-center">
                        <div class="card" style="width: 18rem; margin: 20px auto; border: 1px solid #ccc; border-radius: 10px;">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Información del Docente</h5>
                                <h1>Nombre: {{$nombreD}}</h1>
                                <h1>Nombre: {{$expediente}}</h1>
                                <h1>Nombre: {{$correo}}</h1>
                                <h1>Nombre: {{$telefono}}</h1>
                                <x-button class="mt-2 bg-red-500 border-red-500 hover:bg-red-800 hover:text-white" wire:click="set('abrirPerfil',false)">Cancelar</x-mi-boton>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                </div>
            </div>
        @endif

        @if($abrirAjustes)
            <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                <div class="py-12 max-w-md w-full">
                    <div class="bg-white shadow rounded-lg p-6">
                        <div class="card" style="width: 20rem; margin: 20px auto; border: 1px solid #ccc; border-radius: 10px;">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Ajustes del Docente</h5>
                                <p class="card-text">Aquí puedes gestionar la configuración de este docente.</p>
                        
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
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
                                    <li class="list-group-item">
                                        <strong>Eliminar Docente:</strong>
                                        <button class="btn btn-sm btn-danger float-end">Eliminar</button>
                                    </li>
                                </ul>
                                <x-button class="mt-2 bg-red-500 border-red-500 hover:bg-red-800 hover:text-white" wire:click="set('abrirAjustes',false)">Cancelar</x-mi-boton>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        @endif

        @if($abrirAyuda)
            <div class="bg-gray-800 bg-opacity-25 fixed inset-0 backdrop-blur-sm flex items-center justify-center">
                <div class="py-12 max-w-md w-full">
                    <div class="bg-white shadow rounded-lg p-6">
                        <div class="card" style="width: 18rem; margin: 20px auto; border: 1px solid #ccc; border-radius: 10px;">
                            <div class="card-body text-center">
                                <h5 class="card-title font-weight-bold">¿Necesitas Ayuda?</h5>
                                <p class="card-text">Si tienes dudas o necesitas asistencia, haz clic en el botón de abajo para obtener ayuda.</p>
                                <button class="btn btn-info" onclick="mostrarAyuda()">Ver Ayuda</button>
                                <x-button class="mt-2 bg-red-500 border-red-500 hover:bg-red-800 hover:text-white" wire:click="set('abrirAyuda',false)">Cancelar</x-mi-boton>
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
</div>
