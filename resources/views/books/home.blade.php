@extends('layouts.main-layouts')
@section('container')
    @if (session('success'))
        <div class="alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="jumbotron" >
        <div class="card">
            <div class="card-header card-title">
                <h4>Web Pencatatan Buku</h4>
            </div>
            <div class="card-body">
                {{-- <p class="card-text">Web CRUD Laravel Untuk Mencatat Informasi Buku | Mohammad Ilham Firdaus - XI RPL 2</p> --}}
                <a href=" {{ url('/books/create') }} " class="btn btn-dark mt-3" >Tambah Buku!</a>
                <br><br><br>
                <table class="table table-hover table-striped table-bordered">
                    <thead class="table table-danger text-center">
                        <tr>
                            <th scope="col" class="table-primary">No.</th>
                            <th scope="col" class="table-primary">Judul Buku</th>
                            <th scope="col" class="table-primary">Author</th>
                            <th scope="col" class="table-primary">Penerbit</th>
                            <th scope="col" class="table-primary">Sinopsis</th>
                            <th scope="col" class="table-primary">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (isset($books) ? $books : [] as $item)
                            <tr>
                                <th> {{ $loop->iteration }} </th>
                                <td> {{ $item->judul }} </td>
                                <td> {{ $item->author }} </td>
                                <td> {{ $item->penerbit }} </td>
                                <td> {{ $item->sinopsis }} </td>
                                <td class="text-center">
                                    <a href="{{ url('/books/' . $item->id) }}" class="btn btn-info badge mb-1"
                                        style="width: 80px; height: 25px;">VIEW</a>
                                    <a href="{{ url('/books/' . $item->id . '/edit') }}"
                                        class="btn btn-warning badge mb-1"
                                        style="width: 80px; height: 25px;">EDIT</a>
                                    <form action="{{ url('/books' . '/' . $item->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger badge mb-1"
                                            style="width: 80px; height: 25px;" type="submit" onclick="return confirm(&quot;Yaqueeeenn Dihapus?&quot;)">DELETE</button>
                                    </form>
                                    {{-- <a href="{{ url() }}" class="btn btn-danger badge rounded-pill"
                                        style="width: 80px; height: 25px;">DELETE</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
