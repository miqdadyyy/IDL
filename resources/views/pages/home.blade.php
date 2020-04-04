@extends('layouts.base')

@section('title', 'IDLe')

@section('css')
    <style>
        .container{
          margin-top: 20pt;
          margin-bottom: 25pt;
        }
    </style>
@endsection

@section('content')
  <div class="header-blue">
      <div class="container hero" style="margin-top: 0px;">
          <div class="row" id="top">
              <div class="col-12 col-lg-6 col-xl-5 offset-xl-1 bounce animated">
                  <h1 style="color: rgb(0,0,0);margin-top: 93px;font-family: Nunito, sans-serif;font-style: normal;font-weight: bold;">ILKOM Developer League</h1>
                  <p style="color: rgba(0,0,0,0.8);font-family: Nunito, sans-serif;">Inovasi IT dalam Sustainable Development Goals untuk mempersiapkan Revolusi Industri 4.0</p>
                  <p style="color: rgba(0,0,0,0.8);font-family: Nunito, sans-serif;">Powered by</p>
                  <div style="margin-top: -31px;">
                      <div class="row">
                          <div class="col-3 col-md-3" style="padding-right: 0px;padding-left: 0px;"><img src="assets/img/himasif.png" style="height: 80px;"></div>
                          <div class="col-3 col-md-3" style="padding-left: 0px;padding-right: 0px;"><img src="assets/img/himatif.png" style="height: 87px;"></div>
                          <div class="col-3 col-md-3" style="padding-left: 0px;padding-right: 0px;"><img src="assets/img/hmif.png" style="height: 87px;"></div>
                          <div class="col-3 col-md-3" style="padding-left: 0px;padding-right: 0px;"><img src="assets/img/laos.png" style="height: 71px;"></div>
                      </div>
                  </div>
                  <a href="/faq" class="btn btn-success shadow" data-bs-hover-animate="pulse" style="margin-top: 13px;"> Tentang IDLe</a>
              </div>
              <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                  <div class="iphone-mockup">
                      <img class="bounce animated device" src="assets/img/laning2.png" style="width: 402px;">
                  </div>
              </div>
          </div>
        </div>
    </div>

    <div style="padding-botom: 45px;">
        <div class="row">
            <div class="col-md-4 align-self-center">
                <h1 class="text-center" style="color: rgb(0,0,0);font-family: Nunito, sans-serif;font-weight: bold;">Bidang Lomba</h1>
                <!-- <p class="text-center">Lorem Ipsum Dolor lur</p> -->
            </div>
            <div class="col-md-8" style="padding-bottom: 20px;">
                <div class="d-flex flex-row multiple-item-slider" style="margin-top: 18px;width: auto;height: auto;">
                    <section class="horitzontalScroll">
                        @foreach($kategoris as $kategori)
                        <a href="{{ route('kompetisi.index', ['kategori' => $kategori->kategori]) }}" style="margin-right: 0px;width: auto;height: auto;">
                            <div class="horitzontalScrollContent mr-3 ml-2">
                                <div class="card shadow">
                                    <div class="card-body"><img src="{{asset('assets/img/kategori/'.$kategori->kategori.'.jpg')}}" style="height: 194px;">
                                        <h4 class="text-center card-title" style="color: rgb(0,0,0);font-family: Nunito, sans-serif;font-style: normal;font-weight: bold;margin-top: 7px;">{{ $kategori->nama_kategori }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="container mtb" id="berita">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <h1 class="text-center" style="color: rgb(0,0,0);font-family: Nunito, sans-serif;font-weight: bold;">Berita Terbaru</h1>
            </div>
            <div class="col-lg-12">
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <a href="{{ route('post.show', ['post' => $post->id]) }}"><h3
                                    class="ctitle">{{ $post->title }}</h3></a>
                        <p>
                            <csmall>Tanggal: {{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</csmall>
                            |
                            <csmall2>Oleh: {{ $post->user->name }}</csmall2>
                        </p>
                        {!! strip_tags(substr($post->description, 0, 100)) !!}

                        <p><a href="{{ route('post.show', ['post' => $post->id]) }}">[Read More]</a></p>
                        <div class="hline"></div>
                        <div class="spacing"></div>
                    @endforeach
                @else
                    <h3 style="text-align: center; opacity: 0.4">Belum ada berita yang dibuat</h3>
                @endif
            </div>

            {{ $posts->links() }}
        </div>
    </div>

    <div class="box-event">
            <div class="d-flex flex-row justify-content-center">
                <img class="events" src="{{asset('assets/img/bits.png')}}" alt="">
                <img class="events" src="{{asset('assets/img/itec.png')}}" alt="">
                <img class="events" src="{{asset('assets/img/logo_idle.png')}}" alt="">
                <img class="events" src="{{asset('assets/img/laos_arena.png')}}" alt="">
            </div>
    </div>
@endsection
