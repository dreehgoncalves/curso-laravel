<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuário</title>
</head>

<body>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <p class="text-center">
        <div class="">
            <label for="">Nome do usuário:</label>
            <input type="text" name="name">
        </div>
        </p>
        <p class="text-center">
        <div class="">
            <label for="">Email do usuário:</label>
            <input type="email" name="email">
        </div>
        </p>
        <p class="text-center">
        <div class="">
            <label for="">Senha do usuário:</label>
            <input type="password" name="password">
        </div>
        </p>
        <p class="text-center">
        <div class="">
            <input type="submit" value="Cadastrar usuário">
            <a href="{{ route('user.index') }}">Voltar</a>

        </div>
        </p>

    </form>
</body>

</html>
