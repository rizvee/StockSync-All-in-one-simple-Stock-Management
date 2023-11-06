@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Check-in</h1>

    <form method="POST" action="{{ route('checkins.update', $checkin->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="item">Select Item</label>
            <select name="item" id="item" class="form-control">
                @foreach($items as $item)
                    <option value="{{ $item->id }}" @if($item->id == $checkin->item_id) selected @endif>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $checkin->quantity }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
