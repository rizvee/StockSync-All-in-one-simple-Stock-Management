@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Suppliers</h1>

    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add New Supplier</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Person</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->id }}</td>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->contact_person }}</td>
                <td>{{ $supplier->email }}</td>
                <td>{{ $supplier->phone }}</td>
                <td>
                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-primary">Edit</a>
                    <form method="POST" action="{{ route('suppliers.destroy', $supplier->id) }}" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
