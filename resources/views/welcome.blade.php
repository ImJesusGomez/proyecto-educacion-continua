<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    {{-- MENU DE NAVEGACION --}}
    <nav class="nav contenedor">
        <div class="nav_item">
            <a href="">
                <p class="nav_item-title">Educación Continúa</p>
            </a>
        </div class="nav_item">
        <div class="nav_item">
            <img src="{{ asset('img/logo-fif-uaq.png') }}" alt="" class="nav_item-logo">
        </div>
        <div class="nav_item">
            <ul class="nav_item-navigation">
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('estudiante-login') }}">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        {{-- BANNER HERO --}}
        <section class="hero">
            <img src="{{ asset('img/hero-banner.png') }}" alt="">
            <div>
                <p>¡¡Bienvenido!!</p>
            </div>
        </section>
        {{-- CONTENIDO INFOR --}}
        <section class="content">
            <div class="content_info">
                <h1>Bienvenidos a Educación Continua de la Facultad de Informática</h1>
                <p>Explora nuestros cursos y talleres diseñados para impulsar tus habilidades en tecnología, innovación
                    y
                    ciencias de la computación. En la Facultad de Informática de la Universidad Autónoma de Querétaro,
                    ofrecemos programas actualizados y prácticos para estudiantes, profesionales y entusiastas de la
                    tecnología que buscan mantenerse a la vanguardia en el mundo digital.</p>
                <h2>¿Qué encontrarás en Educación Continua?</h2>
                <ul>
                    <li>
                        Cursos especializados en programación, ciberseguridad, análisis de datos, inteligencia
                        artificial
                        y más.
                    </li>
                    <li>
                        Talleres prácticos y proyectos que refuerzan el aprendizaje con ejemplos reales del sector.
                    </li>
                    <li>
                        Instructores expertos y recursos de calidad, con el respaldo de una institución líder en
                        educación.
                    </li>
                </ul>
            </div>
            <div class="content_img">
                <img src="{{ asset('img/img-1.png') }}" alt="">
            </div>
        </section>
        {{-- SECCION FAQ --}}
        <section class="faq">
            <div class="faq_title c">
                <h2>FAQ</h2>
            </div>
            <div class="c">
                <input type="checkbox" id="faq-1">
                <h3><label for="faq-1">¿Donde está ubicada la Facultad?</label></h3>
                <div class="p">
                    <p>Av. de las Ciencias S/N Delegación Santa Rosa jauregui. Queretaro, Qro</p>
                </div>
            </div>
            <div class="c">
                <input type="checkbox" id="faq-2">
                <h3><label for="faq-2">¿A dónde me dirijo para obtener soporte técnico?</label></h3>
                <div class="p">
                    <p>¿Necesitas ayuda adicional con la plataforma o los cursos? Puedes
                        comunicarte con nosotros a través de soporte.virtualfif@uaq.mx</p>
                </div>
            </div>
            <div class="c">
                <input type="checkbox" id="faq-3">
                <h3><label for="faq-3">¿En qué fechas se publican las nuevas convocatorias?</label></h3>
                <div class="p">
                    <p>Primer Convocatoria: <br>Segunda Convocatoria:</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <nav class="nav contenedor">
            <div class="nav_item">
                <a href="">
                    <p class="nav_item-title">Educación Continúa</p>
                </a>
            </div class="nav_item">
            <div class="nav_item">
                <img src="{{ asset('img/logo-fif-uaq.png') }}" alt="" class="nav_item-logo">
            </div>
            <div class="nav_item">
                <ul class="nav_item-navigation">
                    <li>
                        <a href="">Inicio</a>
                    </li>
                    <li>
                        <a href="">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
            <div class="nav_copy">
                <p>Todos los derechos reservados. Facultad de Informática, UAQ</p>
            </div>
        </nav>
    </footer>
</body>

</html>
