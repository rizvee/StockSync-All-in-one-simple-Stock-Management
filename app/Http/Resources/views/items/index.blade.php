@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Items</h1>
    <a href="{{ route('items.create') }}" class="btn btn-primary">Add New Item</a>

    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Category</th>
                <th>Stock Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name }}</td>
                <td>{{ $item->stock_quantity }}</td>
                <td>
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('items.show', $item->id) }}" class="btn btn-sm btn-info">Details</a>
                    <form method="POST" action="{{ route('items.destroy', $item->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
