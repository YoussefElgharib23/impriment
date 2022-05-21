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
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($clients as $client)
                            <tr id="{{ $client->id }}">
                                <td>
                                    {{ $client->id }}
                                </td>
                                <td>
                                    {{ $client->name }}
                                </td>
                                <td>
                                    {{ $client->email }}
                                </td>
                                <td>
                                    {{ $client->phone }}
                                </td>
                                <td>
                                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form style="display: inline-block" action="{{ route('clients.destroy', $client) }}"
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
