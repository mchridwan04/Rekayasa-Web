<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;

class DashboardJurnalController extends Controller
{
   public function index()
   {
      return view('dashboard.jurnal.index', [
         'jurnal' => Jurnal::all()
      ]);
   }
}
