@extends('layouts.main-layouts');
@section('container')
    <div class="card">
        <div class="card-header">
            Detail Pencatatan Buku
        </div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Judul : {{ $books->judul }}</h5>
                <br>
                <p class="card-text">Author : {{ $books->author}} </p>
                <p class="card-text">Penerbit : {{ $books->penerbit}} </p>
                <p class="card-text">Sinopsis : {{ $books->sinopsis}} </p>
            </div>
        </div>
    </div>
@endsection