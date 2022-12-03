<?php

namespace App\Http\Controllers;

use App\Models\Berita;

// Create class beritacontroller 
class beritacontroller extends Controller
{
    // Create function index
    //   -- Return view 
    public function index()
    {
        return view('berita', [
            "title" => 'Berita',
            "berita_artikel" => Berita::all()
        ]);
    }

    // Create function show 
    public function show ($slug)
    {
        return view('berita_detail',[
            "title" => "Berita Detail",
            "artikel" => Berita::find($slug)
        ]);
    }
}
