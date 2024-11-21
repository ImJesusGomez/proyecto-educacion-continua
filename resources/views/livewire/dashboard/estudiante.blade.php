<div class="max-w-6xl mx-auto p-6">
    <!-- Mensaje de Bienvenida -->
    <h1 class="text-3xl font-bold mb-4 text-black">
        Bienvenido, {{ $estudiante->nombre ?? 'Estudiante' }}
    </h1>


<div class="max-w-6xl mx-auto p-6">
    <!-- Campo de búsqueda -->
    <div class="flex justify-between items-center mb-4">
        <button 
            wire:click="logout" 
            class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 shadow">
            Cerrar Sesión
        </button>
       
        <input 
            type="text" 
            placeholder="Buscar cursos..." 
            wire:model.live="searchPro" 
            class="p-2 border rounded w-1/3 focus:outline-none focus:ring focus:border-blue-300"
        />
    </div>

    <!-- Tabla de Cursos Disponibles -->
    <h1 class="text-2xl font-bold mb-4 text-black">Cursos Disponibles</h1>
    <table class="table-auto w-full bg-gray-800 text-white shadow-lg rounded border border-gray-700">
        <thead class="bg-gray-900 text-gray-300">
            <tr>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Docente</th>
                <th class="px-4 py-2">Cupo Máximo</th>
                <th class="px-4 py-2">Fecha Inicio</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr class="border-t border-gray-700">
                    <td class="px-4 py-2">{{ $curso->nombre }}</td>
                    <td class="px-4 py-2">{{ $curso->docente->nombre ?? 'Docente no asignado' }}</td>
                    <td class="px-4 py-2">{{ $curso->cupo_max }}</td>
                    <td class="px-4 py-2">{{ $curso->fecha_inicio }}</td>
                    <td class="px-4 py-2">
                        <button wire:click="inscribir({{ $curso->id }})" 
                                class="bg-green-600 text-white px-4 py-1 rounded hover:bg-green-700">
                            Inscribirme
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   

    <!-- Tabla de Mis Cursos -->
    <h1 class="text-2xl font-bold mt-8 mb-4 text-black">Mis Cursos</h1>
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
                        <button wire:click="darDeBaja({{ $curso->id }})" 
                                class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700">
                            Dar de baja
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>





{{--<div>
    AQUI PONER EL MENU DE ESTUDIANTE
    @if (Auth::guard('estudiantes')->check())
        <div>
            <h1>Bienvenido, {{ $estudiante->nombre }}</h1>
            <div>
                <h1 class="text-2xl font-bold">Cursos Disponibles</h1>
            
                <input type="text" wire:model="searchPro" placeholder="Buscar cursos..." class="p-2 border rounded mb-4">
                
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Docente</th>
                            <th>Cupo Máximo</th>
                            <th>Fecha Inicio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                            <tr>
                                <td>{{ $curso->nombre }}</td>
                                <td>{{ $curso->docente ? $curso->docente->nombre : 'Docente no asignado' }}</td>
                                <td>{{ $curso->cupo_max }}</td>
                                <td>{{ $curso->fecha_inicio }}</td>
                                <td>
                                    <button wire:click="inscribir({{ $curso->id }})" class="bg-green-500 text-white px-4 py-1 rounded">
                                        Inscribirme
                                    </button>
                                </td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
                <h1 class="text-2xl font-bold mt-8">Mis Cursos</h1>
            
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Docente</th>
                            <th>Fecha Inicio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursosInscritos as $curso)
                            <tr>
                                <td>{{ $curso->nombre }}</td>
                                <td>{{ $curso->docente ? $curso->docente->nombre : 'Docente no asignado' }}</td>
                                <td>{{ $curso->fecha_inicio }}</td>
                                <td>
                                    <button wire:click="darDeBaja({{ $curso->id }})" class="bg-red-500 text-white px-4 py-1 rounded">
                                        Dar de baja
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            

            
        </div>
    @endif
</div>
--}}