@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Checkouts</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($checkouts as $checkout)
                                    <tr>
                                        <th scope="row">{{ $checkout->id }}</th>
                                        <td>{{ $checkout->item->name }}</td>
                                        <td>{{ $checkout->quantity }}</td>
                                        <td>
                                            <a href="{{ route('checkouts.edit', $checkout) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST" action="{{ route('checkouts.destroy', $checkout) }}" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this checkout?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('checkouts.create') }}" class="btn btn-primary">Add Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
