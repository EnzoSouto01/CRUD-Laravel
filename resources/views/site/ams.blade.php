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
  <title>AMS — Etec</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    :root {
      --bg: #fff;
      --accent: #6a9bff;
      --muted: #6b7280
    }

    body {
      margin: 0;
      font-family: Inter, system-ui, Arial;
      background: var(--bg);
      color: #0f1724
    }

    .wrap {
      max-width: 900px;
      margin: 36px auto;
      padding: 18px
    }

    h2 {
      margin: 0
    }

    .card {
      background: linear-gradient(180deg, #fff, #f7fbff);
      padding: 14px;
      border-radius: 10px;
      border: 1px solid rgba(0, 0, 0, 0.04);
      display: flex;
      gap: 12px;
      align-items: center
    }

    .card img {
      width: 160px;
      height: 100px;
      object-fit: cover;
      border-radius: 8px
    }

    .meta {
      color: var(--muted)
    }

    .btn {
      background: var(--accent);
      color: #fff;
      padding: 8px 12px;
      border-radius: 8px;
      text-decoration: none
    }
  </style>
</head>

<body>
  <div class="wrap">
    <header style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
      <div>
        <h2>Articulação AMS</h2>
        <div class="meta">Ensino médio integrado ao técnico e oportunidades de sequência superior</div>
      </div>
      <div>@if($usuarioLogado)<span class="meta">Olá, {{ $usuarioLogado->name }}</span>@endif</div>
    </header>

    <div class="card">
      <img src="{{ asset('img/ams.jpg') }}" alt="AMS">
      <div>
        <h3 style="margin:0">Novotec Desenvolvimento de Sistemas AMS (Tarde)</h3>
        <p class="meta" style="margin-top:6px">Preparação para cursos superiores tecnológicos e mercado de trabalho.
        </p>
        <div style="margin-top:10px"><a class="btn" href="#">Ver Detalhes</a></div>
      </div>
    </div>

    <footer style="margin-top:28px;color:var(--muted)">Contato: (11) 2045-4000 — secretaria</footer>
  </div>
</body>

</html>