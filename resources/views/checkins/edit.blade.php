@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Checkin</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('checkins.update', $checkin) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="item_id">Item</label>
                                <select class="form-control" id="item_id" name="item_id">
                                    @foreach($items as $item)
                                        <option value="{{ $item->id }}" @if($item->id === $checkin->item_id) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $checkin->quantity }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
