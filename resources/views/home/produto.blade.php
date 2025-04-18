@extends('layouts.app') <!-- Usa o layout base, se tiver -->

@section('title', 'Produtos - cantinho da isa')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Nossos Produtos</h1>

    <div class="row">
        @foreach ($produtos as $produto)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $produto->imagem) }}" class="card-img-top" alt="{{ $produto->nome }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text text-muted">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        <p class="card-text">{{ Str::limit($produto->descricao, 80) }}</p>
                        <a href="{{ route('produto.detalhe', $produto->id) }}" class="btn btn-primary mt-auto">Ver detalhes</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Paginação, se estiver usando -->
    <div class="d-flex justify-content-center mt-4">
        {{ $produtos->links() }}
    </div>
</div>
@endsection
