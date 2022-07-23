@php
$setting = DB::table('settingsinformation')->first();;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ url($setting->favicon) }}">
	<title>Taste.it || Admin Dashboard </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/backend')}}/images/favicon.png">
	<link rel="stylesheet" href="{{ asset('public/backend')}}/vendor/chartist/css/chartist.min.css">
	<link href="{{ asset('public/backend')}}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="{{ asset('public/backend')}}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="{{ asset('public/backend')}}/css/style.css" rel="stylesheet">
	<!-- Datatable -->
	<link href="{{ asset('public/backend')}}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--summernote-->
	<link href="{{ asset('public/backend')}}/vendor/summernote/summernote-bs4.css" rel="stylesheet">
	<!--uikit-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!--Toggle-->
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>
<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
        	<div class="sk-three-bounce">
        		<div class="sk-child sk-bounce1"></div>
        		<div class="sk-child sk-bounce2"></div>
        		<div class="sk-child sk-bounce3"></div>
        	</div>
        </div>
    <!--*******************
        Preloader end
        ********************-->

    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
            	<a href="{{ url('/dashboard') }}" class="brand-logo">
            		<h4 class="logo-abbr" width="50" height="50" viewbox="0 0 50 50" fill="none" style="color: red;">ADMIN</h4>
            		<h4 class="brand-title" width="74" height="22" viewbox="0 0 74 22" fill="none">PANEL</h4>
            	</a>

            	<div class="nav-control">
            		<div class="hamburger">
            			<span class="line"></span><span class="line"></span><span class="line"></span>
            		</div>
            	</div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

            
		<!--**********************************
            Header start
            ***********************************-->
            <div class="header">
            	<div class="header-content">
            		<nav class="navbar navbar-expand">
            			<div class="collapse navbar-collapse justify-content-between">
            				<div class="header-left">
            					<div class="input-group search-area right d-lg-inline-flex d-none">
            						<input type="text" class="form-control" placeholder="Find something here...">
            						<div class="input-group-append">
            							<span class="input-group-text">
            								<a href="javascript:void(0)">
            									<i class="flaticon-381-search-2"></i>
            								</a>
            							</span>
            						</div>
            					</div>
            				</div>
            				<ul class="navbar-nav header-right main-notification mt-0">
            					<li class="nav-item dropdown notification_dropdown">
            						<a class="nav-link bell dz-theme-mode" href="#">
            							<i id="icon-light" class="fa fa-sun-o"></i>
            							<i id="icon-dark" class="fa fa-moon-o"></i>
            						</a>
            					</li>
            					<li class="nav-item dropdown notification_dropdown">
            						<a class="nav-link bell dz-fullscreen" href="#">
            							<svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
            							<svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
            						</a>
            					</li>
            					<li class="nav-item dropdown header-profile">
            						<a class="nav-link" href="#" role="button" data-toggle="dropdown">
            							<img src="{{ Auth()->user()->picture }}" width="20" alt="" style="border-radius: 50px;">
            							<div class="header-info">
            								<span>{{ Auth()->user()->name }}</span>
            								<small>{{ Auth()->user()->email }}</small>
            							</div>
            						</a>
            						<div class="dropdown-menu dropdown-menu-right">
            							<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" class="dropdown-item ai-icon">
                                      <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                      <span class="ml-2">Logout </span>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
            				</ul>
            			</div>
            		</nav>
            	</div>
            </div>
        <!--**********************************
            Header end ti-comment-alt
            ***********************************-->

        <!--**********************************
            Sidebar start
            ***********************************-->
            <div class="deznav">
            	<div class="deznav-scroll">
            		<ul class="metismenu" id="menu">
						<li class="nav-label">Main Menu</li>

            			<li>
							<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            					<i class="flaticon-077-menu-1"></i>
            					<span class="nav-text">User Information</span>
            				</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/dashboard/user') }}">Create User</a></li>
								<li><a href="{{ url('/dashboard/manage-user')}}">Manage User</a></li>
							</ul>
            			</li>

            			<li>
							<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            					<i class="flaticon-077-menu-1"></i>
            					<span class="nav-text">Slider Information</span>
            				</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/dashboard/slider') }}">Slider Add</a></li>
								<li><a href="{{ url('/dashboard/manage-slider')}}">Manage Slider</a></li>
							</ul>
            			</li>

						<li>
							<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            					<i class="flaticon-077-menu-1"></i>
            					<span class="nav-text">About Information</span>
            				</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/dashboard/about') }}">About Update</a></li>
							</ul>
            			</li>

						<li>
							<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            					<i class="flaticon-077-menu-1"></i>
            					<span class="nav-text">Menu Information</span>
            				</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/dashboard/menu') }}">Menu Add</a></li>
								<li><a href="{{ url('/dashboard/manage-menu')}}">Manage Menu</a></li>
							</ul>
            			</li>

						<li>
							<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            					<i class="flaticon-077-menu-1"></i>
            					<span class="nav-text">Chef Information</span>
            				</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/dashboard/chef') }}">Chef Add</a></li>
								<li><a href="{{ url('/dashboard/manage-chef')}}">Manage Chef</a></li>
							</ul>
            			</li>

						<li>
							<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            					<i class="flaticon-077-menu-1"></i>
            					<span class="nav-text">Reservation Information</span>
            				</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/dashboard/reservation') }}">Manage Reservation</a></li>
							</ul>
            			</li>

						<li>
							<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            					<i class="flaticon-077-menu-1"></i>
            					<span class="nav-text">Message Information</span>
            				</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/dashboard/message') }}">Manage Message</a></li>
							</ul>
            			</li>

						<li>
							<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            					<i class="flaticon-077-menu-1"></i>
            					<span class="nav-text">Website Settings Information</span>
            				</a>
							<ul aria-expanded="false">
								<li><a href="{{ url('/dashboard/settings') }}">Settings Update</a></li>
								<li><a href="{{ url('/dashboard/contact-Us')}}">Contact Us Update</a></li>
							</ul>
            			</li>

            	</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
            ***********************************-->


            @yield('content')


        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
            	<div class="copyright">
            		<p>Copyright © Designed &amp; Developed by <a href="https://www.facebook.com/Bidhan716/" target="_blank">Bidhan Nath</a> 2021</p>
            	</div>
            </div>
        <!--**********************************
            Footer end
            ***********************************-->







        </div>
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('public/backend')}}/vendor/global/global.min.js"></script>
        <script src="{{ asset('public/backend')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="{{ asset('public/backend')}}/vendor/chart.js/Chart.bundle.min.js"></script>

        <!-- Chart piety plugin files -->
        <script src="{{ asset('public/backend')}}/vendor/peity/jquery.peity.min.js"></script>

        <!-- Apex Chart -->
        <script src="{{ asset('public/backend')}}/vendor/apexchart/apexchart.js"></script>

        <!-- Dashboard 1 -->
        <script src="{{ asset('public/backend')}}/js/dashboard/dashboard-1.js"></script>

        <script src="{{ asset('public/backend')}}/vendor/owl-carousel/owl.carousel.js"></script>
        <script src="{{ asset('public/backend')}}/js/custom.min.js"></script>
        <script src="{{ asset('public/backend')}}/js/deznav-init.js"></script>
        <script src="{{ asset('public/backend')}}/js/demo.js"></script>
        <script src="{{ asset('public/backend')}}/js/styleSwitcher.js"></script>
        
        <!-- Datatable -->
        <script src="{{ asset('public/backend')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('public/backend')}}/js/plugins-init/datatables.init.js"></script>

        <!--summernote-->
        <script src="{{ asset('public/backend')}}/vendor/summernote/summernote-bs4.min.js"></script>
        <script>
        	$(document).ready(function() {
        		$('#summernote').summernote({
                height: 150,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
            });
        	});
        </script>

        <!--summernote-->
        <script src="{{ asset('public/backend')}}/vendor/summernote/summernote-bs4.min.js"></script>
        <script>
        	$(document).ready(function() {
        		$('#summernotes').summernote({
                height: 150,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
            });
        	});
        </script>

        <!--uikit-->
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>


    </body>
    </html>         