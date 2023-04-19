

<h1>Editar Produto</h1>

<form method="POST" action="{{ route('update', $product->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
    </div>

    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="price">Preço:</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" step="0.01" required>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
