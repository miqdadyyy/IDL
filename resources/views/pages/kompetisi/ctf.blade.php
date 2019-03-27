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
                <img class="img-responsive" src="{{ asset('assets/img/kategori/ctf.png') }}" alt="">
            </div>

            <div class="col-lg-6">
                <h4>Capture The Flag</h4>
                <p>
                    Capture the Flag adalah salah satu jenis dari kompetisi hacking yang dimana mengharuskan seorang / tim untuk mengambil sebuah file / string yang sudah disembunyikan sistem yang dimana disebut dengan istilah “Flag”. Berbeda dari lomba lainnya seperti competitive programming yang dimana alatnya disediakan oleh panitia, Peserta CTF biasanya akan diminta untuk membawa peralatan (laptop/alat lainnya) sendiri dan diperbolehkan mempersiapkan script-script / programnya yang sudah ada dari waktu sebelum pertandingan.
                </p>
                <p>
                    Untuk tipe Capture the Flag sendiri ada berbagai macam, ada yang tipenya jeopardy, yang dimana jeopardy ini menggunakan server untuk menyimpan soal, yang dimana soalnya bisa berbentuk web exploitation, reverse engineering, binary exploitation, forensic, cryptography, steganography, dan lain lain dengan tujuan yang tetap sama yaitu mencari string/flag yang disembunyikan oleh server.
                </p>
                <p>
                    Untuk tipe lainnya ada Attack and Defense (War) yang dimana masing-masing peserta / tim akan diberikan virtual machine / image server. Yang nantinya peserta akan diminta menghardening sistem tersebut selamat periode waktu tertentu (fase bertahan), lalu nantinya akan masuk ke fase selanjutnya yaitu fase menyerang  yang dimana para competitor akan saling meyerang satu sistem dengan yang lainnya. Yang tujuan mendapatkan pointnya bisa berbeda, bisa dengan mendapatkan flag juga. Atau bisa dihitung dari waktu downtime yang dialami oleh competitor lainnya. (jadi pemenang dihitung dari waktu uptime server terbanyak).
                </p>
                <p>
                    <br/>
                    <a href="contact.html" class="btn btn-theme">Rule Book</a>
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