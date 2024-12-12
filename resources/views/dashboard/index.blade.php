@extends('layouts.main')
@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .sidebar {
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #343a40;
        padding: 1rem;
    }
    .sidebar a {
        color: #ffffff;
        text-decoration: none;
        padding: 0.75rem 1rem;
        display: block;
        border-radius: 5px;
    }
    .sidebar a.active, .sidebar a:hover {
        background-color: #007bff;
        color: #fff;
    }
    .content {
        margin-left: 250px;
        padding: 2rem;
    }
</style>
<div class="content">
    <div class="container-fluid">
        <h1 class="mb-4">Dashboard</h1>
        <div class="row">
            <!-- Artikel Card -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-newspaper fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Artikel</h5>
                        <p class="card-text">Total Data : <strong>{{ $artikel }}</strong></p>
                        <a href="{{ route('artikel.index') }}" class="btn btn-primary">Lihat Artikel</a>
                    </div>
                </div>
            </div>

            <!-- Produk Card -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-boxes fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Produk</h5>
                        <p class="card-text">Total Produk: <strong>120</strong></p>
                        <a href="#" class="btn btn-success">Lihat Produk</a>
                    </div>
                </div>
            </div>

            <!-- Invoice Card -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-file-invoice fa-3x text-warning mb-3"></i>
                        <h5 class="card-title">Invoice</h5>
                        <p class="card-text">Total Invoice: <strong>78</strong></p>
                        <a href="#" class="btn btn-warning">Lihat Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection