@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="row">
            {{-- CONTENT ARTIKEL --}}
            <div class="col-12 mt-1">
                @include('artikel.index')
            </div>
            {{-- END CONTENT ARTIKEL --}}
    </div>
@endsection