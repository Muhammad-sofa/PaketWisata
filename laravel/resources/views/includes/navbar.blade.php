    <!-- navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <!-- logo -->
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="{{url('frontend/images/logoCompany.png')}}" alt="Logo Softravel" />
            </a>
            <!-- nama perusahaan -->
            <a href="{{route('home')}}" class="navbar-company">
                <h2>Lovely Corpin Tour & Travel </h2>
            </a>
            <!-- button -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2"><a href="{{route('home')}}" class="nav-link active">Home</a></li>
                    <li class="nav-item mx-md-2"><a href="#popularContent" class="nav-link">Paket Travel</a></li>
                    <li class="nav-item mx-md-2"><a href="{{ route('dashboardahp') }}" class="nav-link">AHP</a></li>
                    {{-- <li class="nav-item dropdpwn">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="navbardrop"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Link1</a>
                                <a href="#" class="dropdown-item">Link2</a>
                                <a href="#" class="dropdown-item">Link3</a>
                            </div>
                    </li> --}}
                    <!--<li class="nav-item mx-md-2"><a href="#testimonialheading" class="nav-link">Testimonial</a></li>-->
                </ul>

                @guest
                <!--Mobile Button-->
                <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
                        Masuk
                    </button>
                </form>

                <!--desktop Buttom-->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
                        Masuk
                    </button>
                </form>
                @endguest

                @auth
    <!-- Mobile Button -->
        <form class="form-inline d-sm-block d-md-none" action="{{  url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-login my-2 my-sm-0" type="submit">
                Keluar
            </button>
        </form>

        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{  url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                Keluar
            </button>
        </form>
    @endauth

            </div>
        </nav>
    </div>