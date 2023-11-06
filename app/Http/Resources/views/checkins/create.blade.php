@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Check-in</h1>

    <form method="POST" action="{{ route('checkins.store') }}">
        @csrf

        <div class="form-group">
            <label for="item">Select Item</label>
            <select name="item" id="item" class="form-control">
                @foreach($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
