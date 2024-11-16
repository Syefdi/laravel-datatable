@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 my-3">
                {{-- @include('invoice.index') --}}
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
