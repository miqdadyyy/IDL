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
                <img class="img-responsive" src="{{ asset('assets/img/kategori/pkm.png') }}" alt="">
            </div>

            <div class="col-lg-6">
                <h4>PKM-GO</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. </p>
                <p>
                <p><b>Rulebook : </b></p>
                <a href="{{ asset('assets/rulebook/pkm/PKM-AI.pdf') }}" class="btn btn-theme">PKM-AI</a>
                <a href="{{ asset('assets/rulebook/pkm/PKM-GFK.pdf') }}" class="btn btn-theme">PKM-GFK</a>
                <a href="{{ asset('assets/rulebook/pkm/PKM-GT.pdf') }}" class="btn btn-theme">PKM-GT</a>
                <a href="{{ asset('assets/rulebook/pkm/PKM-K.pdf') }}" class="btn btn-theme">PKM-K</a>
                <a href="{{ asset('assets/rulebook/pkm/PKM-KC.pdf') }}" class="btn btn-theme">PKM-KC</a>
                <a href="{{ asset('assets/rulebook/pkm/PKM-M.pdf') }}" class="btn btn-theme">PKM-M</a>
                <a href="{{ asset('assets/rulebook/pkm/PKM-P.pdf') }}" class="btn btn-theme">PKM-P</a>
                <a href="{{ asset('assets/rulebook/pkm/PKM-T.pdf') }}" class="btn btn-theme">PKM-T</a>
                <p><b>Lampiran : </b></p>
                <a href="{{ asset('assets/rulebook/pkm/LAMPIRAN.pdf') }}" class="btn btn-theme">Lampiran</a>
                <br>
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

                    <form class="contact-form" role="form"
                          action="{{ route('kompetisi.store', ['kategori' => $kategori->id]) }}"
                          method="POST">
                        @csrf
                        <input type="hidden" value="{{ $kategori->id }}" name="kategori">
                        <div class="form-group">
                            <label for="" style="float: left;">Nama Tim</label>
                            <input type="name" name="nama_tim" class="form-control" id="contact-name"
                                   value="{{ old('nama_tim') }}"
                                   placeholder="Nama Tim" required>
                            <div class="validate"></div>
                        </div>
                        <br>
                        <div>
                            <div class="form-group">
                                <label for="" style="float: left;">Nama Ketua Tim</label>
                                <input type="name" name="nama[]" class="form-control" placeholder="Nama" required
                                       value="{{ old('nama[0]') }}">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">NIM Ketua Tim</label>
                                <input type="number" name="nim[]" class="form-control" placeholder="NIM" required
                                       value="{{ old('nim[1]') }}">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">Email Ketua Tim</label>
                                <input type="email" name="email[]" class="form-control" placeholder="Email" required
                                       value="{{ old('email[1]') }}">
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="" style="float: left;">No HP (WA) Ketua Tim</label>
                                <input type="text" name="no_hp[]" class="form-control" placeholder="No HP" required
                                       value="{{ old('no_hp[0]') }}">
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