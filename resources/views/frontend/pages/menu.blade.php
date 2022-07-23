@extends('frontend.index')
@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('public/frontend')}}/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-5">
                <h1 class="mb-2 bread">Menu</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Menu <i class="fa fa-chevron-right"></i></span></p>
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


@endsection
