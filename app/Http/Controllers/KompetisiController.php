<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KompetisiController extends Controller
{
    public function getPagesByCategory($kategori)
    {
        if (count(Kategori::where('kategori', $kategori)->get()) <= 0) {
            return response()->view('errors.404_not_found');
        }
        return view('pages.kategori_' . $kategori);
    }

    public function getPageDaftar($kategori)
    {
        if (count(Kategori::where('kategori', $kategori)->get()) <= 0) {
            return response()->view('errors.404_not_found');
        }
        return view('pages.daftar_kategori_' . $kategori);
    }

    public function getPagePeserta($kategori)
    {
        if (count(Kategori::where('kategori', $kategori)->get()) <= 0) {
            return response()->view('errors.404_not_found');
        }
        $kategori = Kategori::with('tims')->where('kategori', $kategori)->get()->first();
        return view('pages.peserta_kategori', compact('kategori'));
    }
}
