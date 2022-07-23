@extends('frontend.index')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('public/frontend')}}/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Book A Table Now</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Reservation <i class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt mt-5 mb-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                <form method="POST" action="{{url('table_book')}}" class="appointment-form" enctype="multipart/form-data">
                    @csrf
                    <h3 class="mb-3">Book your Table</h3>
                    <p class="text-white" style="margin-top: -15px;">Booking Time 09.00 AM - 08.00 PM</p>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="date" name="date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="time" name="time" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down" style="margin-left: -18px; color: black !important;"></span></div>
                                        <select name="table_number" class="form-control" required style="color:black !important;">
                                            <option value="Guest">Guest</option>
                                            <option value="One Table">1</option>
                                            <option value="Two Table">2</option>
                                            <option value="Three Table">3</option>
                                            <option value="Four Table">4</option>
                                            <option value="Five Table">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection
