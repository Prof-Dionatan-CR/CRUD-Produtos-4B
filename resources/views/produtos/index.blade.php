<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($produtos as $produto)
        <p>Nome: {{ $produto->nome }}</p>
        <p>Preço: R${{ $produto->preco }}</p>
        <p>Categoria: {{ $produto->categoria->nome }}</p>
        <hr>    
    @endforeach
</body>
</html>