@extends('customer.base')

@section('content')
    <!-- ***** Fleet Starts ***** -->
    <section class="section">
        <div class="container">
            <br>
            <br>

            <div class="row">
              <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{url("public/$produk->foto")}}" alt="First slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <br>
              </div>

              <div class="col-md-4">
                <div class="contact-form">
                  <form action="#" id="contact">
                    <div class="form-group">
                      <h3>{{$produk->nama_produk}}</h3>
                    </div>
                    
                    <label>Stok : {{$produk->stok}} | Berat : {{$produk->berat}} | Seller : {{$produk->seller->username}}</label>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Harga</label><br>
                        Rp. {{number_format($produk->harga)}}
                      </div>
                    </div>
                    
                    <div class="main-button">
                        <p>{!! nl2br($produk->deskripsi) !!}</p>
                    </div>
                  </form>
                </div>

                <br>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

@endsection