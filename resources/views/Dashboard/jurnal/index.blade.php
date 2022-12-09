@extends('dashboard.layout.main')
@section('container')
   {{-- <div class="d-flex text-center justify-content-between flex-wrap flex-md-nowrep align-items-center pt-3 pb-2 mb-3 border-bottom">
      <p class="h2">Data Jurnal</p>
   </div> --}}
   <h2 class="text-center pt-3 pb-2 mb-3 border-bottom">Data Jurnal</h2>
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
            @foreach ($jurnal as $jurnalnya)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $jurnalnya["penulis"] }}</td>
                  <td 
                  <p align="justify">
                     {{ $jurnalnya["isi"] }}</td>
                  </p>
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