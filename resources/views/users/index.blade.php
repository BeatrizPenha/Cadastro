<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <a href="{{ route('user.create')}}">Cadastrar</a><br>
    <h2>Listar Usuários</h2>

    @if (session('success'))
        <p style="color:#f086;">
            {{(session('success'))}}

        </p>
    @endif

    @forelse ($users as $users)
        ID: {{$user->id}}<br>
        Nome: {{$user->name}}<br>
        E-mail: {{$user->email}}<br>
        <a href="{{ route('user.show', ['user'=> $user->id])}}">Visualizar</a><br>
        <a href="{{ route('user.edit', ['user'=> $user->id])}}">Editar</a><br>
        <hr>


    @emppty

    @endforelse
</body>
</html>
