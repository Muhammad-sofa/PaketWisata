@extends('layouts.app')

@section('title')
    Detail Travel
@endsection

@section('content')
        <!-- details -->
        <main>
            <section class="section-details-header"></section>
            <section class="section-details-content">
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        Paket Travel
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Details
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <!-- isi detail wisata -->
                    <div class="row">
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                <h1>{{$item->title}}</h1>
                                <p>{{$item->location}}</p>
                                @if ($item->galleries->count())
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <img src="{{Storage::url($item->galleries->first()->image)}}" class="xzoom" id="xzoom-default"
                                            xoriginal="{{Storage::url($item->galleries->first()->image)}}"/>
                                    </div>

                                    <!-- thumbnail   -->
                                    <div class="xzoom-thumbs">
                                        @foreach ($item->galleries as $gallery)
                                        <a href="{{Storage::url($gallery->image)}}">
                                            <img src="{{Storage::url($gallery->image)}}" class="xzoom-gallery" width="128"
                                                xpreview="{{Storage::url($gallery->image)}}">
                                        </a>
                                        @endforeach

                                    </div>
                                </div>
                                @endif
                                <h2>About</h2>
                                <p>
                                    {!! $item->about !!}
                                </p>

                                <div class="features row">
                                    <div class="col-md-4">
                                    <img src="{{url('frontend/images/ic_event.png')}}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Harga</h3>
                                            <p>Rp.{{ number_format($item->price) }},00</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                    <img src="{{url('frontend/images/ic_bahasa.png')}}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Bahasa</h3>
                                            <p>{{$item->language}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left">
                                    <img src="{{url('frontend/images/ic_food.png')}}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Kuliner</h3>
                                        <p>{{$item->foods}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Detail/Trip information -->
                        <div class="col lg-4">
                            <div class="card card-details card-right">
                                <h2>Members are going </h2>
                                <!-- my adalah margin atas dan bawah -->
                                <div class="member my-2">
                                <img src="{{url('frontend/images/testimonial_1.png')}}" class="member-image mr-1">
                                <img src="{{url('frontend/images/testimonial_2.png')}}" class="member-image mr-1">
                                <img src="{{url('frontend/images/testimonial_3.png')}}" class="member-image mr-1">
                                <img src="{{url('frontend/images/testimonial_4.png')}}" class="member-image mr-1">
                                <img src="{{url('frontend/images/testimonial_5.png')}}" class="member-image mr-1">
                                <img src="{{url('frontend/images/testimonial_6.png')}}" class="member-image mr-1">
                                </div>

                                <hr>
                                <h2>Trip Information</h2>
                                <table class="trip-information">
                                    <tr>
                                        <th width="50%">Date of Departure</th>
                                        <td width="50%" class="text-right">
                                        {{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Duration</th>
                                        <td width="50%" class="text-right">
                                            {{ $item->duration }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Type of Trip</th>
                                        <td width="50%" class="text-right">
                                            {{ $item->type }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Price</th>
                                        <td width="50%" class="text-right">
                                            Rp.{{ number_format($item->price) }},00 / person
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="join-container">
                                @auth
                            <form action="{{route('checkout_process', $item->id)}}" method="post">
                                @csrf
                                        <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                            Join Now
                                        </button>
                                    </form>
                                @endauth

                                @guest
                                <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">
                                    Login or Register to Join
                                </a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
    <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            xoffset: 15,
        });
    })
</script>
@endpush
