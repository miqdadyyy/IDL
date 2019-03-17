@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Selamat',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

    <p>Selamat <b> {{ $tim_->nama_tim }} </b>, anda berhasil lolos ke {{ $tahap }} dalam kategori {{ $kategori->nama_kategori }}.</p>

    @include('beautymail::templates.sunny.contentEnd')

    @if($kategori->kategori == 'cpc' || $kategori->kategori == 'ctf')

    @else
        @include('beautymail::templates.sunny.contentStart')
        <p>Berikut adalah kode submission anda : </p>
        <p><b>{{ $kode }}</b></p>
        @include('beautymail::templates.sunny.contentEnd')
    @endif
@stop