@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $product->description }}</textarea>
        
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" required>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="{{ $product->quantity }}" required>
        
        <button type="submit">Update Product</button>
    </form>
@endsection
