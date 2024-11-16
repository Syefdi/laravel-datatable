@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="row">
<<<<<<< HEAD
        <h1 class="my-4">Product List</h1>
        <a href="{{ route('create') }}" class="btn btn-primary mb-3">Create New Product</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
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
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
=======
            <div class="col-12 my-3">
                @include('invoice.index')
            </div>
>>>>>>> 53a58270f72660dda04ca2ff1577e9c782fb7dd6
        </div>
    </div>

        <div class="row">
            <div class="col-12 my-3">
                @include('products.index')
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-3">
                @include('artikel.index')
            </div>
        </div>
    </div>
@endsection
