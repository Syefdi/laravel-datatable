@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="row">
            {{-- CONTENT ARTIKEL --}}
            <div class="col-12 mt-1">
                @include('artikel.index')
            </div>
            {{-- END CONTENT ARTIKEL --}}
            {{-- 
                buat table jangan menyenggol artikel
                1 folder content untuk include table/panggil table di sini
                2 jangan buat table di dalam sini ikuti yang sudah ada di folder artikel
                3 table di pisah supaya tidak terjadi conflict
             --}}
    </div>
@endsection