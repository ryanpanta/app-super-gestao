@isset($fornecedores)
    @foreach ($fornecedores as $indice => $fornecedor)
        
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] }}
        <br>
        DDD: {{ $fornecedor['ddd'] ?? '' }}
        <br>
        Telefone: {{ $fornecedor['telefone'] ?? ''}}
        @if ($loop->first)
            <p>Primeira iteração do loop.</p>
        @endif

        @if ($loop->last)
            <p>Última iteração do loop.</p>
        @endif
        <hr>
    @endforeach
@endisset
