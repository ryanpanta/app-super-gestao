@isset($fornecedores)
    @foreach ($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] }}
        <br>
        DDD: {{ $fornecedor['ddd'] ?? '' }}
        <br>
        Telefone: {{ $fornecedor['telefone'] ?? ''}}
    @endforeach
@endisset
