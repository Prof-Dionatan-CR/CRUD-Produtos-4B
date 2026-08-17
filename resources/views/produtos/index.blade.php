<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos</title>

</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-7xl mx-auto px-4 py-10 sm:px-6 lg:px-8">

        {{-- Cabeçalho --}}
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mb-8">

            <div>
                <h1 class="text-3xl font-bold text-gray-900">
                    Produtos
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Gerencie os produtos cadastrados no sistema.
                </p>
            </div>

            <a
                href="{{ route('produtos.create') }}"
                class="inline-flex items-center justify-center gap-2 rounded-lg bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15"
                    />
                </svg>

                Novo Produto
            </a>
        </div>

        {{-- Lista de produtos --}}
        @if ($produtos->count())

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($produtos as $produto)

                    <div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-200 transition duration-200 hover:-translate-y-1 hover:shadow-lg">

                        <div class="p-6">

                            {{-- Categoria --}}
                            <div class="mb-4">
                                <span class="inline-flex items-center rounded-full bg-indigo-50 px-3 py-1 text-xs font-medium text-indigo-700">
                                    {{ $produto->categoria->nome }}
                                </span>
                            </div>

                            {{-- Nome --}}
                            <h2 class="text-xl font-bold text-gray-900">
                                {{ $produto->nome }}
                            </h2>

                            {{-- Preço --}}
                            <div class="mt-4 flex items-baseline gap-1">
                                <span class="text-sm font-medium text-gray-500">
                                    R$
                                </span>

                                <span class="text-2xl font-bold text-emerald-600">
                                    {{ number_format($produto->preco, 2, ',', '.') }}
                                </span>
                            </div>

                        </div>

                        {{-- Rodapé do card --}}
                        <div class="border-t border-gray-100 bg-gray-50 px-6 py-4">
                            <div class="flex items-center justify-between">

                                <span class="text-xs text-gray-500">
                                    Produto cadastrado
                                </span>

                               

                            </div>
                        </div>

                    </div>

                @endforeach

            </div>

        @else

            {{-- Estado vazio --}}
            <div class="rounded-xl bg-white px-6 py-16 text-center shadow-sm ring-1 ring-gray-200">

                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-gray-100">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-8 w-8 text-gray-400"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M20.25 7.5l-8.25-4.5-8.25 4.5m16.5 0v9l-8.25 4.5m8.25-13.5l-8.25 4.5m0 0L3.75 7.5m8.25 4.5v9"
                        />
                    </svg>
                </div>

                <h3 class="mt-4 text-lg font-semibold text-gray-900">
                    Nenhum produto encontrado
                </h3>

                <p class="mt-2 text-sm text-gray-500">
                    Comece cadastrando seu primeiro produto.
                </p>

                <div class="mt-6">
                    <a
                        href="{{ route('produtos.create') }}"
                        class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-5 py-3 text-sm font-semibold text-white hover:bg-indigo-700"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            class="h-5 w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 4.5v15m7.5-7.5h-15"
                            />
                        </svg>

                        Criar produto
                    </a>
                </div>

            </div>

        @endif

    </div>

</body>
</html>