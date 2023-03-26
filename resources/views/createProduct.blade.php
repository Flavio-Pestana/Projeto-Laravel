<h2> Criar Produto</h2>

<form>
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nameProduct" name="name" value="{{ $product['name'] }}">

    </div>
    <div class="mb-3">
        <label for="exampleInputDescription" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="descriptionProduct" name="description" value="{{ $product['description'] }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Preço</label>
        <input type="number" class="form-control" id="priceProduct" name="price" value="{{ $product['price'] }}">
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
</form>

<hr>
<h3>Produto Criado</h3>

<p><strong>Nome:</strong> {{ $product['name'] }}</p>
<p><strong>Descrição:</strong> {{ $product['description'] }}</p>
<p><strong>Preço:</strong> {{ $product['price'] }}</p>



