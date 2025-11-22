<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro — Etec</title>

  <style>
    :root{
      --primary:#b91c1c;
      --text:#1e293b;
      --muted:#6b7280;
      --card:#ffffff;
      --bg:#f3f4f6;
    }

    body{
      margin:0;
      min-height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      font-family:Arial, Helvetica, sans-serif;
      background:var(--bg);
      padding:20px;
      color:var(--text);
    }

    .card{
      width:100%;
      max-width:420px;
      background:var(--card);
      padding:28px;
      border-radius:10px;
      border:1px solid #ddd;
    }

    h1{
      margin:0 0 4px;
      font-size:1.4rem;
      font-weight:700;
      color:var(--primary);
    }

    p.lead{
      margin:0 0 18px;
      font-size:0.95rem;
      color:var(--muted);
    }

    label{
      font-size:0.9rem;
      color:var(--muted);
      margin-bottom:4px;
      display:block;
    }

    input{
      width:100%;
      padding:10px;
      border-radius:6px;
      border:1px solid #cbd5e1;
      margin-bottom:14px;
      font-size:1rem;
    }

    .btn-primary{
      width:100%;
      background:var(--primary);
      color:white;
      padding:12px;
      border-radius:6px;
      border:0;
      font-weight:600;
      font-size:1rem;
      cursor:pointer;
      margin-top:6px;
    }

    .link{
      display:block;
      text-align:center;
      margin-top:14px;
      font-size:0.95rem;
      color:var(--primary);
      text-decoration:none;
    }

    .errors{
      background:#fee2e2;
      color:#7f1d1d;
      padding:10px;
      border-radius:6px;
      margin-bottom:14px;
      font-size:0.9rem;
      border:1px solid #fca5a5;
    }
  </style>
</head>

<body>
  <main class="card">

    <h1>Cadastro</h1>
    <p class="lead">Crie sua conta para acessar o sistema</p>

    @if ($errors->any())
      <div class="errors">
        @foreach ($errors->all() as $e)
          <div>{{ $e }}</div>
        @endforeach
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <label>Nome</label>
      <input type="text" name="name" required />

      <label>Email</label>
      <input type="email" name="email" required />

      <label>Senha</label>
      <input type="password" name="password" required />

      <button type="submit" class="btn-primary">Cadastrar</button>
      <a class="link" href="{{ route('login') }}">Já tenho conta</a>

    </form>

  </main>
</body>
</html>
