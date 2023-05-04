

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="card-header">Produto criado com sucesso</h1>

                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            O produto "{{ $product->name }}" foi criado com sucesso!
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Descrição:</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" rows="3" readonly>{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Preço:</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ $product->price }}" readonly>
                            </div>
                        </div>

                        @if($product->category)
                            <p>Categoria: {{ $product->category->name }}</p>
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('index', ['id' => $product->id]) }}'">Ir para lista de produtos</button>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('create') }}'">Criar novo produto</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
