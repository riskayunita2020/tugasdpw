
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/')}}">RiskaClothing</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{ url('/')}}" class="nav-link">Beranda</a></li>
              <li class="nav-item dropdown">

           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{url('pakaian')}}">Pakaian</a>
                <a class="dropdown-item" href="{{url('sepatu')}}">Sepatu</a>
                <a class="dropdown-item" href="{{url('celana')}}">Celana</a>
              </div>
            </li>

              <li class="nav-item"><a href="{{ url('about')}}" class="nav-link">Tentang</a></li>
              <li class="nav-item"><a href="{{ url('blog')}}" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="{{ url('kontak')}}" class="nav-link">Kontak</a></li>
              <li class="nav-item"><a href="{{ url('login')}}" class="nav-link">Login</a></li>
              <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[120]</a></li>

            </ul>
          </div>
        </div>
      </nav>
