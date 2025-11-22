<style>
  .logo {
    padding-right: 1em;
  }

  .paragrafo {
    overflow-wrap: break-word;


  }
</style>
<!-- inicializa a variavel que carrega a sessão -->
@php
    use App\Models\User;
    $usuarioLogado = session()->has('user_id') ? User::find(session('user_id')) : null;
@endphp
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>M‑Tec — Etec</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    :root {
      --bg: #fbfbff;
      --accent: #ff7a59;
      --muted: #6b7280
    }

    body {
      margin: 0;
      font-family: Inter, system-ui, Arial;
      background: var(--bg);
      color: #0f1724
    }

    .wrap {
      max-width: 960px;
      margin: 36px auto;
      padding: 18px
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center
    }

    .list {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 16px
    }

    .item {
      background: #fff;
      padding: 14px;
      border-radius: 10px;
      border: 1px solid rgba(15, 23, 42, 0.04);
      display: flex;
      gap: 12px;
      align-items: center
    }

    .item img {
      width: 120px;
      height: 80px;
      object-fit: cover;
      border-radius: 8px
    }

    .btn {
      background: var(--accent);
      color: #fff;
      padding: 8px 12px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 700
    }

    @media (max-width: 700px) {
      .item {
        flex-direction: column;
        align-items: flex-start
      }
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100" style="background-color:rgba(216, 216, 216, 0.2);">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

 
    <nav class="navbar navbar-expand-lg py-3" style="background-color:rgb(255, 255, 255);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logo" src="{{ asset('img/logo.png') }}" alt="Bootstrap" width="200" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="{{ route('site.principal') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-5" href="#" data-bs-toggle="dropdown">
                            Cursos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('site.tecnico') }}">Cursos Técnicos</a></li>
                            <li><a class="dropdown-item" href="{{ route('site.mtec') }}">M-Tec</a></li>
                            <li><a class="dropdown-item" href="{{ route('site.ams') }}">AMS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-5" href="#" data-bs-toggle="dropdown">
                            Departamentos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('site.secretaria') }}">Secretaria Acadêmica</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ route('site.contato') }}">Contato</a>
                    </li>
                </ul>

                <!-- parte da navbar sobre o perfil -->
                <ul class="navbar-nav">

                    @if (!$usuarioLogado)
                        <!-- quando nao esta logado -->
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="{{ route('register') }}">Cadastrar</a>
                        </li>

                    @else
                        <!-- quando esta logado -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-5" href="#" data-bs-toggle="dropdown">
                                {{ $usuarioLogado->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('perfil') }}">Meu Perfil</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
  <nav class="navbarnavbar-expand-lg " style="background-color:rgb(128, 38, 38);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      </a>
    </div>
  </nav>
  <br><br>
  <div class="container text-start pt-5">
    <div class="row">
      <div class="col">
        <h4 class="fw-4" style="color:rgba(156, 10, 10, 0.59);">Ensino Médio integrado ao técnico (M-Tec)</h4>
        <h6 class="fw-4 fw-light">4 cursos encontrados</h6>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container text-start pt-2 pb-5">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('img/adm.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Novotec Administração</h5>
            <p class="card-text">Planejar, definir metas e objetivos para o crescimento e sustentabilidade da
              organização.</p>
            <a href="#" class="btn btn-primary">Ver Curso</a>
          </div>
        </div>
        <br><br>
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('img/ds.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Novotec Desenvolvimento de Sistemas</h5>
            <p class="card-text">Constrói, documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes
              de desenvolvimento e linguagens de programação.</p>
            <a href="#" class="btn btn-primary">Ver Curso</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('img/logistica.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Novotec Logistica</h5>
            <p class="card-text">Movimentação das cargas e produtos, equipamentos adequados e o armazenamento de
              diferentes tipos de produto. </p>
            <a href="#" class="btn btn-primary">Ver Curso</a>
          </div>
        </div>
        <br><br>
      </div>
      <div class="col">

        <div class="card" style="width: 18rem;">
          <img src="{{ asset('img/rh.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> Novotec Recursos Humanos</h5>
            <p class="card-text">Contratação, demissão e aposentadoria de funcionários e oferta de benefício.</p>
            <a href="#" class="btn btn-primary">Ver Curso</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br>
  <nav class="navbarnavbar-expand-lg mt-auto" style="background-color:rgb(128, 38, 38);">
    <br><br>
    <div class="container-fluid">
      <div class="container text-center">
        <div class="row">
          <div class="col" style="border-right: 2px solid white; padding-right: 20px; margin-right: 20px;">
            <h5 class="fw-4" style="color:rgb(255, 255, 255);">Etec da Zona Leste</h5>
            <h6 class="fw-light" style="color:rgb(255, 255, 255);">Avenida Águia de Haia, 2.633 - Cidade AE Carvalho -
              São Paulo/SP - CEP: 03694-000 </h6>
          </div>

          <div class="col" style="border-right: 2px solid white; padding-right: 20px; margin-right: 20px;">
            <h5 class="fw-4" style="color:rgb(255, 255, 255);">Telefone</h5>
            <h6 class="fw-light" style="color:rgb(255, 255, 255);">(11) 2045-4000 / 2045-4016</h6>
          </div>

          <div class="col">
            <h5 class="fw-4" style="color:rgb(255, 255, 255);">Horário de funcionamento:</h5>
            <h6 class="fw-light" style="color:rgb(255, 255, 255);">Seg. a Sex. das 09h às 21h</h6>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </nav>


  </div>


</body>

</html>