<style>
    :root{
        --primary:#d90429;      /* vermelho */
        --primary-dark:#b10420; /* vermelho escuro */
        --bg:#f5f5f5;
        --card:#ffffff;
        --text:#333;
        --border:#ddd;
    }

    body{
        margin:0;
        padding:0;
        background:var(--bg);
        font-family:Arial, sans-serif;
        display:flex;
        justify-content:center;
        align-items:center;
        min-height:100vh;
    }

    .container{
        width:100%;
        max-width:450px;
        background:var(--card);
        border-radius:10px;
        border:1px solid var(--border);
        padding:20px;
    }

    h1{
        margin:0 0 20px 0;
        font-size:1.3rem;
        color:var(--primary);
        text-align:center;
    }

    label{
        font-size:0.9rem;
        margin-bottom:4px;
        display:block;
    }

    input{
        width:100%;
        padding:10px;
        border-radius:6px;
        border:1px solid var(--border);
        font-size:1rem;
        margin-bottom:14px;
    }

    .actions{
        display:flex;
        justify-content:space-between;
        margin-top:10px;
    }

    .btn{
        padding:10px 16px;
        border-radius:6px;
        font-weight:600;
        cursor:pointer;
        font-size:0.9rem;
        border:none;
    }

    .btn-primary{
        background:var(--primary);
        color:white;
    }

    .btn-primary:hover{
        background:var(--primary-dark);
    }

    .btn-cancel{
        background:#eee;
        color:#444;
    }

    .btn-cancel:hover{
        background:#ddd;
    }

    @media (max-width:480px){
        .actions{
            flex-direction:column-reverse;
            gap:10px;
        }
        .btn{
            width:100%;
            text-align:center;
        }
    }
</style>

<div class="container">
    <h1>Editar Perfil</h1>

    <form method="POST" action="{{ route('perfil.editar') }}">
        @csrf

        <label for="name">Nome</label>
        <input id="name" name="name" type="text" value="{{ $user->name }}" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="{{ $user->email }}" required>

        <div class="actions">
            <a href="{{ route('perfil') }}" class="btn btn-cancel">Cancelar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
