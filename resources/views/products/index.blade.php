@extends('layouts.app')

@section('content')
    <div class="col-lg-12 d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="text-primary">Gestion Des Produits</h4>
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
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    {{ $product->id }}
                                </td>
                                <td>
                                    {{ $product->name }}
                                </td>
                                <td>
                                    <img style="width: 100px" src="/storage/{{ $product->image }}" alt="">
                                </td>
                                <td>
                                    {{ $product->price }}
                                </td>
                                <td>
                                    {{ $product->quantity }}
                                </td>
                                <td>
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form style="display: inline-block" action="{{ route('products.destroy', $product) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    @endsection
