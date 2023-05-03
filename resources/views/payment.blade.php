@extends('layout');

<section class="payment-section">
    <div class="container">
        <h1>Payment Form</h1>

        <div class="row">
            <div class="col-lg-8">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
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
                            <img src="{{ asset('images/twice.jpg') }}" alt="Twice" class="d-block w-100 h-100">
                            <div class="carousel-caption">
                                <h3><b>TWICE</b></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/blackpink.jpg') }}" alt="Black Pink" class="d-block w-100 h-100">
                            <div class="carousel-caption">
                                <h3><b>BLACKPINK</b></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/bts.jpg') }}" alt="BTS" class="d-block w-100 h-100">
                            <div class="carousel-caption">
                                <h3><b>BTS</b></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/itzy.jpg') }}" alt="Itzy" class="d-block w-100 h-100">
                            <div class="carousel-caption">
                                <h3><b>ITZY</b></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/newjeans.jpg') }}" alt="New Jeans" class="d-block w-100 h-100">
                            <div class="carousel-caption">
                                <h3><b>NEW JEANS</b></h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/redvelvet.jpg') }}" alt="Red Velvet" class="d-block w-100 h-100">
                            <div class="carousel-caption">
                                <h3><b>RED VELVET</b></h3>
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
            <div class="col-lg-4">

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('payment.add') }}">
                        @csrf
                        <div class="mt-3">
                            <label for="name">Product</label>
                            <select name="product_name" id="" class="form-select" required>
                                <option>Select</option>
                                <option value="TWICE">TWICE</option>
                                <option value="BLACK PINK">BLACK PINK</option>
                                <option value="BTS">BTS</option>
                                <option value="ITZY">ITZY</option>
                                <option value="NEW JEANS">NEW JEANS</option>
                                <option value="RED VELVET">RED VELVET</option>
                            </select>
                        </div>
                        
                        <div class="mt-3">
                            <label for="name">Amount</label>
                            <input type="string" name="amount" id="" class="form-control" value="$200.00" readonly>
                        </div>

                        <div class="mt-3">
                            <label for="name">Schedule</label>
                            <input type="string" name="product_schedule" id="" class="form-control" value="{{ date('Y-m-d') }} 12:00pm" readonly>
                        </div>
                        
                        <div class="mt-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="" class="form-control" required>
                        </div>

                        <div class="mt-3">
                            <label for="name">Email</label>
                            <input type="email" name="email" id="" class="form-control" required>
                        </div>

                        <div class="mt-3">
                            <label for="name">Contact</label>
                            <input type="string" name="contact" id="" class="form-control" required>
                        </div>

                        <div class="mt-3">
                            <label for="name">Card Details</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="string" name="card_number" id="" class="form-control" placeholder="Number" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <input type="string" name="card_number" id="" class="form-control" placeholder="Expiry" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="string" name="card_number" id="" class="form-control" placeholder="Code" maxlength="3" required>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-secondary">Buy</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>