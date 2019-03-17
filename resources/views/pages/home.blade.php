@extends('layouts.base')

@section('title', 'IDLe')

@section('content')

    <div id="blue">
        <div class="container">
            <div class="row">
                <h3>Berita</h3>
            </div>
        </div>
    </div>

    <div class="container mtb">
        <div class="row">
            <div class="col-lg-12">
                @foreach($posts as $post)
                    <a href="{{ route('post.show', ['post' => $post->id]) }}"><h3 class="ctitle">{{ $post->title }}</h3></a>
                    <p>
                        <csmall>Tanggal: {{ date('d/m/Y - H:i', strtotime($post->created_at)) }}</csmall>
                        |
                        <csmall2>Oleh: {{ $post->user->name }}</csmall2>
                    </p>
                    {!! substr($post->description, 0, 100) !!}
                    <p><a href="{{ route('post.show', ['post' => $post->id]) }}">[Read More]</a></p>
                    <div class="hline"></div>
                    <div class="spacing"></div>
                @endforeach
            </div>

            {{ $posts->links() }}
        </div>
    </div>

@endsection