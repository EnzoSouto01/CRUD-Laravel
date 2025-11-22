<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Meu Perfil</title>

  <style>
    body{
      margin:0;
      padding:0;
      font-family:Arial, sans-serif;
      background:#f4f4f4;
      display:flex;
      justify-content:center;
      align-items:center;
      min-height:100vh; 
    }


    .container{
      width:100%;
      max-width:600px;
      display:flex;
      flex-direction:column; 
      justify-content:center;
      align-items:center; 
      text-align:center; 
    }


    .header{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:20px;
    }

    .brand img{
      height:38px;
    }

    .card{
      background:#fff;
      padding:20px;
      border-radius:8px;
      border:1px solid #ddd;
      display:flex;
      gap:16px;
      align-items:center;
    }

    .avatar{
      width:70px;
      height:70px;
      border-radius:50%;
      background:#d90429;
      color:white;
      display:flex;
      justify-content:center;
      align-items:center;
      font-size:28px;
      font-weight:bold;
    }

    h2{
      margin:0;
      font-size:1.3rem;
    }

    .meta, .small{
      color:#555;
      font-size:0.9rem;
      margin-top:4px;
    }

    .actions{
      margin-top:12px;
      display:flex;
      gap:8px;
      flex-wrap:wrap;
    }

    .btn{
      padding:8px 12px;
      border-radius:6px;
      font-size:0.9rem;
      font-weight:600;
      text-decoration:none;
      display:inline-block;
    }

    .btn-edit{
      background:#d90429;
      color:white;
    }

    .btn-ghost{
      border:1px solid #ccc;
      color:#333;
      background:white;
    }

    .btn-danger{
      background:#fbeaea;
      color:#a90303;
      border:1px solid #e0b3b3;
    }

    @media(max-width:600px){
      .card{
        flex-direction:column;
        text-align:center;
      }
    }
  </style>
</head>

<body>
  <div class="container">


    <div class="card">
      <div class="avatar">{{ strtoupper(substr($user->name,0,1)) }}</div>

      <div>
        <h2>{{ $user->name }}</h2>
        <div class="meta">{{ $user->email }}</div>
        <div class="small">ID: <strong>{{ $user->id }}</strong></div>

        <div class="actions">
          <a href="{{ route('perfil.editar') }}" class="btn btn-edit">Editar Perfil</a>
          <a href="#" class="btn btn-danger" onclick="confirmDelete(event)">Excluir Conta</a>
          <a href="{{ route('logout') }}" class="btn btn-ghost">Sair</a>
        </div>
      </div>
    </div>

  </div>

  <script>
    function confirmDelete(e){
      e.preventDefault();
      if(confirm('Tem certeza que deseja excluir sua conta?')){
        window.location = "{{ route('perfil.excluir') }}";
      }
    }
  </script>

</body>
</html>
