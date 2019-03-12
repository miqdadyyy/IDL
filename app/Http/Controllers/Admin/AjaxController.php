<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Submission;
use App\Tim;
use Illuminate\Http\Request;
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
        $data = Tim::with('mahasiswa', 'pesertas.mahasiswa', 'submissions')->where('id_kategori', $kategori)->where('babak', 1)->get();
        $index = 1;
        foreach ($data as $d) {
            $d->no = $index++;
            $anggota = [];
            foreach ($d->pesertas as $p) {
                array_push($anggota, $p->mahasiswa->nama);
            }

            $d->submission = $d->submissions->first() == null ? null : $d->submissions->first()->id;
            $d->anggota = implode($anggota, ', ');
        }

        return DataTables::of($data)->make(true);
    }

    public function downloadFile($id)
    {
        $file = Submission::findOrFail($id);
        $file_path = public_path() . '/' . $file->file_path;
        if(file_exists($file_path)){
            return Response::download($file_path, $file->judul . '.pdf');
        }
        return 'Error';
    }
}
