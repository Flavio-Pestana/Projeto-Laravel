<h1>Todos os Produtos</h1>

<a href="{{ route('create') }}" class="btn btn-primary">Criar Produto</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category ? $product->category->name : 'Nenhuma categoria associada' }}</td>
            <td>
                <a href="{{ route('show', $product->id) }}" class="btn btn-primary">Ver</a>
                <a href="{{ route('edit', $product->id) }}" class="btn btn-secondary">Editar</a>
                <form action="{{ route('delete', $product->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Você tem certeza que deseja excluir o produto?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<script>
    function excluirProduto(event, id) {
        event.preventDefault();

        if (window.confirm('Tem certeza que deseja excluir este produto?')) {
            window.location.href = '/produtos/' + id + '/excluir';
        }
    }
</script>

