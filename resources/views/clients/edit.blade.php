@extends('layouts.app')

@section('content')
    <div class="col-lg-12 d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="text-primary">Gestion Des client</h4>
        </div>
        <div>
            <a href="{{ route('clients.create') }}" class="btn btn-primary">
                Add New User
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
                    <h2 class="mb-3">Modifier le client {{ $client->name }}</h2>
                    <form method="POST" action="{{ route('clients.update', $client) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <input name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $client->name }}" id="name" type="text" placeholder="Name" />
                            <label for="name">Name</label>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $client->email }}" id="emailAddress" type="email" placeholder="Email Address" />
                            <label for="emailAddress">Email Address</label>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $client->phone }}" id="phoneNumber" type="text" placeholder="Phone number" />
                            <label for="phoneNumber">Phone number</label>
                            @error('phone')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" />
                            <label for="password">Password</label>
                            @error('password')
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
