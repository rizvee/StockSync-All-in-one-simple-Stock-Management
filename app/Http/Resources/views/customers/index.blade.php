@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customers</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
                    <form method="POST" action="{{ route('customers.destroy', $customer->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('customers.create') }}" class="btn btn-success">Add Customer</a>
</div>
@endsection
