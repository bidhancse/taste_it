@extends('frontend.index')
@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('public/frontend')}}/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-5">
          <h1 class="mb-2 bread">Contact us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-12">
          <h2 class="h4 font-weight-bold">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-4 d-flex">
         <div class="dbox">
           <h5 class="text-center text-bold text-white">Address</h5>
           <p class="text-center text-white">{{$Contact->contact_details}}</p>
         </div>
       </div>
       <div class="col-md-4 d-flex">
         <div class="dbox">
          <h5 class="text-center text-bold text-white">Phone</h5>
          <p class="text-center text-white">{{$Settings->phone}}</p>
         </div>
       </div>
       <div class="col-md-4 d-flex">
         <div class="dbox">
          <h5 class="text-center text-bold text-white">E-mail</h5>
          <p class="text-center text-white">{{$Settings->email}}</p>
         </div>
       </div>
     </div>
   </div>
  </section>
  <section class="ftco-section ftco-no-pt contact-section">
   <div class="container">
    <div class="row d-flex align-items-stretch no-gutters">
     <div class="col-md-6 p-5 order-md-last">
      <h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>
      <form method="POST" action="{{url('customer_message')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <input type="text" name="name" class="form-control" required placeholder="Your Name">
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control" required placeholder="Your Email">
        </div>
        <div class="form-group">
          <input type="text" name="subject" class="form-control" required placeholder="Subject">
        </div>
        <div class="form-group">
          <textarea name="message" cols="30" rows="7" class="form-control" required placeholder="Message"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" style="box-shadow: none;">
        </div>
      </form>
    </div>
    <div class="col-md-6 d-flex align-items-stretch">
      <div id="map"></div>
    </div>
  </div>
  </div>
  </section>

@endsection
