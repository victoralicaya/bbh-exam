@extends('layout')

<section class="main-content" id="home">
    <video autoplay muted loop id="myvideo">
        <source src="{{ asset('images/twice.mp4') }}" type="video/mp4">
    </video>
    <div class="in-content">
        <div class="in-content-text">
            <h1 data-aos="zoom-in" data-aos-delay="200">WELCOME TO THE WORLD OF <b>KPOP</b></h1>
        </div>
    </div>
</section>

<section class="container" id="about">
    <div class="row second-content">
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <h2>What is <b>KPOP</b>?</h2>
            <hr>
            <p class="content-text"><b>KPOP or Korean Popular Music</b> is a form of popular music originating in South Korea as part of South Korean Culture.
                It includes styles from around the world, such as pop, hiphop, R&B, rock, jazz, gospel, reggae, electronic dance, folk, country, disco and classical on top of its traditional Korean Music.
            </p>
            <a href="https://en.wikipedia.org/wiki/K-pop" target="_blank" class="btn btn-outline-secondary">Read More</a>
        </div>
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <img src="{{ asset('images/blackpink.jpg') }}" alt="blackpink" height="100%" width="100%" class="img-thumbnail">
        </div>
    </div>
</section>

<section class="third-content" id="artists">
    <div class="container">
        <h2 class="text-center text-white" data-aos="fade-left" data-aos-delay="200">SOME OF THE FAMOUS KPOP ARTISTS</h2>
        <!-- <div class="row pt-5" data-aos="fade-down" data-aos-delay="200">
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/twice.jpg') }}" alt="twice" class="card-img-top">
                    <div class="card-img-overlay" data-text="TWICE"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/blackpink.jpg') }}" alt="blackpink" class="card-img-top">
                    <div class="card-img-overlay" data-text="BLACKPINK"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/bts.jpg') }}" alt="bts" class="card-img-top">
                    <div class="card-img-overlay" data-text="BTS"></div>
                </div>
            </div>
        </div>

        <div class="row pt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/itzy.jpg') }}" alt="itzy" class="card-img-top">
                    <div class="card-img-overlay" data-text="ITZY"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/newjeans.jpg') }}" alt="newjeans" class="card-img-top">
                    <div class="card-img-overlay" data-text="NEW JEANS"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/redvelvet.jpg') }}" alt="redvelvet" class="card-img-top">
                    <div class="card-img-overlay" data-text="RED VELVET"></div>
                </div>
            </div>
        </div> -->

        <div id="demo" class="carousel slide mt-5" data-bs-ride="carousel" data-aos="fade-right" data-aos-delay="200">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/twice.jpg') }}" alt="Twice" class="d-block w-100">
                    <div class="card-img-overlay" data-text="TWICE"></div>
                    <div class="carousel-caption mb-5">
                        <a href="/payment" class="btn btn-danger">BOOK NOW</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/blackpink.jpg') }}" alt="Black Pink" class="d-block w-100">
                    <div class="card-img-overlay" data-text="BLACK PINK"></div>
                    <div class="carousel-caption mb-5">
                        <a href="/payment" class="btn btn-danger">BOOK NOW</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/bts.jpg') }}" alt="BTS" class="d-block w-100">
                    <div class="card-img-overlay" data-text="BTS"></div>
                    <div class="carousel-caption mb-5">
                        <a href="/payment" class="btn btn-danger">BOOK NOW</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/itzy.jpg') }}" alt="Itzy" class="d-block w-100">
                    <div class="card-img-overlay" data-text="ITZY"></div>
                    <div class="carousel-caption mb-5">
                        <a href="/payment" class="btn btn-danger">BOOK NOW</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/newjeans.jpg') }}" alt="New Jeans" class="d-block w-100">
                    <div class="card-img-overlay" data-text="NEW JEANS"></div>
                    <div class="carousel-caption mb-5">
                        <a href="/payment" class="btn btn-danger">BOOK NOW</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/redvelvet.jpg') }}" alt="Red Velvet" class="d-block w-100">
                    <div class="card-img-overlay" data-text="RED VELVET"></div>
                    <div class="carousel-caption mb-5">
                        <a href="/payment" class="btn btn-danger">BOOK NOW</a>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<section class="fourth-content" id="agencies">
    <div class="container">
        <h2 class="text-center" data-aos="fade-right" data-aos-delay="200">WELL KNOWN KPOP ENTERTAINMENT AGENCIES</h2>
        <div class="agency-logos mt-5" data-aos="flip-left" data-aos-delay="200">
            <img src="{{ asset('images/jyp.jpg') }}" alt="jyp">
            <img src="{{ asset('images/yg.jpg') }}" alt="yg">
            <img src="{{ asset('images/hybe.jpg') }}" alt="hybe">
            <img src="{{ asset('images/sm.jpg') }}" alt="sm">
            <img src="{{ asset('images/ador.png') }}" alt="ador">
        </div>
    </div>
</section>
