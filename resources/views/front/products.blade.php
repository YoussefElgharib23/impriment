@extends('front.layouts.app')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/front/images/crea.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="/">
                                Home
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span>Services
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                    <h1 class="mb-3 bread">Our Products</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Products</span>
                    <h2 class="mb-3">Our Latest Products</h2>
                </div>
            </div>

            <div class="row">

                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="/storage/{{ $product->image }}" class="card-img-top"
                                alt="Product {{ $product->name }} image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">
                                    {{ Str::of($product->description)->limit(100, '...') }}
                                </p>
                                <a href="#" class="btn btn-success order__btn" data-product-name="{{ $product->name }}"
                                    data-product-id="{{ $product->id }}" data-bs-toggle="modal"
                                    data-bs-target="#commandModal">Order now</a>
                                <a href="#" class="btn btn-primary product__details"
                                    data-product-id="{{ $product->id }}">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="commandModal" tabindex="-1" aria-labelledby="commandModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="commandModalLabel">Order product <span id="productToOrder"></span></h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('order.post') }}" method="POST" novalidate>

                        @csrf

                        <div class="mb-2">
                            <label class="m-0" for="name">Your full name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                required>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="m-0" for="phone">Your email address</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                                required>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="m-0" for="phone">Your phone number</label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone"
                                required>
                            @error('phone')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="m-0" for="phone">Quantity</label>
                            <input class="form-control @error('quantity') is-invalid @enderror" type="number"
                                name="quantity" value="1" required>
                            @error('quantity')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <input type="hidden" name="product_id" value="{{ old('product_id') }}">

                        <button class="btn btn-success w-100">Order now</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="ajax_results">

    </div>
@endsection


@section('scripts')
    <script>
        $('.product__details').click(function(e) {
            e.preventDefault();

            // Faire du ajax pour recuperer le produit selectionnee
            const productId = $(this).data('product-id')

            $.ajax({
                url: `/products/${productId}/details`,
                success: function(response) {
                    $("#ajax_results").html(response)
                    $("#detailsModal").modal('toggle')
                }
            })
        })

        $('.order__btn').click(function() {
            const productId = $(this).data('product-id')
            $('input[name=product_id]').val(productId)
            $('#productToOrder').html($(this).data('product-name'))
        })
    </script>

    @if ($errors->any())
        <script>
            $('#commandModal').modal('show')
        </script>
    @endif
@endsection
