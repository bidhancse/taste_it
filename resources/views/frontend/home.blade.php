@extends('frontend.index')
@section('content')


<section class="hero-wrap">
    <div class="home-slider owl-carousel js-fullheight">
        
        @foreach($Slider as $SliderShow)

        <div class="slider-item js-fullheight" style="background-image:url({{$SliderShow->picture}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 mt-5 text-center">
                            <span class="subheading">Taste.it Restaurant</h2></span>
                            <h1>{{$SliderShow->title}}</h1>
                            <span class="subheading-2 sub">{{$SliderShow->heading}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

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

<section class="ftco-section ftco-intro" style="background-image: url({{ asset('public/frontend')}}/images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span>Now Booking</span>
                <h2>Private Dinners &amp; Happy Hours</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Menu</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Breakfast</h3>
                    </div>

                    @foreach ($MenuBreakfast as $MenuBreakfastShow)

                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{$MenuBreakfastShow->picture}});"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>{{$MenuBreakfastShow->food_name}}</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">৳ {{$MenuBreakfastShow->price}}</span>
                                </div>
                            </div>
                            <p>{{$MenuBreakfastShow->food_details}}</p>
                        </div>
                    </div>

                    @endforeach

                    <span class="flat flaticon-bread" style="left: 0;"></span>
                    <span class="flat flaticon-breakfast" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Lunch</h3>
                    </div>

                    @foreach ($MenuLunch as $MenuLunchShow)

                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{$MenuLunchShow->picture}});"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>{{$MenuLunchShow->food_name}}</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">৳ {{$MenuLunchShow->price}}</span>
                                </div>
                            </div>
                            <p>{{$MenuLunchShow->food_details}}</p>
                        </div>
                    </div>

                    @endforeach

                    <span class="flat flaticon-pizza" style="left: 0;"></span>
                    <span class="flat flaticon-chicken" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Dinner</h3>
                    </div>
                    
                    @foreach ($MenuDinner as $MenuDinnerShow)

                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{$MenuDinnerShow->picture}});"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>{{$MenuDinnerShow->food_name}}</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">৳ {{$MenuDinnerShow->price}}</span>
                                </div>
                            </div>
                            <p>{{$MenuDinnerShow->food_details}}</p>
                        </div>
                    </div>

                    @endforeach

                    <span class="flat flaticon-omelette" style="left: 0;"></span>
                    <span class="flat flaticon-burger" style="right: 0;"></span>
                </div>
            </div>

            <!--  -->
            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Desserts</h3>
                    </div>
                    
                    @foreach ($MenuDisserts as $MenuDissertsShow)

                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{$MenuDissertsShow->picture}});"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>{{$MenuDissertsShow->food_name}}</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">৳ {{$MenuDissertsShow->price}}</span>
                                </div>
                            </div>
                            <p>{{$MenuDissertsShow->food_details}}</p>
                        </div>
                    </div>

                    @endforeach

                    <span class="flat flaticon-cupcake" style="left: 0;"></span>
                    <span class="flat flaticon-ice-cream" style="right: 0;"></span>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Coffee & Shake</h3>
                    </div>
                    
                    @foreach ($MenuCoffee as $MenuCoffeeShow)

                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{$MenuCoffeeShow->picture}});"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>{{$MenuCoffeeShow->food_name}}</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">৳ {{$MenuCoffeeShow->price}}</span>
                                </div>
                            </div>
                            <p>{{$MenuCoffeeShow->food_details}}</p>
                        </div>
                    </div>

                    @endforeach

                    <span class="flat flaticon-wine" style="left: 0;"></span>
                    <span class="flat flaticon-wine-1" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Drinks</h3>
                    </div>
                    
                    @foreach ($MenuDrinks as $MenuDrinksShow)

                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url({{$MenuDrinksShow->picture}});"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>{{$MenuDrinksShow->food_name}}</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">৳ {{$MenuDrinksShow->price}}</span>
                                </div>
                            </div>
                            <p>{{$MenuDrinksShow->food_details}}</p>
                        </div>
                    </div>

                    @endforeach

                    <span class="flat flaticon-wine" style="left: 0;"></span>
                    <span class="flat flaticon-wine-1" style="right: 0;"></span>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="ftco-section testimony-section" style="background-image: url({{ asset('public/frontend')}}/images/bg_5.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-3 pb-2">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Happy Customer</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-7">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{ asset('public/frontend')}}/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{ asset('public/frontend')}}/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{ asset('public/frontend')}}/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{ asset('public/frontend')}}/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="text p-3">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="user-img mb-4" style="background-image: url({{ asset('public/frontend')}}/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <p class="name">John Gustavo</p>
                                <span class="position">Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
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

<section class="ftco-section ftco-no-pt ftco-no-pb mb-5">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-2 w-100 mr-md-2" style="background-image: url({{ asset('public/frontend')}}/images/bg_6.jpg);"></div>
                <div class="img img-2 w-100 ml-md-2" style="background-image: url({{ asset('public/frontend')}}/images/bg_4.jpg);"></div>
            </div>
            <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
                <div class="heading-section ftco-animate mb-5">
                    <span class="subheading">This is our secrets</span>
                    <h2 class="mb-4">Perfect Ingredients</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                    <p><a href="#" class="btn btn-primary">Learn more</a></p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary mt-5">
    <div class="container py-5">
        <div class="row py-2">
            <div class="col-md-12 text-center">
                <h2>We Make Delicious &amp; Nutritious Food</h2>
                <a href="{{url('Reservation')}}" class="btn btn-white btn-outline-white">Book A Table Now</a>
            </div>
        </div>
    </div>
</section>

@endsection
