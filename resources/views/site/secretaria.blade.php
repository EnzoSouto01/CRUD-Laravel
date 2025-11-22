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
    $usuarioLogado = null;

    if (session()->has('user_id')) {
        $usuarioLogado = User::find(session('user_id'));
    }
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

    <br><br>
    <div class="container text-start pt-5">
        <div class="row">
            <div class="col">
                <h4 class="fw-4" style="color:rgba(156, 10, 10, 0.59);">Secretaria Acadêmica</h4>
                <hr class="border-3 opacity-100" style="background-color:rgb(0, 0, 0);">
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container text-start pt-2 pb-5">
        <div class="row">
            <div class="col">
                <h5 class="fw-4">Horários de Atendimentos</h5>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="background-color:rgb(235, 235, 235);">Segunda-Feira</th>
                            <th scope="col" style="background-color:rgb(235, 235, 235);">Quarta-Feira</th>
                            <th scope="col" style="background-color:rgb(235, 235, 235);">Sexta-Feira</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-light">08h00min. às 09h30min.</td>
                            <td class="fw-light">14h30min. às 15h30min.</td>
                            <td class="fw-light">19h30min. às 20h30min.</td>
                        </tr>
                        <tr>
                            <td class="fw-light">08h00min. às 09h30min.</td>
                            <td class="fw-light">14h30min. às 15h30min.</td>
                            <td class="fw-light">19h30min. às 20h30min.</td>
                        </tr>
                        <tr>
                            <td class="fw-light">08h00min. às 09h30min.</td>
                            <td class="fw-light">14h30min. às 15h30min.</td>
                            <td class="fw-light">19h30min. às 20h30min.</td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <h5 class="fw-4">Equipe</h5>
                <br>
                <ul class="list-group ">
                    <li class="list-group-item">Diretor de Serviços Acadêmicos – Ênio Ramos Araújo </li>
                    <li class="list-group-item">Agente Técnico e Administrativo – Diva Neide Bortol</li>
                </ul>
                <br><br>
                <h5 class="fw-4">Contato</h5>
                <br>
                <ul class="list-group ">
                    <li class="list-group-item"><strong>E-mail:</strong> <a
                            href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=e211acad@cps.sp.gov.br&su=Assunto&body=Mensagem">e211acad@cps.sp.gov.br
                        </a></li>
                    <li class="list-group-item"><strong>Telefones:</strong> (11) 2045-4025 | (11) 2045-4026 | (11)
                        2045-4009</li>
                </ul>
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
                        <h6 class="fw-light" style="color:rgb(255, 255, 255);">Avenida Águia de Haia, 2.633 - Cidade AE
                            Carvalho -
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