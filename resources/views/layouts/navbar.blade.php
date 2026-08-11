<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ url('/dashboard') }}">
            POS
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="{{ route('admin.users') }}">
                       Users
                  </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/produk') }}">
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/penjualan') }}">
                        Penjualan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jenis-produk.index') }}">
                        Jenis Produk
                    </a>
                </li>
             
                <li class="nav-item">
                   <a class="nav-link" href="{{ route('tentang') }}">
                         Tentang
                  </a>
               </li>
            </ul>

            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
               <button class="btn btn-info text-white">
                   Logout
              </button>
                </form>
            @endauth

        </div>
    </div>
</nav>