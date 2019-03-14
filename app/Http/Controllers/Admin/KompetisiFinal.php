<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Mahasiswa;
use App\Peserta;
use App\Tim;
use Illuminate\Http\Request;

class KompetisiFinal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_kategori)
    {
        // TODO : Return view with datatable
        $kategori = Kategori::where('kategori', $id_kategori)->get()->first();
        return view('admin.pages.final', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kategori)
    {
        // TODO : Return view create
        $kategori = Kategori::where('kategori', $id_kategori)->get()->first();
        $tims = Tim::where('id_kategori', $kategori->id)->where('babak', '=', 2)->get();
        return view('admin.pages.add_final', compact('kategori', 'tims'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id_kategori, Request $request)
    {
        $tims = $request->tims;

        foreach($tims as $tim){
            Tim::updateKompetisi($tim, 3);
        }

        // TODO : return redirect with success
        return redirect()->route('admin.final.index', $id_kategori);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kategori, $id)
    {
        return 'Show ' . $id_kategori . '_' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kategori, $id)
    {
        return 'Edit ' . $id_kategori . '_' . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tim = Tim::updateKompetisi($id, 2);
        if($tim){
            return redirect()->route('admin.final.index', compact('kategori'));
        }
        return redirect()->route('admin.final.index', compact('kategori'));
    }
}
