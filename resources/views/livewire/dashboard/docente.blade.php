<div>
    AQUI PONER EL MENU DE DOCENTE

    @if (session('docente'))
        <div>
            <h1>Bienvenido, {{ session('docente')->nombre }}</h1>
            <!-- Mostrar más datos del docente -->
        </div>
    @endif
</div>
