@extends('dashboard.layout.main')
@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrep align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Berita</h1>
   </div>
   <div class="table-responsive">
      <table class="table table-striped table-sm">
         <thead>
            <tr>
               <th scope="col">No</th>
               <th scope="col">Penulis</th>
               <th scope="col">Isi</th>
               <th scope="col">Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($berita as $beritanya)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $beritanya["penulis"] }}</td>
                  <td>{{ $beritanya["isi"] }}</td>
                  <td>
                     <a href="">Ubah</a>
                     <a href="">Hapus</a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>

   
@endsection