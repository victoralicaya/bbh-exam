<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            <div class="mt-2">
                <a href="/" class="btn btn-success">Go Back</a>
                <button class="btn btn-primary" onclick="window.print()">Print Ticket</button>
            </div>
            <div class="d-flex justify-content-center">
                <div class="card mt-5" style="width:650px;">
                    <div class="card-body">
                        @if($payment->product_name == 'TWICE')
                            <img src="{{ asset('images/twice.jpg') }}" alt="Twice" class="card-img-top">
                        @elseif($payment->product_name == 'BLACK PINK')
                            <img src="{{ asset('images/blackpink.jpg') }}" alt="Blackpink" class="card-img-top">
                        @elseif($payment->product_name == 'BTS')
                            <img src="{{ asset('images/bts.jpg') }}" alt="BTS" class="card-img-top">
                        @elseif($payment->product_name == 'ITZY')
                            <img src="{{ asset('images/itzy.jpg') }}" alt="Itzy" class="card-img-top">
                        @elseif($payment->product_name == 'NEW JEANS')
                            <img src="{{ asset('images/newjeans.jpg') }}" alt="New Jeans" class="card-img-top">
                        @elseif($payment->product_name == 'RED VELVET')
                            <img src="{{ asset('images/redvelvet.jpg') }}" alt="Red Velvet" class="card-img-top">
                        @endif
                        <p>
                            <h2 class="text-center">- <b>{{ $payment->product_name }}</b> -</h2>
                            <h6 class="text-center">CONCERT TICKET</h6>
                        </p>
                        <hr>

                        <div class="row">
                            <div class="col-md-4 text-center">
                                <label for="">NAME</label>
                                <h4 class="text-bold">{{ $payment->name }}</h4>
                            </div>
                            <div class="col-md-4 text-center">
                                <label for="">EMAIL</label>
                                <h4 class="text-bold">{{ $payment->email }}</h4>
                            </div>
                            <div class="col-md-4 text-center">
                                <label for="">CONTACT</label>
                                <h4 class="text-bold">{{ $payment->contact }}</h4>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6 text-center">
                                <label for="">PRIZE</label>
                                <h4 class="text-bold">{{ $payment->amount }}</h4>
                            </div>
                            <div class="col-md-6 text-center">
                                <label for="">SCHEDULE</label>
                                <h4 class="text-bold">{{ $payment->product_schedule }}</h4>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-6 text-center">
                                <label for="">TICKET NUMBER</label>
                                <h4 class="text-bold">{{ $payment->ticket_number }}</h4>
                            </div>
                            <div class="col-md-6 text-center">
                                <label for="">REFERENCE NUMBER</label>
                                <h4 class="text-bold">{{ $payment->reference_number }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
