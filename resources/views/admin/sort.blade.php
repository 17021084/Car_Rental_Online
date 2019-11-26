
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Car Rental Portal | Admin Dashboard</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}  ">  
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="{{ asset('css/fileinput.min.css') }}">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="{{ asset('css/awesome-bootstrap-checkbox.css') }}">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 20px;">Car Rental Portal | Admin Panel</a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="change-password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
	<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			
<li><a href="#"><i class="fa fa-files-o"></i> Brands</a>
<ul>
<li><a href="create-brand.php">Create Brand</a></li>
<li><a href="manage-brands.php">Manage Brands</a></li>
</ul>
</li>

<li><a href="#"><i class="fa fa-sitemap"></i> Vehicles</a>
					<ul>
						<li><a href="post-avehical.php">Post a Vehicle</a></li>
						<li><a href="manage-vehicles.php">Manage Vehicles</a></li>
					</ul>
				</li>
				<li><a href="manage-bookings.php"><i class="fa fa-users"></i> Manage Booking</a></li>

				<li><a href="testimonials.php"><i class="fa fa-table"></i> Manage Testimonials</a></li>
				<li><a href="manage-conactusquery.php"><i class="fa fa-desktop"></i> Manage Conatctus Query</a></li>
				<li><a href="reg-users.php"><i class="fa fa-users"></i> Reg Users</a></li>
			<li><a href="manage-pages.php"><i class="fa fa-files-o"></i> Manage Pages</a></li>
			<li><a href="update-contactinfo.php"><i class="fa fa-files-o"></i> Update Contact Info</a></li>

			<li><a href="manage-subscribers.php"><i class="fa fa-table"></i> Manage Subscribers</a></li>

			</ul>
		</nav>		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">9</div>
													<div class="stat-panel-title text-uppercase">Reg Users</div>
												</div>
											</div>
											<a href="reg-users.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
																									<div class="stat-panel-number h1 ">6</div>
													<div class="stat-panel-title text-uppercase">Listed Vehicles</div>
												</div>
											</div>
											<a href="manage-vehicles.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 ">8</div>
													<div class="stat-panel-title text-uppercase">Total Bookings</div>
												</div>
											</div>
											<a href="manage-bookings.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
												
													<div class="stat-panel-number h1 ">7</div>
													<div class="stat-panel-title text-uppercase">Listed Brands</div>
												</div>
											</div>
											<a href="manage-brands.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



<div class="row">
					<div class="col-md-12">

						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">1</div>
													<div class="stat-panel-title text-uppercase">Subscibers</div>
												</div>
											</div>
											<a href="manage-subscribers.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
																									<div class="stat-panel-number h1 ">2</div>
													<div class="stat-panel-title text-uppercase">Queries</div>
												</div>
											</div>
											<a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">

													<div class="stat-panel-number h1 ">4</div>
													<div class="stat-panel-title text-uppercase">Testimonials</div>
												</div>
											</div>
											<a href="testimonials.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>




			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/Chart.min.js') }}"></script>
	<script src="{{ asset('js/fileinput.js') }}"></script>
	<script src="{{ asset('js/chartData.js') }}" ></script>
	<script src="{{ asset('js/main.js') }} "></script>
	
	
</body>
</html>
