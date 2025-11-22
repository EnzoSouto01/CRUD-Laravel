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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste - Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('{{ asset("imgs/cursos.jpg") }}') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .course-card img {
            height: 200px;
            object-fit: cover;
        }

        footer {
            background: #1c1c1c;
            color: white;
            padding: 20px 0;
            font-size: 1rem;
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <!-- ✅ NAVBAR COM USUÁRIO LOGADO À DIREITA -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.principal') }}">ETEC Zona Leste</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.principal') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('site.tecnico') }}">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.contato') }}">Contato</a></li>
                </ul>

                @if($usuarioLogado)
                    <span class="navbar-text text-white">
                        Olá, {{ $usuarioLogado->name }}
                    </span>
                @endif
            </div>
        </div>
    </nav>

    <!-- ✅ HERO COMO NO EXEMPLO -->
    <header class="hero">
        <div class="container">
            <h1>Nossos Cursos</h1>
            <p>Conheça os cursos oferecidos pela ETEC Zona Leste</p>
        </div>
    </header>

    <!-- ✅ GRID DE CURSOS (3 POR LINHA) -->
    <div class="container mt-5">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card course-card">
                    <img src="{{ asset('build/assets/images/ds.jpg') }}" class="card-img-top" alt="Desenvolvimento de Sistemas">
                    <div class="card-body">
                        <h5 class="card-title">Desenvolvimento de Sistemas</h5>
                        <p class="card-text">Programação, testes e manutenção de software.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card course-card">
                    <img src="{{ asset('build/assets/images/adm.jpg') }}" class="card-img-top" alt="Administração">
                    <div class="card-body">
                        <h5 class="card-title">Administração</h5>
                        <p class="card-text">Planejamento, gestão e processos administrativos.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card course-card">
                    <img src="{{ asset('build/assets/images/log.jpg') }}" class="card-img-top" alt="Logística">
                    <div class="card-body">
                        <h5 class="card-title">Logística</h5>
                        <p class="card-text">Operações de transporte, armazenamento e distribuição.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ✅ FOOTER IGUAL AO EXEMPL0 -->
    <footer>
        <p>&copy; 2025 ETEC Zona Leste. Todos os direitos reservados.</p>
        <p>Desenvolvido por Enzo de Paulo Souto - 3° DS A</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
