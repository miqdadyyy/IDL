@extends('layouts.base')

@section('title', $post->title)

@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>IDLe Post</h3>
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

            <div class="col-lg-12">

                <a href="{{ route('post.show', ['post' => $post->id]) }}"><h3 class="ctitle">{{ $post->title }}</h3></a>
                <p>
                    <csmall>Tanggal: {{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</csmall>
                    |
                    <csmall2>Oleh: {{ $post->user->name }}</csmall2>
                </p>

                {!! $post->description !!}

            </div>
        </div>
    </div>
@endsection