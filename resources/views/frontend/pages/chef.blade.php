@extends('frontend.index')
@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('public/frontend')}}/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Master Chef</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Chef <i class="fa fa-chevron-right"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Chef</span>
                <h2 class="mb-4">Our Master Chef</h2>
            </div>
        </div>	
        <div class="row">

            @foreach ($Chef as $ChefShow)

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url({{$ChefShow->picture}});"></div>
                    <div class="text px-4 pt-2">
                        <h3>{{$ChefShow->chef_name}}</h3>
                        <span class="position mb-2">{{$ChefShow->position}}</span>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                <form method="POST" action="{{url('table_book')}}" class="appointment-form" enctype="multipart/form-data">
                    @csrf
                    <h3 class="mb-3">Book your Table</h3>
                    <p class="text-white" style="margin-top: -15px;">Booking Time 09.00 AM - 08.00 PM</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" name="date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="time" name="time" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url({{$About->picture}});">
                <div class="row pb-5 pb-md-0">
                    <div class="col-md-12 col-lg-7">
                        <div class="heading-section mt-5 mb-4">
                            <div class="pl-lg-3 ml-md-5">
                                <span class="subheading">About</span>
                                <h2 class="mb-4">Welcome to Taste.it</h2>
                            </div>
                        </div>
                        <div class="pl-lg-3 ml-md-5">
                            <p>{{$About->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
