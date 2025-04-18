@extends('layouts.admin')

@section('title', 'Admin Dashboard - Pedidos Feitos')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('admin.pedidos') }}" class="list-group-item list-group-item-action active">Pedidos Feitos</a>
                <a href="{{ route('admin.clientes') }}" class="list-group-item list-group-item-action">Clientes Cadastrados</a>
                <a href="{{ route('admin.estoque') }}" class="list-group-item list-group-item-action">Estoque de Roupas</a>
                <a href="{{ route('admin.trabalhadores') }}" class="list-group-item list-group-item-action">Trabalhadores</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <h1 class="mb-4">Pedidos Feitos</h1>
            <p>Aqui você pode visualizar e gerenciar os pedidos feitos pelos clientes.</p>
            <!-- Exemplo de tab-ela de pedidos -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->cliente->nome }}</td>
                            <td>{{ $pedido->data }}</td>
                            <td>{{ $pedido->status }}</td>
                            <td>
                                <a href="{{ route('admin.pedidos.show', $pedido->id) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('admin.pedidos.edit', $pedido->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Nenhum pedido encontrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection