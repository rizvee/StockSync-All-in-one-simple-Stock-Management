@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Checkout</h1>

    <form method="POST" action="{{ route('checkouts.store') }}">
        @csrf
        <div class="form-group">
            <label for="item_id">Item</label>
            <select name="item_id" id="item_id" class="form-control">
                @foreach($items as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Checkout</button>
        </div>
    </form>
</div>
@endsection
