@extends('layouts.base')

@section('title', 'IDLe ' . $kategori->nama_kategori)

@section('css')
@endsection

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="clearfix">Kompetisi {{ $kategori->nama_kategori }}</h3>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /blue -->


    <!-- *****************************************************************************************************************
       AGENCY ABOUT
       ***************************************************************************************************************** -->

    <div class="container mtb">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-responsive" src="{{ asset('assets/img/kategori/ppl.jpg') }}" alt="">
            </div>
            <div class="col-lg-6">
                <h4>Pengembangan Perangkat Lunak</h4>
                <p>Pengembangan perangkat lunak adalah pengembangan suatu produk perangkat lunak yang mencakup penelitian, pengembangan baru, purwarupa, modifikasi, pemakaian kembali, rekayasa ulang, pengelolaan, atau aktivitas lain yang menghasilkan produk perangkat lunak.
                    Lomba pengembangan perangkat lunak menguji kemampuan peserta dalam mengembangkan ide secara kreatif untuk memberikan solusi penyelesaian masalah di Indonesia dalam bentuk perangkat lunak berkualitas tinggi.
                </p>
                <p>
                    <br/>
                    <a href="{{ asset('assets/rulebook/PPL.pdf') }}" class="btn btn-theme">Rule Book</a>
                    <a href="{{ route('kompetisi.peserta', ['kategori' => $kategori->id]) }}" class="btn btn-theme">Daftar Peserta</a>
                </p>
            </div>
        </div>
    </div>


    <div id="twrap">
        <div class="container centered">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="color: #fff;">
                    <h1>Register</h1>

                    <form class="contact-form" role="form" action="{{ route('kompetisi.store', ['kategori' => $kategori->id]) }}"
                          method="POST">
                        @csrf
                        <input type="hidden" value="{{ $kategori->id }}" name="kategori">
                        <div class="form-group">
                            <label for="" style="float: left;">Nama Tim</label>
                            <input type="name" name="nama_tim" class="form-control" id="contact-name" value="{{ old('nama_tim') }}"
                                   placeholder="Nama Tim" required>
                            <div class="validate"></div>
                        </div>
                        <br>
                        <div>
                            <div class="form-group">
                                <label for="" style="float: left;">Nama Ketua Tim</label>
                                <input type="name" name="nama[]" class="form-control" placeholder="Nama" required value="{{ old('nama[0]') }}">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">NIM Ketua Tim</label>
                                <input type="number" name="nim[]" class="form-control" placeholder="NIM" required value="{{ old('nim[1]') }}">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">Email Ketua Tim</label>
                                <input type="email" name="email[]" class="form-control" placeholder="Email" required value="{{ old('email[1]') }}">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">No HP (WA) Ketua Tim</label>
                                <input type="text" name="no_hp[]" class="form-control" placeholder="No HP" required value="{{ old('no_hp[0]') }}">
                                <div class="validate"></div>
                            </div>
                        </div>

                        <br><br><br>

                        <div>
                            <div class="form-group">
                                <label for="" style="float: left;">Nama Anggota Tim</label>
                                <input type="name" name="nama[]" class="form-control" placeholder="Nama" required>
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">NIM Anggota Tim</label>
                                <input type="number" name="nim[]" class="form-control" placeholder="NIM" required>
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">Email Anggota Tim</label>
                                <input type="email" name="email[]" class="form-control" placeholder="Email" required>
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">No HP (WA) Anggota Tim</label>
                                <input type="text" name="no_hp[]" class="form-control" placeholder="No HP" required>
                                <div class="validate"></div>
                            </div>
                        </div>

                        <br>

                        <div>
                            <div class="form-group">
                                <label for="" style="float: left;">Nama Anggota Tim</label>
                                <input type="name" name="nama[]" class="form-control" placeholder="Nama">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">NIM Anggota Tim</label>
                                <input type="number" name="nim[]" class="form-control" placeholder="NIM">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">Email Anggota Tim</label>
                                <input type="email" name="email[]" class="form-control" placeholder="Email">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">No HP (WA) Anggota Tim</label>
                                <input type="text" name="no_hp[]" class="form-control" placeholder="No HP">
                                <div class="validate"></div>
                            </div>
                        </div>

                        <div class="form-send">
                            <button type="submit" class="btn btn-large">Submit</button>
                        </div>

                        <br>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection