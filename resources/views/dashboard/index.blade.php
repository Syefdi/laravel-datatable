@extends('layouts.main')
@section('content')
<div class="card">
    <style>
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-body i {
            font-size: 3rem;
        }
    </style>
    <div class="container-fluid">
        <h1 class="mb-4">Dashboard</h1>
        <div class="row">
            <!-- Artikel Card -->
            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-newspaper text-primary mb-3"></i>
                        <h5 class="card-title">Artikel</h5>
                        <p class="card-text">Total Data: <strong>{{ $artikel }}</strong></p>
                        <a href="{{ route('artikel.index') }}" class="btn btn-primary">Lihat Artikel</a>
                    </div>
                </div>
            </div>

            <!-- Produk Card -->
            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-boxes text-success mb-3"></i>
                        <h5 class="card-title">Produk</h5>
                        <p class="card-text">Total Produk: <strong>120</strong></p>
                        <a href="#" class="btn btn-success">Lihat Produk</a>
                    </div>
                </div>
            </div>

            <!-- Invoice Card -->
            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-file-invoice text-warning mb-3"></i>
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
