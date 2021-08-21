<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.home', [
            'items' => $items
        ]);
    }
    
    
     public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $items = TravelPackage::where('price', 'LIKE', '%' . $cari . '%')->paginate(10);
        return view('pages.home', compact('items'));
        
    }
}
