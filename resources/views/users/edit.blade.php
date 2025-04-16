<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <a href="{{ route('user.create')}}">Cadastrar</a><br>
    <a href="{{ route('user.show'['user'=> $user->id])}})}}">Visualizar</a><br>
    <h2>Editar Usuários</h2>

    <form action="{{ route('user-update' ['user'=> $user->id] }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome: </label>
        <input type="text" name="name" required placeholder="Nome Completo" value="{{ old('name') }}"><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" required placeholder="Digite o email" value="{{ old('name') }}"><br><br>

        <label for="password">Senha: </label>
        <input type="password" name="password" required placeholder="Senha com no mín 6 digitos" value="{{ old('name') }}"><br><br>




        <label for="opcao">Selecione o setor: </label>
        <select name="setor" id="setor">
            <option value="setor1">Tecnologia</option>
            <option value="setor2">Administrativo</option>
            <option value="setor3">Projeto</option>
        </select><br><br>

        <label for="opcao">Selecione a cidade: </label>
        <select name="cidade" id="cidade" value="{{ old('name') }}>
            <option value="capital1">Aracaju</option>
            <option value="capital2">Belém</option>
            <option value="capital3">Belo Horizonte</option>
            <option value="capital4">Boa Vista</option>
            <option value="capital5">Brasília</option>
            <option value="capital6">Campo Grande</option>
            <option value="capital7">Cuiabá</option>
            <option value="capital8">Curitiba</option>
            <option value="capital9">Florianópolis</option>
            <option value="capital10">Fortaleza</option>
            <option value="capital11">Goiânia</option>
            <option value="capital12">João Pessoa</option>
            <option value="capital13">Macapá</option>
            <option value="capital14">Maceió</option>
            <option value="capital15">Manaus</option>
            <option value="capital16">Natal</option>
            <option value="capital17">Palmas</option>
            <option value="capital18">Porto Alegre</option>
            <option value="capital19">Porto Velho</option>
            <option value="capital20">Recife</option>
            <option value="capital21">Rio Branco</option>
            <option value="capital22">Rio de Janeiro</option>
            <option value="capital23">Salvador</option>
            <option value="capital24">São Luís</option>
            <option value="capital25">São Paulo</option>
            <option value="capital26">Teresina</option>
            <option value="capital27">Vitória</option>
        </select><br><br>

        <label for="data">Data do check-in: </label>
        <input type="date" id="data" name="data" required ><br><br>
        <label for="data">Horário: </label>
        <input type="time" id="hora" name="hora" required><br><br>

        <button type="submit">Salvar</button>



    </form>
</body>
</html>