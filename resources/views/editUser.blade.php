<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de usuário</title>
</head>

<body>

    <form action="{{ route('users.editUser', ['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <p class="text-center">
            <div class="">
                <label for="">Nome do usuário:</label>
                <input type="text" name="name" value="{{ $user->name }}">
            </div>
        </p>
        <p class="text-center">
            <div class="">
                <label for="">Email do usuário:</label>
                <input type="email" name="email" value="{{ $user->email }}">
            </div>
        </p>
        <p class="text-center">
            <div class="">
                <label for="">Senha do usuário:</label>
                <input type="password" name="password" >
            </div>
        </p>
        <p class="text-center">
            <div class="">
                <input type="submit" value="Editar usuário">
            </div>
        </p>
        <a href="/usuarios/{{$user->id}}">Voltar</a>

    </form>
</body>

</html>
