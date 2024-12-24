@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">About Us</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span>
                        </p>
                    </div>

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
                    <p>Selamat datang di Coffee Blend, tempat di mana rasa dan cerita bertemu. Kami dimulai dengan sebuah
                        impian sederhana: untuk menciptakan ruang yang nyaman, di mana setiap cangkir kopi dan hidangan
                        dapat menginspirasi momen kebersamaan. Dari biji kopi pilihan hingga bahan-bahan segar, setiap detil
                        kami pilih dengan hati-hati untuk memberikan pengalaman yang memuaskan.

                        Kami percaya bahwa setiap cerita yang dibagikan di meja kami adalah bagian dari perjalanan kami. Di
                        sini, Anda tidak hanya menikmati cita rasa terbaik, tetapi juga merasakan kehangatan dan keramahan
                        yang kami bangun sejak pertama kali kami membuka pintu.

                        Bergabunglah dengan kami, nikmati kelezatan hidangan, dan temukan cerita kami yang tak terhitung, karena
                        di Coffee Blend, setiap kunjungan adalah bagian dari cerita Anda.</p>
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
                <div class="col-lg align-self-sm-end">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Kopi di sini luar biasa! Rasanya kuat dan aromanya sangat khas. Tempat favorit saya
                                untuk menikmati secangkir kopi.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_1.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Ferdinand</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;Pelayanannya ramah dan cepat. Cappuccino-nya sempurna, dengan busa yang lembut dan
                                rasa yang seimbang!&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_2.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Dzaky</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Suasana kafe yang nyaman membuat saya betah berlama-lama. Mocha-nya wajib dicoba,
                                cokelatnya terasa pas! &rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_3.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Putra</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;Saya suka variasi menu kopinya. Semua yang saya coba selalu enak dan disajikan dengan
                                presentasi yang menarik.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_2.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Farhan</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Pengalaman yang menyenangkan! Kopi segar, makanan enak, dan tempatnya sangat cozy
                                untuk bersantai atau bekerja. &rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_3.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Nana</div>
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
                        <p class="mb-4">Setiap hidangan di Coffee Blend disiapkan dengan penuh perhatian, menggunakan
                            bahan-bahan terbaik untuk memastikan rasa yang lezat dan pengalaman yang tak terlupakan. Dari
                            kopi segar yang diseduh dengan biji pilihan hingga hidangan penutup yang menggugah selera, kami
                            hadirkan berbagai pilihan yang cocok untuk menemani setiap momen Anda. Temukan favorit Anda dan
                            nikmati sensasi rasa yang tiada duanya.</p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
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
        style="background-image: url({{ asset('assets/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
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
@endsection
