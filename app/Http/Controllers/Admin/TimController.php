<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use App\Peserta;
use App\Tim;
use Illuminate\Http\Request;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_kategori)
    {
        // TODO : Return view with datatable
        return view('admin.pages.kategori_penyisihan_1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kategori)
    {
        // TODO : Return view create
        return 'Create ' . $id_kategori;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id_kategori, Request $request)
    {
        $mahasiswas = $request->mahasiswas;

        // TODO : Validation ????

        $pesertas = [];

        foreach ($mahasiswas as $mahasiswa){
            $mhs = Mahasiswa::createMahasiswa($mahasiswa->nim, $mahasiswa->nama, $mahasiswa->email, $mahasiswa->no_hp);
            array_push($pesertas, $mhs);
        }

        $tim = Tim::createTim($request->id_kategori, $pesertas[0], $request->nama_tim);

        foreach ($pesertas as $peserta){
            Peserta::linkPesertaToTim($peserta->nim, $tim->id);
        }

        // TODO : return redirect with success

        return redirect()->back();

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
    public function destroy($id_kategori, $id)
    {
        return 'Destroy ' . $id_kategori . '_' . $id;
    }
}
