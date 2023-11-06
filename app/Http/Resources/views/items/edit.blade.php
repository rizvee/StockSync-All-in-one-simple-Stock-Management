@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Item</h1>

    <form method="POST" action="{{ route('items.update', $item->id) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Item Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id === $item->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="stock_quantity">Stock Quantity</label>
            <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" value="{{ $item->stock_quantity }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Item</button>
    </form>
</div>
@endsection
