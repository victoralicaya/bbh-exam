<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header class="fixed-top nav-bg-on" id="header">
            <div class="container d-flex align-items-center justify-content-between">
                <a class="logo" href="/">KPOP</a>
                <nav class="nav-bar">
                    <ul>
                        <li>
                            <a class="nav-link" href="#home">HOME</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#about">WHAT IS KPOP</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#artists">ARTISTS</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="main-content" id="home">
            <video autoplay muted loop id="myvideo">
                <source src="{{ asset('images/twice.mp4') }}" type="video/mp4">
            </video>
            <div class="in-content">
                <div class="in-content-text">
                    <h1 data-aos="zoom-in" data-aos-delay="200">Welcome to the world of <b>KPOP</b></h1>
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
                    <a href="#" class="btn btn-outline-secondary">Read More</a>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <img src="{{ asset('images/blackpink.jpg') }}" alt="blackpink" height="100%" width="100%" class="img-thumbnail">
                </div>
            </div>
        </section>

        <section class="third-content" id="artists">
            <div class="container">
                <h2 class="text-center text-white" data-aos="fade-left" data-aos-delay="200">SOME OF THE FAMOUS KPOP ARTISTS</h2>
                <div class="row pt-5" data-aos="fade-down" data-aos-delay="200">
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
                </div>
            </div>
        </section>

        <section class="fourth-content">
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

        <footer>
            <div class="container">
                All Rights Reserve &copy; 2023
            </div>
        </footer>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
