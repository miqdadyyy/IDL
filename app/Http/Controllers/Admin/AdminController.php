<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Charts\DoughnutChart;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalTimChart = new DoughnutChart;
        $totalPesertaChart = new DoughnutChart;

        $dataController = new AjaxController();
        $dataTotalTim = $dataController->getTimsData();
        $dataTotalPeserta = $dataController->getMahasiswasData();

        $totalPesertaChart->labels($dataTotalPeserta["angkatan"]);

        foreach ($dataTotalPeserta["data"] as $prodi => $dataByProdi){
            $dataAngkatan = [];
            foreach ($dataByProdi as $angkatan => $value){
                array_push($dataAngkatan, $value);
            }
            $totalPesertaChart->dataset($prodi, 'column', $dataAngkatan);
        }

        $totalTimChart->labels($dataTotalTim["label"]);
        $totalTimChart->dataset('Total Tim', 'pie', $dataTotalTim["value"])->color($dataTotalTim["color"]);

        return view('admin.pages.dashboard', compact('totalTimChart', 'totalPesertaChart'));
    }
}
