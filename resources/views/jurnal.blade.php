@extends('layouts.main')

@section('container')
    @foreach ($jurnal_artikel as $jurnal)
    <article class=mb-4>
        <h4>
            <a href="/jurnal/{{ $jurnal["slug"] }}"><b>{{ $jurnal["judul"] }}</b></a>
        </h4>
        <h5 style="font-family:'Lucida Sans',">Oleh: {{ $jurnal["penulis"] }}</h5>
        <p>{{ $jurnal["kutipan"] }}</p>
    </article>
    @endforeach
@endsection