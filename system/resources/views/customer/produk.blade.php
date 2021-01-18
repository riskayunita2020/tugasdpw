@extends('customer.base')

@section('content')
    <section class="section" id="trainers">
        <div class="container">

            <form action="{{('filter')}}" class="search-form" method="get">
                <br><br><br>
                <div class="form-group">
                  <input type="input" class="form-control" placeholder="Cari nama produk..." name="nama" value="{{$nama ?? ''}}">
                </div>
              </form>

            <div class="row">
                @foreach($show_produk as $data)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="public/assets/images/product-1-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>$</sup>17.00
                            </span>

                            <h4>{{$data->nama_produk}}</h4>

                            <ul class="social-icons">
                                <li class="btn btn-success float-right"><a href="{{url('produk_single' ,$data->id)}}">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
@endsection