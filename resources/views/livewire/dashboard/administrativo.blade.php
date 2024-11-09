<div>
    AQUI VA EL MENU DEL ADMINISTRADOR
    @if (session('administrativo'))
        <div>
            <h1>Bienvenido, {{ session('administrativo')->name }}</h1>
            <!-- Mostrar más datos del administrativo -->
        </div>
    @endif
</div>
