@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Create Product</h1>
        <form action="{{ route('products.store') }}" method="POST" class="p-4 border rounded shadow-sm">
            @csrf

            <div class="form-group mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name" required>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter product description"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Enter product price" required>
            </div>

            <div class="form-group mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Enter product quantity" required>
            </div>

            <button type="submit" class="btn btn-success">Create Product</button>
        </form>
    </div>
@endsection
