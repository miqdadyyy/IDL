<?php

namespace App\Http\Controllers\Admin;

use App\Kategori;
use App\Mahasiswa;
use App\Post;
use App\Submission;
use App\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;


class AjaxController extends Controller
{
    public function getPost()
    {
        return DataTables::of(Post::with('user')->get())->make(true);
    }

    public function getPenyisihan1Tim($kategori)
    {
        $data = Tim::with('mahasiswa', 'pesertas.mahasiswa', 'submissions')->where('id_kategori', $kategori)->where('babak', '=', 1)->get();
        $index = 1;
        foreach ($data as $d) {
            $d->no = $index++;
            $anggota = [];
            foreach ($d->pesertas as $p) {
                array_push($anggota, $p->mahasiswa->nama);
            }

            $d->submission = Submission::where('token', $d->submissionid)->get()->first();
            $d->anggota = implode($anggota, ', ');
        }

        return DataTables::of($data)->make(true);
    }

    public function getPenyisihan2Tim($kategori)
    {
        $data = Tim::with('mahasiswa', 'pesertas.mahasiswa', 'submissions')->where('id_kategori', $kategori)->where('babak', '=', 2)->get();
        $index = 1;
        foreach ($data as $d) {
            $d->no = $index++;
            $anggota = [];
            foreach ($d->pesertas as $p) {
                array_push($anggota, $p->mahasiswa->nama);
            }

            $d->submission = Submission::where('token', $d->submissionid)->get()->first();
            $d->anggota = implode($anggota, ', ');
        }

        return DataTables::of($data)->make(true);
    }

    public function getFinalTim($kategori)
    {
        $data = Tim::with('mahasiswa', 'pesertas.mahasiswa')->where('id_kategori', $kategori)->where('babak', '=', 3)->get();
        $index = 1;
        foreach ($data as $d) {
            $d->no = $index++;
            $anggota = [];
            foreach ($d->pesertas as $p) {
                array_push($anggota, $p->mahasiswa->nama);
            }

            $d->submission = Submission::where('token', $d->submissionid)->get()->first();
            $d->anggota = implode($anggota, ', ');
        }

        return DataTables::of($data)->make(true);
    }

    public function getMahasiswas()
    {
        $data = Mahasiswa::get();
        $no = 1;
        foreach ($data as $d) {
            $d->no = $no++;
        }
        return DataTables::of($data)->make(true);
    }

    public function getTims()
    {
        $kategoris = Kategori::where('id_ormawa', Auth::user()->id_ormawa)->get();
        $tims = [];
        $no = 1;
        foreach ($kategoris as $kategori) {
            foreach (Tim::with('mahasiswa', 'kategori')->where('id_kategori', $kategori->id)->get() as $tim) {
                $tim->no = $no++;
                array_push($tims, $tim);
            }
        }
        return DataTables::of($tims)->make(true);
    }

    public function downloadFile($id)
    {
        $file = Submission::findOrFail($id);
        $file_path = public_path() . '/' . $file->file_path;
        if (file_exists($file_path)) {
            return Response::download($file_path, $file->judul . '.pdf');
        }
        return 'Error';
    }

    public function getTimsData()
    {
        $kategoris = Kategori::with('tims')->get();
        $colors = ["#F7464A", "#46BFBD", "#FDB45C"];
        $labels = [];
        $values = [];
        foreach ($kategoris as $key => $kategori) {
            array_push($labels, $kategori->nama_kategori);
            array_push($values, count($kategori->tims));
        }
        return [
            "color" => $colors,
            "label" => $labels,
            "value" => $values
        ];
    }

    public function getMahasiswasData(){
        $_angkatan = ['2015', '2016', '2017', '2018'];
        $_prodi = ['Sistem Informasi', 'Teknologi Informasi', 'Informatika'];

        $mahasiswas = Mahasiswa::get();
        $data = [];

        foreach ($_prodi as $prodi){
            foreach ($_angkatan as $angkatan){
                $dd[$angkatan] = 0;
            }
            $data[$prodi] = $dd;
        }

        foreach ($mahasiswas as $mahasiswa){
            $ang = substr(($mahasiswa->nim . ''), 0, 2);
            $prodi = substr(($mahasiswa->nim . ''), -4, 1);

            $ang = "20".$ang;

            $prodi = $prodi == 1 ? "Sistem Informasi" : ($prodi == 2 ? "Teknologi Informasi" : "Informatika");
            $data[$prodi][$ang]++;
        }

        return ["data" => $data, "angkatan" => $_angkatan, "prodi" => $_prodi];
    }
}
