@extends('layouts.base')

@section('title', 'IDLe')

@section('css')
    <style>

    </style>
@endsection

@section('content')

    <div id="blue">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/IDL.png') }}" alt="" style="width: 50%; margin-bottom: 40px" class="center-block">
                    <h3 class="text-center" style="color: white"><i>"Inovasi IT dalam pembangungan berkelanjutan untuk mempersiapkan revolusi industri 4.0"</i></h3>
                </div>
                <div class="col-md-6">
                    <p class="text-center" style="color: white; font-size: 20px;">Presented by : </p>
                    <div class="col-md-12 text-center">
                        <div class="col-md-6" style="min-height: 100px; margin-bottom: 30px; margin-top: 30px">
                            <img src="{{ asset('assets/img/BITS.png') }}" alt="" style="vertical-align: center">
                        </div>
                        <div class="col-md-6" style="min-height: 100px; margin-bottom: 30px; margin-top: 30px">
                            <img src="{{ asset('assets/img/LA.png') }}" alt="" style="vertical-align: center">
                        </div>
                        <div class="col-md-6" style="min-height: 100px; margin-bottom: 30px; margin-top: 30px">
                            <img src="{{ asset('assets/img/ITEC.png') }}" alt="" style="vertical-align: center">
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('assets/img/HIMASIF.png') }}" alt="" style="width: 5%">
                    <img src="{{ asset('assets/img/LAOS.png') }}" alt="" style="width: 4%">
                    <img src="{{ asset('assets/img/HIMATIF.png') }}" alt="" style="width: 6%">
                </div>

            </div>
        </div>
    </div>

    <div class="container mtb">
        <div class="row">
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

@endsection