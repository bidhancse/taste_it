@extends('dashboard.index')
@section('content')


		<!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">
			<div class="container-fluid">
				<div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
					<h2 class="font-w600 title mb-2 mr-auto ">Dashboard</h2>
				</div>

				<div class="row">

					@php
						$RegisterUser = DB::table('users')->get();
						$ActiveUser = DB::table('users')->where('status',1)->get();
						$InactiveUser = DB::table('users')->where('status',0)->get();
					@endphp

					<div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-user-7"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1"><a href="{{ url('/dashboard/manage-user') }}" style="color: #fff; text-decoration: none;">Register User</a></p>
										<h3 class="text-white">{{ Count($RegisterUser) }}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>

                    <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-user-7"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1"><a href="{{ url('/dashboard/manage-user') }}" style="color: #fff; text-decoration: none;">Active User</a></p>
										<h3 class="text-white">{{ Count($ActiveUser) }}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>

                    <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-user-7"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1"><a href="{{ url('/dashboard/manage-user') }}" style="color: #fff; text-decoration: none;">Inactive User</a></p>
										<h3 class="text-white">{{ Count($InactiveUser) }}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
            
				</div>
			</div>
		</div>
        <!--**********************************
            Content body end
            ***********************************-->



@endsection