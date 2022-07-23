@php
$Setting = DB::table('settingsinformation')->first();
$Contact = DB::table('contactinformation')->first();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ $Setting->title }}</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url($Setting->favicon) }}">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('public/frontend')}}/css/animate.css">
	<link rel="stylesheet" href="{{ asset('public/frontend')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('public/frontend')}}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('public/frontend')}}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('public/frontend')}}/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="{{ asset('public/frontend')}}/css/jquery.timepicker.css">
	<link rel="stylesheet" href="{{ asset('public/frontend')}}/css/flaticon.css">
	<link rel="stylesheet" href="{{ asset('public/frontend')}}/css/style.css">
	<!-- Toastr -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md d-flex align-items-center">
					<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">{{ $Setting->phone }}</a> or <span class="mailus">email us:</span> <a href="#">{{ $Setting->email }}</a></p>
				</div>
				<div class="col-12 col-md d-flex justify-content-md-end">
					<p class="mb-0">Mon - Fri / 9:00-21:00, Sat - Sun / 10:00-20:00</p>
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="{{ url($Setting->facebook) }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="{{ url($Setting->twitter) }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="{{ url($Setting->instagram) }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="{{ url($Setting->facebook) }}" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{url('/')}}"><img src="{{ url($Setting->logo) }}" alt="{{ url($Setting->logo) }}" style="max-height: 40px;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="{{url('About-Us')}}" class="nav-link">About</a></li>
					<li class="nav-item"><a href="{{url('Chef')}}" class="nav-link">Chef</a></li>
					<li class="nav-item"><a href="{{url('Menu')}}" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="{{url('Reservation')}}" class="nav-link">Reservation</a></li>
					<li class="nav-item"><a href="{{url('Contact-Us')}}" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->


@yield('content')


	<footer class="ftco-footer ftco-no-pb ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
						<img src="{{ url($Setting->logo) }}" alt="{{ url($Setting->logo) }}" style="max-height: 50px;">
						<h4 style="color: rgb(255, 255, 255)">Got Question? Call us 24/7</h4>
						<h5 style="color: #e52b34 ">{{$Setting->phone}}</h5>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Open Hours</h2>
						<ul class="list-unstyled open-hours">
							<li class="d-flex"><span>Monday</span><span>9:00 AM - 9.00 PM</span></li>
							<li class="d-flex"><span>Tuesday</span><span>9:00 AM - 9.00 PM</span></li>
							<li class="d-flex"><span>Wednesday</span><span>9:00 AM - 9.00 PM</span></li>
							<li class="d-flex"><span>Thursday</span><span>9:00 AM - 9.00 PM</span></li>
							<li class="d-flex"><span>Friday</span><span>9:00 AM - 9.00 PM</span></li>
							<li class="d-flex"><span>Saturday</span><span>9:00 AM - 9.00 PM</span></li>
							<li class="d-flex"><span>Sunday</span><span> Closed</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4 footer-links">
						<h2 class="ftco-heading-2">Important Link</h2>
						<ul>
							<li><a href="{{ url('About-Us') }}">About us</a></li>
							<li><a href="{{ url('Menu') }}">Our Menu</a></li>
							<li><a href="{{ url('Reservation') }}">Reservation</a></li>
							<li><a href="{{ url('Contact-Us') }}">Contact us</a></li>
						  </ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-2">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Find Us</h2>
						<p>{{$Contact->contact_details}}</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
							<li class="ftco-animate"><a href="{{ url($Setting->twitter) }}"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="{{ url($Setting->facebook) }}"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="{{ url($Setting->instagram) }}"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0 bg-primary py-3">
			<div class="row no-gutters">
				<div class="col-md-12 text-center">

					<p class="mb-0">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By <a href="https://www.facebook.com/Bidhan716" target="_blank">Bidhan Nath</a></p>
					</div>
				</div>
			</div>
		</footer>
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="{{ asset('public/frontend')}}/js/jquery.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/popper.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/bootstrap.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/jquery.easing.1.3.js"></script>
		<script src="{{ asset('public/frontend')}}/js/jquery.waypoints.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/jquery.stellar.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/owl.carousel.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/jquery.magnific-popup.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/jquery.animateNumber.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/bootstrap-datepicker.js"></script>
		<script src="{{ asset('public/frontend')}}/js/jquery.timepicker.min.js"></script>
		<script src="{{ asset('public/frontend')}}/js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{ asset('public/frontend')}}/js/google-map.js"></script>
		<script src="{{ asset('public/frontend')}}/js/main.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<script>
			@if(Session::has('message'))
			toastr.options =
			{
				"closeButton" : true,
				"progressBar" : true
			}
					toastr.success("{{ session('message') }}");
			@endif
		  
			@if(Session::has('error'))
			toastr.options =
			{
				"closeButton" : true,
				"progressBar" : true
			}
					toastr.error("{{ session('error') }}");
			@endif
		  
			@if(Session::has('info'))
			toastr.options =
			{
				"closeButton" : true,
				"progressBar" : true
			}
					toastr.info("{{ session('info') }}");
			@endif
		  
			@if(Session::has('warning'))
			toastr.options =
			{
				"closeButton" : true,
				"progressBar" : true
			}
					toastr.warning("{{ session('warning') }}");
			@endif
		  </script>
		
	</body>
	</html>