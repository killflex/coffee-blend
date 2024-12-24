@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">The Best Coffee Testing Experience</h1>
                        <p class="mb-4 mb-md-5">Nikmati kopi istimewa yang diseduh dari biji pilihan terbaik dengan cita rasa kaya dan aroma memikat. Tempat sempurna bagi pecinta kopi untuk bersantai dan menikmati momen istimewa.</p>
                        <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan Sekarang</a> <a
                                href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
                        <p class="mb-4 mb-md-5">Nikmati kopi terbaik yang diseduh dari biji pilihan dengan cita rasa kaya dan aroma menggoda. Tempat sempurna bagi pecinta kopi untuk bersantai dan menikmati momen istimewa.</p>
                        <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan Sekarang</a> <a
                                href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
                        <p class="mb-4 mb-md-5">Nikmati kopi terbaik yang diseduh dari biji pilihan dengan cita rasa kaya dan aroma menggoda. Tempat sempurna bagi pecinta kopi untuk bersantai dan menikmati momen istimewa.</p>
                        <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan Sekarang</a> <a
                                href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="container">
        @if (Session::has('date'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('date') }}</p>
        @endif
    </div>
    <div class="container">
        @if (Session::has('booking'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('booking') }}</p>
        @endif
    </div>
    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>000 (123) 456 7890</h3>
                                <p>Kami Siap Menerima Panggilan Anda 24 Jam</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>Jl. Rungkut Asri Tim. XVIII No.17-41</h3>
                                <p>Medokan Ayu, Kec. Rungkut, Surabaya, Jawa Timur 60293</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Buka Setiap Hari</h3>
                                <p>8:00 - 23:00</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="book p-4">
                    <h3>Reservasi</h3>
                    <form action="{{ route('booking.tables') }}" method="POST" class="appointment-form">
                        @csrf
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">

                            </div>
                            @if ($errors->has('first_name'))
                                <p class="alert alert-success">{{ $errors->first('first_name') }}</p>
                            @endif

                            <div class="form-group ml-md-4">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                            @if ($errors->has('last_name'))
                                <p class="alert alert-success">{{ $errors->first('last_name') }}</p>
                            @endif
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" name="date" class="form-control appointment_date"
                                        placeholder="Date">
                                </div>
                                @if ($errors->has('date'))
                                    <p class="alert alert-success">{{ $errors->first('date') }}</p>
                                @endif
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" name="time" class="form-control appointment_time"
                                        placeholder="Time">
                                </div>
                                @if ($errors->has('time'))
                                    <p class="alert alert-success">{{ $errors->first('time') }}</p>
                                @endif

                                @if (isset(auth::user()->id))
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"
                                        class="form-control appointment_time">
                                @endif
                            </div>
                            <div class="form-group ml-md-4">
                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                            @if ($errors->has('phone'))
                                <p class="alert alert-success">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea id="" name="message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            @if ($errors->has('message'))
                                <p class="alert alert-success">{{ $errors->first('message') }}</p>
                            @endif
                            <div class="form-group ml-md-4">
                                <input type="submit" name="submit" value="Book" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('assets/images/about.jpg') }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Story</h2>
                </div>
                <div>
                    <p>Selamat datang di Coffee Blend, tempat di mana rasa dan cerita bertemu. Kami dimulai dengan sebuah impian sederhana: untuk menciptakan ruang yang nyaman, di mana setiap cangkir kopi dan hidangan dapat menginspirasi momen kebersamaan. Dari biji kopi pilihan hingga bahan-bahan segar, setiap detil kami pilih dengan hati-hati untuk memberikan pengalaman yang memuaskan.

                      Kami percaya bahwa setiap cerita yang dibagikan di meja kami adalah bagian dari perjalanan kami. Di sini, Anda tidak hanya menikmati cita rasa terbaik, tetapi juga merasakan kehangatan dan keramahan yang kami bangun sejak pertama kali kami membuka pintu.
                      
                      Bergabunglah dengan kami, nikmati hidangan lezat, dan temukan cerita kami yang tak terhitung, karena di Coffee Blend, setiap kunjungan adalah bagian dari cerita Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-choices"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Pemesanan Mudah</h3>
                            <p>Pemesanan mudah dan cepat, cukup beberapa langkah untuk mendapatkan produk yang Anda inginkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-delivery-truck"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Pengiriman Cepat</h3>
                            <p>Nikmati pengiriman cepat dan aman, memastikan pesanan Anda sampai tepat waktu dengan layanan kami yang efisien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-coffee-bean"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Biji Kopi Berkualitas</h3>
                            <p>Biji kopi pilihan yang dipilih dengan cermat, memastikan rasa yang kaya dan aroma yang menggoda di setiap cangkir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Discover</span>
                        <h2 class="mb-4">Our Menu</h2>
                        <p class="mb-4">Setiap hidangan di Coffee Blend disiapkan dengan penuh perhatian, menggunakan bahan-bahan terbaik untuk memastikan rasa yang lezat dan pengalaman yang tak terlupakan. Dari kopi segar yang diseduh dengan biji pilihan hingga hidangan penutup yang menggugah selera, kami hadirkan berbagai pilihan yang cocok untuk menemani setiap momen Anda. Temukan favorit Anda dan nikmati sensasi rasa yang tiada duanya.</p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Menu Lainnya</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('assets/images/menu-1.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('assets/images/menu-2.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('assets/images/menu-3.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('assets/images/menu-4.jpg') }});"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter"
        style="background-image: url({{ asset('assets/images/bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="5">0</strong>
                                    <span>Cabang</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="10">0</strong>
                                    <span>Penghargaan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="1022">0</strong>
                                    <span>Review</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="25">0</strong>
                                    <span>Staff</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Best Coffee Sellers</h2>
                    <p>Temukan kopi terbaik di Coffee Blend, diseduh dari biji pilihan yang memberikan rasa kaya dan nikmat di setiap tegukan.</p>
                </div>
            </div>
            <div class="row">

                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="#" class="img"
                                style="background-image: url({{ asset('assets/images/' . $product->image . '') }});"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="{{ route('product.single', $product->id) }}">{{ $product->name }}</a></h3>
                                <p>{{ $product->description }}</p>
                                <p class="price"><span>${{ $product->price }}</span></p>
                                <p><a href="{{ route('product.single', $product->id) }}"
                                        class="btn btn-primary btn-outline-primary">Show</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('assets/images/gallery-1.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('assets/images/gallery-4.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('assets/images/gallery-4.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('assets/images/gallery-4.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg_1.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Customers Says</h2>
                    <p>Berikan ulasan Anda dan bagikan pengalaman terbaik Anda bersama kami! Kami sangat menghargai setiap masukan yang membantu kami untuk terus memberikan pelayanan dan kualitas terbaik. Jangan ragu untuk berbagi pendapat dan saran, karena setiap review sangat berarti bagi kami.</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                @foreach ($reviews as $review)
                    <div class="col-md align-self-sm-end ftco-animate">
                        <div class="testimony">
                            <blockquote>
                                <p>&ldquo;
                                    {{ $review->review }}.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex mt-4">
                                {{-- <div class="image mr-3 align-self-center">
                    {{-- <img src="{{ asset('assets/images/person_1.jpg') }}" alt=""> 
                  </div> --}}
                                <div class="name align-self-center">{{ $review->name }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>



    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
