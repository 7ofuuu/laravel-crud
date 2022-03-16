@extends('layouts.main-layouts');
@section('container')
@if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">Tambah Data Pencatatan Buku</div>
        <div class="card-body">
            <form action="{{ url('books') }}" method="post">
                @csrf
                <label for="">Judul Buku</label><br>
                <input type="text" class="form-control" name="judul" id="judul">
                <br>
                <label for="">Author Buku</label><br>
                <input type="text" class="form-control" name="author" id="author">
                <br>
                <label for="">Penerbit Buku</label><br>
                <input type="text" class="form-control" name="penerbit" id="penerbit">
                <br>
                <label for="">Sinopsis Buku</label><br>
                <input type="text" class="form-control" name="sinopsis" id="sinopsis">

                <br><br>
                <input type="submit" value="Simpan Data!" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection