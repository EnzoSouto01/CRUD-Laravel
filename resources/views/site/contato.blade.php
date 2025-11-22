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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste - Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4; 
        }

        nav {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 900px;
            margin-top: 50px;
        }

        .hero {
            background-color: #fafafa; 
            padding: 50px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info p {
            font-size: 1.1rem;
            color: #d9534f; 
        }

        .form-control {
            border-radius: 5px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px; 
            margin: 0 auto; 
        }

        .btn-primary {
            background-color: #d9534f; 
            border-color: #d9534f;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #c9302c; 
            border-color: #ac2925;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #d9534f; 
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
        }

        .confirmation-message {
            margin-top: 30px;
            padding: 20px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.principal') }}">ETEC Zona Leste</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.principal') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.tecnico') }}">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="hero text-center">
            <h2 class="section-title">Entre em Contato</h2>
            <p>Se tiver alguma dúvida, entre em contato conosco pelos seguintes meios:</p>

            <!-- Contato Imaginário -->
            <div class="contact-info mb-5">
                <p><strong>Telefone:</strong> (11) 2045-4000 / 2045-4016</p>
                <p><strong>E-mail:</strong> e211acad@cps.sp.gov.br;</p>
                <p><strong>Endereço:</strong> Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo/SP - CEP: 03694-000</p>
            </div>

            <p class="mb-4">Ou preencha o formulário abaixo para nos enviar uma mensagem:</p>

            <!-- Formulário de Contato -->
            <form action="{{ route('site.contato') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

    <footer class="text-center bg-dark text-white py-3">
        <p>Etec da Zona Leste — Avenida Águia de Haia, 2.633 — (11) 2045-4000</p>
        <p>Desenvolvido por: Enzo de Paulo Souto 3º DS A</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>