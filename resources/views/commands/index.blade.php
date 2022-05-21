@extends('layouts.app')

@section('content')
    <div class="col-lg-12 d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="text-primary">Gestion Des Commands</h4>
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
                            <th>Client name</th>
                            <th>Client phone</th>
                            <th>Product name</th>
                            <th>Product image</th>
                            <th>Order quantity</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($commands as $command)
                            <tr>
                                <td>
                                    {{ $command->id }}
                                </td>
                                <td>
                                    <a href="{{ route('clients.index') }}#{{ $command->client->id }}">
                                        {{ $command->client->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="tel:{{ $command->client->phone }}">
                                        {{ $command->client->phone }}
                                    </a>
                                </td>
                                <td>
                                    {{ $command->product->name }}
                                </td>
                                <td>
                                    <img style="width: 100px" src="/storage/{{ $command->product->image }}" alt="">
                                </td>
                                <td>
                                    {{ $command->quantity }}
                                </td>
                                <td>
                                    {{ $command->quantity * $command->product->price }} $
                                </td>
                                <td>
                                    <span>
                                        @if (!$command->is_accepted)
                                            <span class="badge text-bg-warning">Pending</span>
                                        @else
                                            <span class="badge text-bg-success">Accepted</span>
                                        @endif

                                    </span>
                                </td>
                                <td>
                                    @if (!$command->is_accepted)
                                        <form style="display: inline-block"
                                            action="{{ route('commands.accept', $command) }}" method="POST">
                                            @csrf
                                            <button class="btn btn-success">Accept</button>
                                        </form>
                                    @endif
                                    <form style="display: inline-block"
                                        action="{{ route('commands.destroy', $command) }}" method="POST">
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
