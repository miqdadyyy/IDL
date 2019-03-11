@extends('layouts.base')

@section('title','Submisi')

<!--  -->
@section('css')
<link rel="stylesheet" href="css/page.css">
<style media="screen">
  body{
    background-image: linear-gradient(to bottom right, #66ff99 , #0F5189);
    /* background-color: rgba(102, 255, 153, 0.3) */
  }
  .btn-dark{
    width: 100%;
  }
  .full{
    min-height: 720px;
  }
  .card{
    margin:auto;
    margin-top: 150px;
    background-color: white;

    min-width: 320px;
    max-width: 80%;
    min-height: 600px;
    overflow: hidden;
    box-shadow: 0px 10px 15px 0px rgba(0, 0, 0, 0.5);
    position: relative;
    border-radius: 10px;
  }
  .card .logo{
    margin:auto;
    height: 150px;
    margin-top: 30px;
  }
  .content{
    margin: 20px 10% 20px 10%
  }
/* Form */


</style>
@endsection

<!--  -->
@section('content')
<section class="full">
  <div class="card">
    <div class="logo"></div>
    <div class="content">
      <form method="post" action="#" id="#">
        <div class="form-group">
          <label for="peserta">Peserta</label>
          <input type="text" class="form-control" placeholder="Peserta" id="peserta" name="peserta">
        </div>
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select class="form-control" id="kategori" name="kategori">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" placeholder="Judul" id="judul" name="judul">
        </div>
        <div class="form-group">
          <button type="button" class="btn-dark" name="button">Unggah & Daftar</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection

<!--  -->
@section('js')
<script type="text/javascript">

</script>
@endsection
