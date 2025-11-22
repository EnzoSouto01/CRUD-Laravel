<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Arquivo: welcome.blade.php
       Propósito: página inicial pública do projeto -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Laravel — Home</title>
  <style>
    :root{--bg:#0f1724;--card:#0b1220;--accent:#7c5cff;--muted:#98a2b3;--glass:rgba(255,255,255,0.04)}
    *{box-sizing:border-box}
    body{margin:0;min-height:100vh;font-family:Inter,system-ui,Arial,sans-serif;background:linear-gradient(180deg,var(--bg),#071026 120%);color:#e6eef6;display:flex;align-items:center;justify-content:center;padding:28px}
    .wrap{width:100%;max-width:1100px;display:flex;gap:28px;align-items:stretch}
    .panel{border-radius:14px;overflow:hidden;box-shadow:0 18px 50px rgba(2,6,23,0.6);border:1px solid rgba(255,255,255,0.03);background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.08))}
    .left{flex:1;padding:40px;display:flex;flex-direction:column;gap:22px;background:linear-gradient(90deg, rgba(124,92,255,0.06), transparent 45%)}
    .right{width:340px;padding:34px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:14px;background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(0,0,0,0.06))}
    h1{margin:0;font-size:1.6rem;letter-spacing:-0.2px}
    p.lead{margin:0;color:var(--muted);line-height:1.5}
    .cta-row{display:flex;gap:12px;margin-top:12px;flex-wrap:wrap}
    .btn{display:inline-flex;align-items:center;gap:10px;padding:10px 14px;border-radius:10px;text-decoration:none;cursor:pointer;font-weight:600}
    .btn-primary{background:linear-gradient(90deg,var(--accent),#4aa6ff);box-shadow:0 8px 30px rgba(124,92,255,0.12);color:#fff;padding:10px 16px}
    .btn-soft{background:var(--glass);color:#e6eef6;border-radius:10px;padding:8px 12px}
    .links{display:flex;flex-direction:column;gap:10px;margin-top:18px}
    .link-card{background:rgba(255,255,255,0.02);padding:12px;border-radius:10px;color:var(--muted);text-decoration:none;display:flex;justify-content:space-between;align-items:center}
    .logo-box{width:120px;height:120px;border-radius:12px;background:linear-gradient(135deg,#7c5cff,#4aa6ff);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:2.2rem;color:#fff;box-shadow:0 12px 40px rgba(74,166,255,0.08)}
    .nav{display:flex;gap:12px;align-items:center;justify-content:flex-end}
    .muted{color:var(--muted);font-size:0.95rem}
    @media (max-width:900px){.wrap{flex-direction:column}.right{width:100%}}
  </style>
</head>
<body>
  <!-- Conteúdo principal da home -->
  <div class="wrap">
    <div class="panel left">
      <div style="display:flex;justify-content:space-between;align-items:center;">
        <div>
          <h1>Laravel — starter</h1>
          <p class="lead">Um layout limpo e moderno pra começar seu CRUD. Rápido para customizar e responsivo por padrão.</p>
        </div>

        <div class="nav">
          <!-- Navegação condicional (login/register) -->
          @if (Route::has('login'))
            @auth
              <a href="{{ url('/dashboard') }}" class="btn btn-soft">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="btn btn-soft">Entrar</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-primary">Cadastrar</a>
              @endif
            @endauth
          @endif
        </div>
      </div>

      <!-- Links úteis -->
      <div class="links">
        <a class="link-card" href="https://laravel.com/docs" target="_blank">
          <span>Documentação</span><span class="muted">docs</span>
        </a>
        <a class="link-card" href="https://laracasts.com" target="_blank">
          <span>Tutoriais</span><span class="muted">laracasts</span>
        </a>
        <a class="link-card" href="{{ route('site.principal') }}">
          <span>Ir para o site</span><span class="muted">home</span>
        </a>
      </div>
    </div>

    <!-- Painel lateral com logomarca/identidade -->
    <aside class="panel right">
      <div class="logo-box">L</div>
      <div style="text-align:center">
        <div style="font-weight:700;font-size:1.05rem">Laravel App</div>
        <div class="muted" style="margin-top:6px">Pronto para desenvolvimento</div>
      </div>
    </aside>
  </div>
</body>
</html>