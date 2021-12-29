<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do usuário</title>
</head>

<body>
    <div>
        <h1>{{ $user->name }}</h1>

        <p>{{ $user->email }}</p>

        <p>{{ date('d/m/y H:i', strtotime($user->created_at)) }}</p>
    </div>
    <div>
        <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar Usuário</a>
        <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="user" value="{{ $user->id }}">
            <input type="submit" value="Remover">
        </form>

        <a href="{{ route('user.index') }}">Voltar</a>
    </div>
</body>

</html>
