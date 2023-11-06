@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Supplier</h1>

    <form method="POST" action="{{ route('suppliers.update', $supplier->id) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $supplier->name }}" required>
        </div>

        <div class="form-group">
            <label for="contact_person">Contact Person</label>
            <input type="text" name="contact_person" id="contact_person" class="form-control" value="{{ $supplier->contact_person }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $supplier->email }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $supplier->phone }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Supplier</button>
    </form>
</div>
@endsection
