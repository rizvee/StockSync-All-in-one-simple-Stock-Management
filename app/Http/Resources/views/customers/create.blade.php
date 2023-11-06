@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Customer</h1>

    <form method="POST" action="{{ route('customers.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
