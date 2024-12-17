@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Services</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
          </div>

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
                <span class="flaticon-coffee-bean"></span></div>
                <div class="media-body">
                  <h3 class="heading">Biji Kopi Berkualitas</h3>
                  <p>Biji kopi pilihan yang dipilih dengan cermat, memastikan rasa yang kaya dan aroma yang menggoda di setiap cangkir.</p>
              </div>
          </div>    
        </div>
      </div>
      </div>
  </section>

@endsection  