<h2> Criar Produto</h2>

<form method="POST" action="{{ route('storage') }}">
    @csrf

    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nameProduct" name="name">

    </div>
    <div class="mb-3">
        <label for="exampleInputDescription" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="descriptionProduct" name="description">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Preço</label>
        <input type="number" class="form-control" id="priceProduct" name="price">
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
</form>




