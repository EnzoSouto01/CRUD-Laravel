<style>
  .logo {
    padding-right: 1em;
  }

  .paragrafo {
    overflow-wrap: break-word;
  }
</style>

@php
    use App\Models\User;
    $usuarioLogado = session()->has('user_id') ? User::find(session('user_id')) : null;
@endphp

<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Início — Etec Zona Leste</title>

  <!-- Bootstrap CSS (igual ao primeiro código) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: Inter, system-ui, Arial;
      color: #fff;
    }

    /* NAVBAR ESTILO DO PRIMEIRO CÓDIGO */
    nav.navbar {
      background: #1c1c1c;
      padding: 12px 24px;
    }

    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
      color: orange !important;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .navbar-nav .nav-link {
      font-size: 1.1rem;
      color: #fff !important;
      transition: 0.3s;
    }

    .navbar-nav .nav-link:hover {
      color: orange !important;
      transform: scale(1.05);
    }

    /* HERO COM IMAGEM IGUAL AO PRIMEIRO */
    header.hero {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
      text-align: center;
      padding: 140px 20px;
    }

    header.hero h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    header.hero p {
      font-size: 1.4rem;
      margin-bottom: 25px;
    }

    .btn-warning-custom {
      background: #ffc107;
      padding: 12px 32px;
      font-size: 1.2rem;
      border-radius: 30px;
      transition: 0.3s;
      color: black;
    }

    .btn-warning-custom:hover {
      transform: scale(1.1);
      background: #ffda4d;
    }

    /* CARROSSEL SEMELHANTE AO GRANDE */
    .carousel img {
      width: 100%;
      height: 480px;
      object-fit: cover;
      border-radius: 10px;
    }

    .carousel-container {
      width: 100%;
      max-width: 1100px;
      margin: 40px auto;
    }

    footer {
      background: #1c1c1c;
      padding: 22px;
      color: white;
      margin-top: 50px;
      text-align: center;
    }
  </style>
</head>

<body>

<!-- NAVBAR REESTILIZADA -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
      <a class="navbar-brand" href="{{ route('site.principal') }}">
          <img src="{{ asset('build/assets/images/logo.png') }}" height="42">
          Etec Zona Leste
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="{{ route('site.principal') }}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('site.tecnico') }}">Cursos</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('site.contato') }}">Contato</a></li>

              @if($usuarioLogado)
                <li class="nav-item"><a class="nav-link" href="{{ route('perfil') }}">Olá, {{ $usuarioLogado->name }}</a></li>
              @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                <li class="nav-item"><a class="nav-link btn btn-warning text-dark px-3" href="{{ route('register') }}">Cadastrar</a></li>
              @endif
          </ul>
      </div>
  </div>
</nav>

<!-- HERO ESTILO DO PRIMEIRO CÓDIGO -->
<header class="hero">
  <h1>Bem-vindo à Etec Zona Leste</h1>
  <p>Educação de qualidade para seu futuro!</p>
  <a href="{{ route('site.tecnico') }}" class="btn-warning-custom">Conheça Nossos Cursos</a>
</header>

<!-- CARROSSEL AMPLIADO -->
<div id="carouselHome" class="carousel slide carousel-container" data-bs-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{ asset('build/assets/images/etec01.jpg') }}" alt="Foto 1">
      </div>
      <div class="carousel-item">
          <img src="{{ asset('build/assets/images/etec02.jpg') }}" alt="Foto 2">
      </div>
      <div class="carousel-item">
          <img src="{{ asset('build/assets/images/etec03.jpeg') }}" alt="Foto 3">
      </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
  </button>
</div>

<footer>
  <p>Etec da Zona Leste — Avenida Águia de Haia, 2.633 — (11) 2045-4000</p>
  <p>Desenvolvido por: Enzo de Paulo Souto 3º DS A</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
