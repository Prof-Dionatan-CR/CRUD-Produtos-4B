<!-- NOME -->
        <label for="nome">Nome: </label>
        <input type="text" for="nome" name="nome" value="{{ old('nome', $produto->nome) }}" required>

         <!-- PRECO -->
        <label for="preco">Preco: </label>
        <input type="number" for="preco" name="preco" value="{{ old('preco', $produto->preco) }}" required>

        <!-- QUANTIDADE -->
        <label for="quantidade">Quantidade: </label>
        <input type="number" for="quantidade" name="quantidade"  value="{{ old('quantidade', $produto->quantidade) }}" required>

        <!-- categorias -->
        <label for="categoria_id">Categoria: </label>
        <select name="categoria_id" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" 
                    @selected($categoria->id == old('categoria_id', $produto->categoria_id))>
                    {{ $categoria->nome }}</option>
            @endforeach
        </select>
