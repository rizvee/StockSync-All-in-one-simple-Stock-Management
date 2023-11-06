@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Item</h1>

    <form method="POST" action="{{ route('items.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Item Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="stock_quantity">Stock Quantity</label>
            <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Item</button>
    </form>
</div>
@endsection
