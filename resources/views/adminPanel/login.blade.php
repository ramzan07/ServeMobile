
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Mobile Touch I Admin Panel</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="{{asset('adminpanel/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
			
		
		<!-- Custom CSS -->
		<link href="{{asset('adminpanel/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="{{asset('adminpanel/dist/img/logo.png')}}" alt="brand"/>
						<span class="brand-text">Mobile Touch</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Don't have an account?</span>
					<a class="inline-block btn btn-info btn-rounded btn-outline" href="{{url('/adminSignup')}}">Sign Up</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Mobile Touch User Login</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
										@if(Session::has('error_message'))
										<div class="alert alert-danger">
										     <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">x</button>
										     <strong>Error!</strong> <span>{{Session::get('error_message')}} </span>
										</div>
										
										@endif
										@if(Session::has('success_message'))
										<div class="alert alert-success">
										     <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">x</button>
										     <strong>Success!</strong>  <span>{{Session::get('success_message')}} </span>
										</div>
										
										@endif
											<form action="{{route('processLogin')}}" method="POST">
												@csrf
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email Address</label>
													<input type="email" name="email"class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter e-mail">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													
													<div class="clearfix"></div>
													<input type="password" name="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Enter password">
												</div>
												<a class="capitalize-font txt-primary block mb-10 pull-left font-12" href="forgot-password.html">Forgot Password ?</a>
												<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="{{url('/changePassword')}}">Change Password ?</a>
													<div class="clearfix"></div>
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" type="checkbox">
														<label for="checkbox_2"> Remember Me</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info btn-rounded">Sign in</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="{{asset('adminpanel/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('adminpanel/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('adminpanel/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="{{asset('adminpanel/dist/js/jquery.slimscroll.js')}}"></script>
		
		<!-- Init JavaScript -->
		<script src="{{asset('adminpanel/dist/js/init.js')}}"></script>
	</body>
</html>
