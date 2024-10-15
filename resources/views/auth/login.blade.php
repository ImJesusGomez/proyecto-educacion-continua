<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Iniciar Sesión</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
</head>
<body>
  <section class="login_contenedor" >
    <div class="login_contenedor-left background" style="background-image: url({{ asset('img/amparo-universidad-autonoma-queretaro.webp')}})">
      <div class="left_contenedor center-flex">
        <h1>Educación Continúa</h1>
        <p>Universidad Autónoma de Querétaro</p>
      </div>
    </div>
    <div class="login_contenedor-right">
      <div class="right_contenedor center-flex">
        <img src="{{ asset('img/logo_fif_uaq.png')}}" alt="logo de fif y uaq">
        <h2>Iniciar Sesión</h2>
        <form action="{{ route('logear')}}" method="POST">
          @csrf
          @method('post')
          <div class="input_contenedor">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="#8a8a8a" d="M12 5.9a2.1 2.1 0 1 1 0 4.2a2.1 2.1 0 0 1 0-4.2m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4"/></svg>
            <input type="text" id="expediente" name="expediente" placeholder="Expediente">
          </div>
          <div class="input_contenedor">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"><path fill="#8a8a8a" d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2M9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9zm9 14H6V10h12zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2"/></svg>
            <input type="password" name="nip" id="nip" placeholder="NIP">
          </div>
          <button>Iniciar Sesión</button>
          <p class="underline">Olvide mi NIP</p>
        </form>
      </div>
    </div>
  </section>
</body>
</html>