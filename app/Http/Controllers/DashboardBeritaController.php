<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class DashboardBeritaController extends Controller
{
   public function index()
   {
      return view('dashboard.berita.index', [
         'berita' => Berita::all()
      ]);
   }
}
