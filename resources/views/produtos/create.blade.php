<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Produto</title>
</head>
<body>
    <form action=" {{ route('produtos.store') }}" method="POST"> 
        @csrf

        <!-- NOME -->
        <label for="nome">Nome: </label>
        <input type="text" for="nome" name="nome" required>

         <!-- PRECO -->
        <label for="preco">Preco: </label>
        <input type="number" for="preco" name="preco" required>

        <!-- QUANTIDADE -->
        <label for="quantidade">Quantidade: </label>
        <input type="number" for="quantidade" name="quantidade" required>

        <!-- categorias -->
        <label for="categoria_id">Categoria: </label>
        <select name="categoria_id" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>

        <button type="submit">Criar Produto</button>

    </form>
</body>
</html>