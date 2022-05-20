@extends('layouts.app')

@section('content')
    <div class="col-lg-12 d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="text-primary">Gestion Des produits</h4>
        </div>
        <div>
            <a href="{{ route('products.create') }}" class="btn btn-primary">
                Add New Product
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div id="showAlert"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="container col-md-8 px-5 my-5">
                <div class="bg-white border rounded-3 p-4 shadow">
                    <h2 class="mb-3">Ajouter un produit</h2>
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" id="name" type="text" placeholder="Name" />
                            <label for="name">Name</label>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input name="image" class="form-control @error('image') is-invalid @enderror" id="image"
                                type="file" placeholder="image" />
                            @error('image')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="price" class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price') }}" id="price" type="number" placeholder="price" />
                            <label for="price">Prix</label>
                            @error('price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                                value="{{ old('quantity') }}" id="quantity" type="number" placeholder="quantity" />
                            <label for="quantity">Quantity</label>
                            @error('quantity')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="reference" class="form-control @error('reference') is-invalid @enderror"
                                value="{{ old('reference') }}" id="reference" type="text" placeholder="Name" />
                            <label for="reference">Reference</label>
                            @error('reference')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
