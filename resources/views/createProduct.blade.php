<h2>Criar Produto</h2>

<form method="POST" action="{{ route('storage') }}">
    @csrf

    <div class="mb-3">
        <label for="nameProduct" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nameProduct" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="descriptionProduct" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="descriptionProduct" name="description" value="{{ old('description') }}">
        @error('description')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="priceProduct" class="form-label">Preço</label>
        <input type="number" class="form-control" id="priceProduct" name="price" value="{{ old('price') }}" step="0.01">
        @error('price')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Criar</button>

    <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('storage') }}'">Ir para lista de produtos</button>
</form>





