@extends('layouts.base')

@section('title','Dummy')

<!--  -->
@section('css')

@endsection

<!--  -->
@section('content')
  <!--Header-->
  <section id="header">
    <div class="container">
      <div class="row header-text">
        <div class="col-sm-8 pull-right text-right">
         <div class="margin-100">
          <h1>Meet Perth,</h1>
          <h3>A stupidly simple, flat PSD. Oh yeah, it's <strong><em>free</em></strong> too!</h3>
         </div>
          <a href="#" class="btn btn-primary btn-lg">Download <i class="fa fa-cloud-download"></i></a>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4 text-center wow fadeInUp">
          <img class="header-img" src="img/header1.png" alt="Header Image">
        </div>
      </div>

    </div>
  </section>


  <!--Main 1-->
  <section id="main1">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 margin-30">
          <h2>A Long Winded Header</h2><br />
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><br />
          <blockquote>
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </blockquote>
          <br />
          <a href="#" class="btn btn-secondary btn-lg">Say Hello <i class="fa fa-envelope"></i></a>
        </div>

        <div class="col-sm-6 wow fadeInUpBig">
          <img class="main1-img img-responsive pull-right" src="img/main1.png" alt="Main1 Image">
        </div>
      </div>
    </div>
  </section>

  <!--Main 2-->
  <section id="main2">
    <div class="container">
      <div class="row">

        <div class="col-sm-6 wow fadeInUpBig">
          <img class="main2-img pull-left" src="img/main2.png" alt="Main2 Image">
        </div>

        <div class="col-sm-6 margin-30">
          <h2>Another Header Section</h2><br />
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p><br />

          <br />
          <a href="#" class="btn btn-secondary btn-lg">View On Dribbble <i class="fa fa-dribbble"></i></a>
        </div>

      </div>
    </div>
  </section>

  <!--Message-->
  <section id="message">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="white">Another Header Section</h2>
          <a href="#" class="btn btn-primary btn-lg">Buy Me A Beer <i class="fa fa-beer"></i></a>
        </div>
      </div>
    </div>
  </section>


  <!--Bottom-->
  <section id="bottom">
    <div class="container">

      <div class="row margin-40">
        <div class="col-sm-12 text-center">
          <ul class="list-inline social">
            <li class="wow slideInLeft" data-wow-delay="0.3s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
            <li class="wow slideInLeft" ><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
            <li class="wow slideInRight" ><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
            <li class="wow slideInRight" data-wow-delay="0.3s"><a href="#"><i class="fa fa-github fa-2x"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 text-center">
          <p><strong><em>Join the newsletter</em></strong></p>
          <form class="form-inline" role="form">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-secondary btn-lg">Sign in</button>
          </form>
        </div>
      </div>

    </div>
  </section>
@endsection

<!--  -->
@section('js')

@endsection
