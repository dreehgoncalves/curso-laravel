<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/form.css'); }}">
</head>

<body>
    @csrf
    <form action="{{ route('debug')}}" class="decor" method="post">
        @csrf
        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>
        <div class="form-inner">
            <h1>Novo artigo</h1>
            <label for="">Título</label>
            <input type="text" name="title">

            <label for="">Sub-Título</label>
            <input type="text" name="subtitle">

            <label for="">ID do Autor</label>
            <input type="number" name="author">

            <label for="">Conteúdo</label>
            <textarea name="content" cols="30" rows="10"></textarea>

            <button type="submit">Cadastrar Artigo</button>
        </div>
    </form>
</body>

</html>
