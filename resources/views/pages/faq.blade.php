@extends('layouts.base')

@section('title', 'IDLe FAQ')

@section('css')
<style media="screen">
  body{
    background-color: #F3F2F0;
  }
  .card{
    border-radius: 10px;
    padding: 25px 10%;
  }
</style>
@endsection

@section('content')
    <div class="container hero" style="margin-top: 1px;">
        <div class="row">
            <div class="col-md-12" style="height: auto;padding-top: 62px;">
                <div style="margin-bottom: 11px;">
                    <h1  style="color: rgb(0,0,0);margin-top: 71px;, sans-serif;"></h1>
                    <h1 class="text-center page_title">FAQ</h1>
                    <h5 class="text-center">Frequently Asked Question</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- *****************************************************************************************************************
       DESCRIPTION
       ***************************************************************************************************************** -->
   <div class="card">
       <div class="card-body">
            <div id="accordion">
                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q1" aria-expanded="true" aria-controls="collapseOne">
                        Q1: Apa itu IDLe?
                      </button>
                    </h5>
                </div>
                <div id="Q1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q2" aria-expanded="true" aria-controls="collapseOne">
                        Q2: Pertanyaan #2
                      </button>
                    </h5>
                </div>
                <div id="Q2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q3" aria-expanded="true" aria-controls="collapseOne">
                        Q3: Pertanyaan #3
                      </button>
                    </h5>
                </div>
                <div id="Q3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q4" aria-expanded="true" aria-controls="collapseOne">
                        Q4: Pertanyaan #4
                      </button>
                    </h5>
                </div>
                <div id="Q4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q5" aria-expanded="true" aria-controls="collapseOne">
                        Q5: Pertanyaan #5
                      </button>
                    </h5>
                </div>
                <div id="Q5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q6" aria-expanded="true" aria-controls="collapseOne">
                        Q6: Pertanyaan #6
                      </button>
                    </h5>
                </div>
                <div id="Q6" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q7" aria-expanded="true" aria-controls="collapseOne">
                        Q7: Pertanyaan #7
                      </button>
                    </h5>
                </div>
                <div id="Q7" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q8" aria-expanded="true" aria-controls="collapseOne">
                        Q8: Pertanyaan #8
                      </button>
                    </h5>
                </div>
                <div id="Q8" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

                <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#Q9" aria-expanded="true" aria-controls="collapseOne">
                        Q9: Pertanyaan #9
                      </button>
                    </h5>
                </div>
                <div id="Q9" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>

            </div>
       </div>
   </div>

   <div class="card" style="margin-top: 10px;">
       <div class="card-body">
           <h2>Belum menemukan jawaban yang tepat?</h2>
           <small>Kirim pesan via Whatsapp</small>
           <form class="" action="{{ route('faq.ask') }}" method="post" autocomplete="off">
             @csrf
              <div class="form-group">
                 <label>Nama Tim</label>
                 <input class="form-control" type="text" name="nama_tim" required placeholder="Nama Tim">
              </div>
              <div class="form-group">
                 <label>Bidang Lomba</label>
                 <select class="form-control" name="kategori" required>
                    <option value="0" disabled>--Pilih bidang lomba--</option>
                    @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
                    @endforeach
                 </select>
              </div>
              <div class="form-group">
                  <label>Isi Pesan</label>
                  <textarea name="pesan" rows="4" style="width:100%" required></textarea>
              </div>
              <button class="btn btn-success shadow" type="submit">Tanyakan</button>
           </form>
       </div>
    </div>

@endsection
