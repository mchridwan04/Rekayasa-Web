@extends('layouts.main')

@section('container')
    <article class=mb-5>
        <h2><b>{{ $jurnal["judul"] }}</b></h2>
        <h5>Oleh: {{ $jurnal["penulis"] }}</h5>
        <p class="tengah">{{ $jurnal["isi"] }}</p>
    </article>
    <a href="/jurnal">Kembali Ke Jurnal</a>
@endsection