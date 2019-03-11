@extends('layouts.base')

@section('title','IDLe')

<!--  -->
@section('css')
<style media="screen">

  .gradient-down{
    background-image: linear-gradient(180deg, #66ff99 , #FCFCFC);
    height: 40px;
  }
  .tema-event{
    color: #333333;
    font-weight: 500;
    font-size: 2.5rem;
    line-height: 1.2;
  }
  .head-section{
    color: #0F5189;
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
  }
  section{
    padding: 20px 0 0 0;
  }
  p{
    color: #000;
    /* text-align: center; */
  }
  #timeline ul{
    padding-left: 20px
  }
  #timeline li{
    list-style-type: none;
    color: #000;
    line-height: 40px;
    font-size: 20px;
  }
  #timeline b{
    font-weight: bolder;
    color: #0F5189;
  }
  #center{
    text-align: center;
  }
  #white{
    color: white;
  }
  #img-limit{
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 400px;
  }
  #logo-org{
    width: 60px;
  }
  #logo-lomba{
    max-width: 240px;
  }
  .img-v-center{
    margin-top: 16%;
  }
@media (max-width: 767px) {
    .img-v-center{
      margin-top: 5px;
    }
    .sdgs-ilus{
      display: none;
    }
  }
.sdgs-ilus{
  padding-top: 10%;
  margin-left: 20%;
  width: 400px;
  height: 350px;
  background: url(img/sdgs-ilus.png) no-repeat center right;
  background-size: cover;
}
  /* background */
.big-bg{
  min-height: 650px;
  background: url(img/soft-back.png) no-repeat center center;
  background-size: contain;
}
.home-header{
  min-height: 650px;
  background: url(img/banner-top-1.png) no-repeat center center;
  background-size: cover;
}
.home-timeline{
  min-height: 650px;
  background: url(img/bg-content-2.png) no-repeat center center;
  background-size: cover;
}

</style>
@endsection

<!--  -->
@section('content')
  <section class="home-header" >
    <div class="home-header-inner">
      <div class="container">
        <div class="row" >
          <div class="col-sm-6" style="margin-top:175px;">
            <div style="margin-left:5%">
              <h2 >IDLe 2019</h2>
              <h3 class="tema-event">Inovasi IT dalam Pembangunan Berkelanjutan untuk Mempersiapkan Revolusi Industri 4.0</h3>
              <img id="logo-org" class="wow slideInLeft" data-wow-delay="0.6s" src="img/org_himasif.png" alt="Himasif">
              <img id="logo-org" class="wow slideInLeft" data-wow-delay="0.3s" src="img/org_himatif.png" alt="Himatif">
              <img id="logo-org" class="wow slideInLeft" src="img/org_laos.png" alt="LaOS">
            </div>
          </div>
          <div class="col-sm-6" style="margin-top:150px;">
            <div class="sdgs-ilus wow fadeInDownBig"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="event-desc" id="tentang" style="background-color:#66ff99;padding:50px 0 2% 0">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 wow fadeInUpBig">
          <img id="img-limit" src="img/img-about.png" alt="TentangIDLe">
        </div>
        <div class="col-sm-6">
          <h3 class="head-section wow fadeIn">Tentang IDLe</h3>
          <p class="wow slideInRight">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><br />
        </div>
      </div>
    </div>
</section>
<div class="gradient-down" id="lomba"></div>
<section style="background-color:#FCFCFC;">
  <div class="container">
    <h3 class="head-section wow fadeIn">Ragam Lomba</h3>
    <p id="center">Lomba-lomba yang tergabung dalam <b>IDLe 2019</b></p>
    <div class="row margin-40">
      <div class="col-sm-12 text-center">
        <ul class="list-inline social">
          <li class="wow slideInLeft" data-wow-delay="0.3s">
            <img src="img/logo_isic.png" alt="ISIC" id="logo-lomba">
            <h4>ISIC</h4>
            <a class="btn-dark" href="/isic">Selengkapnya</a><br>
            <a class="btn-light" href="#">Download Guidebook</a>
          </li>
          <li class="wow slideInLeft" >
            <img src="img/logo_itec.png" alt="ITeC" id="logo-lomba">
            <h4>ITeC</h4>
            <a class="btn-dark" href="/itec">Selengkapnya</a><br>
            <a class="btn-light" href="#">Download Guidebook</a>
          </li>
          <li class="wow slideInRight" >
            <img src="img/logo_laosarena.png" alt="Laos Arena" id="logo-lomba">
            <h4>Laos Arena</h4>
            <a class="btn-dark" href="/laos-arena">Selengkapnya</a><br>
            <a class="btn-light" href="#">Download Guidebook</a>
          </li>
          <li class="wow slideInRight" data-wow-delay="0.3s">
            <img src="img/logo_pkmgo.png" alt="PKM-GO" id="logo-lomba">
            <h4>PKM GO</h4>
            <a class="btn-dark" href="/pkm-go">Selengkapnya</a><br>
            <a class="btn-light" href="#">Download Guidebook</a>
          </li>
        </ul>
        </div>
      </div>
  </div>
</section>

<section class="home-timeline" id="timeline" style="background-color:#FCFCFC;padding:50px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 margin">
        <h3 class="head-section wow fadeIn" >Timeline</h3>
        <div class="wow slideInLeft" style="margin-bottom: 20px;">
          <p >Persiapkan dirimu untuk berpartisipasi dalam rangkaian acara IDLe 2019</p>
          <ul >
            <li><b>00 Maret 2019</b> Pembukaan Acara</li>
            <li><b>00 Maret 2019 - 00 April 2019</b> Rangkaian Pelaksanaan Lomba</li>
            <li><b>00 Maret 2019</b> Penutupan Acara</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 wow fadeInUpBig">
        <img id="img-limit" class="img-v-center" src="img/img-timeline.png" alt="Timeline">
      </div>
    </div>
  </div>
</section>
<section id="support" style="background-color:#FCFCFC;">
  <h3 class="head-section wow fadeIn">Sponsor</h3>
  <div class="row">
    <div class="col">
      <img src="" alt="">
    </div>
    <div class="col">
      <img src="" alt="">
    </div>
    <div class="col">
      <img src="" alt="">
    </div>
  </div>
</section>
@endsection

<!--  -->
@section('js')

@endsection
