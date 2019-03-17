<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Tim;
use Illuminate\Http\Request;

class KompetisiController extends Controller
{
    public function getPagesByCategory($kategori)
    {
        $kategoris = Kategori::get();
        if (count(Kategori::where('kategori', $kategori)->get()) <= 0) {
            return response()->view('errors.404_not_found');
        }
        $kategori = Kategori::where('kategori', $kategori)->get()->first();
        return view('pages.kompetisi.' . $kategori->kategori, compact('kategoris', 'kategori'));
    }

    public function getPagePeserta($kategori)
    {
        if (count(Kategori::where('kategori', $kategori)->get()) <= 0) {
            return response()->view('errors.404_not_found');
        }
        $kategori = Kategori::with('tims')->where('kategori', $kategori)->get()->first();
        return view('pages.peserta_kategori', compact('kategori'));
    }

    public function getPesertasByCategory($kategori)
    {
        $kategoris = Kategori::get();
        $tims = Tim::where('id_kategori', $kategori)->paginate(20);
        $kategori = Kategori::find($kategori);
        return view('pages.peserta', compact('kategoris', 'tims', 'kategori'));
    }
}
