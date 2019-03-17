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

                @foreach($tims as $tim)
                    <div>
                        {{ $tim->nama_tim }}
                        <hr>
                    </div>
                @endforeach
            </div>

            {{ $tims->links() }}
        </div>
    </div>
@endsection