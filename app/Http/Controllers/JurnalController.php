<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;

class jurnalcontroller extends Controller
{
    public function index()
    {
        return view('jurnal', [
            "title" => "Jurnal",
            "jurnal_artikel" => Jurnal::all()
        ]);
    }

    public function show ($slug)
    {
        return view('jurnal_detail', [
            "title" => "Jurnal Detail",
            "jurnal" => Jurnal::find($slug)
        ]);
    }
}