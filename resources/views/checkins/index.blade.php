@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Checkins</div>

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
                                @foreach($checkins as $checkin)
                                    <tr>
                                        <th scope="row">{{ $checkin->id }}</th>
                                        <td>{{ $checkin->item->name }}</td>
                                        <td>{{ $checkin->quantity }}</td>
                                        <td>
                                            <a href="{{ route('checkins.edit', $checkin) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST" action="{{ route('checkins.destroy', $checkin) }}" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this checkin?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('checkins.create') }}" class="btn btn-primary">Add Checkin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
