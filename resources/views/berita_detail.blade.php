@extends('layouts.main') 

@section('container')
    <div class="jumbotron jumbotron-fluid bg-primary">
            <h2><b>{{ $artikel["judul"] }}</b></h2>
            <p class="lead">Oleh : {{ $artikel["penulis"] }}</p>
    </div>
    <article class="mb-5">
        <p>{{ $artikel["isi"] }}</p>  
    </article>
    <button type="button" class="btn btn-white">
        <a href="/berita">Kembali</a>
    </button>
@endsection