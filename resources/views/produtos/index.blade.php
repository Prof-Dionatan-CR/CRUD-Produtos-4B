<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produtos
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <a href="{{ route('produtos.create') }}"><x-primary-button>Criar Novo Produto</x-primary-button></a>

                        @if (session('success'))
                            <p style="color: green">{{ session('success') }}</p>
                        @endif

                        @foreach ($produtos as $produto)
                            <p>Nome: {{ $produto->nome }}</p>
                            <p>Preço: R${{ $produto->preco }}</p>
                            <p>Categoria: {{ $produto->categoria->nome }}</p> 
                            <a href="{{ route('produtos.edit', $produto) }}"><x-secondary-button>Editar</x-secondary-button></a> 
                            <form action="{{ route('produtos.destroy', $produto) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <x-danger-button type="submit">Deletar</x-danger-button>
                            </form>
                            <hr>    
                        @endforeach
                
                </div>
            </div>
        </div>
    </div>


</x-app-layout>