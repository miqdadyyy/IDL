@extends('layouts.base')

@section('title','ISIC')
<!--  -->
@section('css')
<link rel="stylesheet" href="css/page.css">
@endsection
<!--  -->
@section('content')
<section class="isi wow fadeInUp" style="">
  <div class="container">
    <img class="wow fadeIn" src="img/logo_isic.png" alt="ISIC" id="img-limit">
    <h1>ISIC</h1>
    <h2>Deskripsi Event</h2>
    <p><b>Description will be goes here.</b> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    <h2>Contact Person</h2>
    <ul>
      <li>Sifulan</li>
      <li>Line: Fulan</li>
      <li>WA: 082200100100</li>
    </ul>
    <a class="btn-dark" href="#">Download Guidebook</a>
  </div>
</section>
<hr>
<section class="page-timeline wow fadeInUp" id="timeline" style="padding:50px;">
  <div class="container">
    <h2>Timeline Event</h2>
    <div class="timeline">
      <div class="timeline__group">
        <span class="timeline__year">2019</span>
        <div class="timeline__box">
          <div class="timeline__date">
            <span class="timeline__day">xx</span>
            <span class="timeline__month">Maret</span>
          </div>
          <div class="timeline__post">
            <div class="timeline__content">
              <p><b>Opening Ceremony</b><br>Dilakasanakan di ..., Pukul ....</p>
            </div>
          </div>
        </div>
        <div class="timeline__box">
          <div class="timeline__date">
            <span class="timeline__day">xx</span>
            <span class="timeline__month">Maret</span>
          </div>
          <div class="timeline__post">
            <div class="timeline__content">
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>
          </div>
        </div>
        <div class="timeline__box">
          <div class="timeline__date">
            <span class="timeline__day">xx</span>
            <span class="timeline__month">April</span>
          </div>
          <div class="timeline__post">
            <div class="timeline__content">
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>
          </div>
        </div>
        <div class="timeline__box">
          <div class="timeline__date">
            <span class="timeline__day">xx</span>
            <span class="timeline__month">April</span>
          </div>
          <div class="timeline__post">
            <div class="timeline__content">
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection

<!--  -->
@section('js')

@endsection
