<div>
    @if ($cliente)
        <div class="card">
            <div class="card-header">
                <h3>Detalhes do Cliente</h3>
            </div>
            <div class="card-body">
                <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
                <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
                <p><strong>Email:</strong> {{ $cliente->email }}</p>
                <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    @else
        <p>Cliente não encontrado.</p>
    @endif
</div>
