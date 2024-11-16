@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 mt-1">
            @include('invoice.index')
            </div>
        </div>
        <div class="row">
            <h1>Product List</h1>
            <a href="{{ route('products.create') }}">Create New Product</a>
            <table border="1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            {{-- CONTENT ARTIKEL --}}
            <div class="col-12 mt-1">
                @include('artikel.index')
            </div>
            {{-- END CONTENT ARTIKEL --}}
    </div>
@endsection