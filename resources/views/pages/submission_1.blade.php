@extends('layouts.base')

@section('title', 'Submit')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>Submit babak 1</h3>
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
        @foreach ($errors->all() as $error)
            <li style="color: red">{{ $error }}</li>
        @endforeach
        <h2>Halo, {{$tim->nama_tim}}</h2>
        <p>Pada tahap pertama {{$tim->kategori->nama_kategori}} adalah pengumpulan proposal dalam format <b>.PDF</b></p>
        <div class="row">
            <div class="col-lg-12">
                <form class="contact-form" role="form" action="{{ route('kompetisi.submit.store', ['token' => $tim->submissionid]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="" style="float: left;">Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                        <div class="validate"></div>
                    </div>

                    <div class="form-group">
                        <label for="" style="float: left;">Silahkan masukan file (PDF)</label>
                        <input type="file" name="file" class="form-control" id="contact-name" placeholder="File" required>
                    </div>

                    <small style="color:red">Pastikan ukuran file tidak lebih dari 5 Mb.</small>

                    <div class="form-send">
                        <button type="submit" class="btn btn-large">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
