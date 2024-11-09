<div>
    <section class="login_contenedor">
        <div class="login_contenedor-left background"
            style="background-image: url({{ asset('img/login-background.png') }})">
            <div class="left_contenedor center-flex">
                <h1>Educación Continúa</h1>
                <p>Universidad Autónoma de Querétaro</p>
            </div>
        </div>
        <div class="login_contenedor-right">

            <div class="right_contenedor center-flex">
                <img src="{{ asset('img/logo-black-fif-uaq.png') }}" alt="logo de fif y uaq">
                <h2>Iniciar Sesión</h2>
                <div class="login-option">
                    <a href="{{ route('estudiante-login') }}">Estudiante</a>
                    <a href="{{ route('docente-login') }}">Docente</a>
                    <a href="{{ route('administrativo-login') }}" class="activo">Administrador</a>
                </div>
                <form wire:submit='loginAdministrador'>
                    <div class="input_contenedor">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                            <path fill="#8a8a8a"
                                d="M12 5.9a2.1 2.1 0 1 1 0 4.2a2.1 2.1 0 0 1 0-4.2m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4" />
                        </svg>
                        <input type="text" id="name" name="name" wire:model='name' placeholder="Nombre">
                    </div>
                    <div class="input_contenedor">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                            <path fill="#8a8a8a"
                                d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2M9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9zm9 14H6V10h12zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2" />
                        </svg>
                        <input type="password" name="password" id="password" wire:model='password'
                            placeholder="Contraseña">
                    </div>
                    <button type="submit">Iniciar Sesión</button>
                    <p class="underline">Olvide mi NIP</p>
                    <a href="{{ route('inicio') }}">
                        <p class="underline">Volver al Inicio</p>
                    </a>
                </form>
            </div>
        </div>
    </section>
</div>
