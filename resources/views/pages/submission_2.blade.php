@extends('layouts.base')

@section('title', 'Submit')

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>Submit Babak 2</h3>
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
        <p>Babak dua pengumpulan link video dan pamflet/poster dengan format zip</p>
        <div class="row">
            <div class="col-lg-12">

                <form class="contact-form" role="form" action="{{ route('kompetisi.submit.store', ['token' => $tim->submissionid]) }}" method="POST"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="" style="float: left;">Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                        <div class="validate"></div>
                    </div>

                    <div class="form-group">
                        <label for="" style="float: left;">Link Video Youtube</label>
                        <input type="text" name="link" class="form-control" placeholder="Link Video" required>
                        <div class="validate"></div>
                    </div>

                    <div class="form-group">
                        <label for="" style="float: left;">Silahkan masukan file (ZIP)</label>
                        <input type="file" name="file" class="form-control" id="contact-name" placeholder="File" required>
                    </div>

                    <div class="form-send">
                        <button type="submit" class="btn btn-large">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection