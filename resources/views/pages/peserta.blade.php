@extends('layouts.base')

@section('title', 'Daftar Tim ' . $kategori->nama_kategori)

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>Daftar Peserta {{ $kategori->nama_kategori }}</h3>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /blue -->


    <!-- *****************************************************************************************************************
       BLOG CONTENT
       ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                @if(count($tims) > 0)
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Score</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tims as $key => $tim)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $tim->nama_tim }}</td>
                            <td>{{ isset($tim->nilai[0]->nilai) ? $tim->nilai[0]->nilai : '-' }}</td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                @else
                    <h3 style="text-align: center; opacity: 0.4">Belum peserta dalam
                        kategori {{ $kategori->nama_kategori }}</h3>
                @endif
            </div>

            {{ $tims->links() }}
        </div>
    </div>
@endsection