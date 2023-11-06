@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Checkout Records</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($checkouts as $checkout)
            <tr>
                <td>{{ $checkout->item->name }}</td>
                <td>{{ $checkout->quantity }}</td>
                <td>{{ $checkout->created_at->format('Y-m-d H:i:s') }}</td>
                <td>
                    <a href="{{ route('checkouts.edit', $checkout->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form method="POST" action="{{ route('checkouts.destroy', $checkout->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
