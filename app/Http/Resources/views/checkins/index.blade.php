@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Check-in Records</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($checkins as $checkin)
            <tr>
                <td>{{ $checkin->id }}</td>
                <td>{{ $checkin->item->name }}</td>
                <td>{{ $checkin->quantity }}</td>
                <td>{{ $checkin->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
