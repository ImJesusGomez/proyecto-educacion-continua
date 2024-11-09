<div>
    AQUI PONER EL MENU DE ESTUDIANTE
    @if (session('estudiante'))
        <div>
            <h1>Bienvenido, {{ session('estudiante')->nombre }}</h1>
            <!-- Mostrar más datos del estudiante -->
        </div>
    @endif
</div>
