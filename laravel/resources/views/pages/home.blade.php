@extends('layouts.app')

@section('title')
    Lovely Corpin Tour & Travel
@endsection

@section('content')
        <!-- header -->
        <header class="text-center">
            <h1>Selamat Datang di Lovely Corpin, <br> As Easy One Click</h1>
            <p class="mt-3">It is not just a holiday, Liburan Anda terasa lebih bermakna bersama kami.
                <br> Enjoy your authentic moment - Spend time with beloved ones
            </p>

            <a href="#popularContent" class="btn btn-get-started px-4 mt-4">Get Started</a>
        </header>

        <main>
            {{-- <!-- statistics -->
            <div class="container">
                <section class="section-stats row justify-content-center" id="stats">
                    <div class="col-3 col-md-2 stats-detail">
                        <div class="h4 mb-0 font-weight-bold text-gray-800">{{$travel_package}}</div>
                        <p>Paket Travel</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>35</h2>
                        <p>Hotel</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail">
                        <h2>4</h2>
                        <p>Partners</p>
                    </div>
                </section>
            </div> --}}

            <!-- popular -->
            <section class="section-popular" id="popular">
                <div class="container">
                    <div class="row">
                        <div class="col text-center section-popular-heading">
                            <h2>Wisata Popular</h2>
                            <p>Something that you never try <br> before in this world</p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- wisata popular -->
            <section class="section-popular-content" id="popularContent">
                <div class="container text-center section-popular-travel">
                    <h4>Search :</h4>
                    <form action="/cari" method="GET">
	                    <input type="text" name="cari" placeholder="Harga .." value="{{ old('cari') }}"> &nbsp
	                    <button type="submit" class="btn btn-primary" value="CARI">Cari</button>
                    </form>
                    <br><br>
                    <div class="section-popular-travel row justify-content-center">
                        @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                    style="background-image: url('{{$item->galleries->count()? Storage::url($item->galleries->first()->image) : ''}}');">
                                <div class="travel-country">{{$item->location}}</div>
                                <div class="travel-location">{{$item->title}}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{route('detail', $item->slug)}}" class="btn btn-travel-details px-4">View Details</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <!-- network partner -->
            <section class="section-networks" id="networks">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Partners</h2>
                            <p>Companies are trusted us <br> more than just trip</p>
                        </div>
                        <div class="col-md-8 text-center">
                            <img src="frontend/images/garuda.jpg" alt="logo partner" class="img-partner">
                            <img src="frontend/images/lionair.jpg" alt="logo partner" class="img-partner">
                            <img src="frontend/images/batikair.jpg" alt="logo partner" class="img-partner">
                            <img src="frontend/images/emirates.png" alt="logo partner" class="img-partner">
                        </div>

                    </div>
                </div>
            </section>

            <!--<section class="section-testimonial-heading" id="testimonialheading">-->
            <!--    <div class="container">-->
            <!--        <div class="row">-->
            <!--            <div class="col text-center">-->
            <!--                <h2>TESTIMONI</h2>-->
            <!--                <p>Moments were giving them <br> the best experience</p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->

            <!-- testimonial content -->
            <!--<div class="section section-testimonial-content" id="testimonialContent">-->
            <!--    <div class="container">-->
            <!--        <div class="section-popular-travel row justify-content-center">-->
            <!--            <div class="col-sm-6 col-md-6 col-lg-4">-->
            <!--                <div class="card card-testimonial text-center">-->
            <!--                    <div class="testimonial-content">-->
            <!--                        <img src="frontend/images/testi_1.png" alt="user" class="mb-4 rounded-circle">-->
            <!--                        <h3 class="mb-4">Faishal Ammar Razaq</h3>-->
            <!--                        <p class="testimonial">"Good Places to hang out with family"</p>-->
            <!--                        <hr>-->
            <!--                        <p class="trip-to mt-2">Borobudur, Yogyakarta</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-6 col-lg-4">-->
            <!--                <div class="card card-testimonial text-center">-->
            <!--                    <div class="testimonial-content">-->
            <!--                        <img src="frontend/images/testi_2.png" alt="user" class="mb-4 rounded-circle">-->
            <!--                        <h3 class="mb-4">Wijanarko Putra Wahid</h3>-->
            <!--                        <p class="testimonial">"Wohooo so happy because no more spending time in the line !!-->
            <!--                            yeyeyeye"</p>-->
            <!--                        <hr>-->
            <!--                        <p class="trip-to mt-2">Merlion Park, Singapore</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-sm-6 col-md-6 col-lg-4">-->
            <!--                <div class="card card-testimonial text-center">-->
            <!--                    <div class="testimonial-content">-->
            <!--                        <img src="frontend/images/testi_3.png" alt="user" class="mb-4 rounded-circle">-->
            <!--                        <h3 class="mb-4">Hartomo Budiharjo Putra</h3>-->
            <!--                        <p class="testimonial">"Amazing Experience, Amazing Place"</p>-->
            <!--                        <hr>-->
            <!--                        <p class="trip-to mt-2">Panglipuran Vilage, Bali</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="row">-->
            <!--            <div class="col-12 text-center">-->
            <!--                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>-->
            <!--            <a href="{{route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">Get Started </a>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </main>
@endsection
