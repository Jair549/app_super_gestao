<h3>Fornecedor</h3>

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)

        Iteração atual: {{ $loop->iteration }}
        @if($loop->first)
            Primeira iteração
        @endif
        <br/>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br/>
        Status: {{ $fornecedor['status'] }}
        <br/>
        CNPJ: {{ $fornecedor['CNPJ'] }}
        <br/>
        Telefone: {{ $fornecedor['telefone'] }}
        <br/>
        @if($loop->last)
            Última iteração
        @endif
        <hr>
    @empty
        <p>Não existem fornecedores cadastrados.</p>
    @endforelse
@endisset
