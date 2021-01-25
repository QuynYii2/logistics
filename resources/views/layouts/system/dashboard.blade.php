<!DOCTYPE html>
<html lang="en">

<head>

	<title>Flash Able - Most Trusted Admin Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
	<meta name="author" content="Codedthemes" />

    <!-- Favicon icon -->
	<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.min.css') }}">
	<!-- animation css -->
	<link rel="stylesheet" href="{{ asset('plugins/animation/css/animate.min.css') }}">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="index.html" class="b-brand">
					<img width = "50%" src="https://www.ant-tech.asia/wp-content/uploads/2020/11/AT-logo-compressed.png" alt="" class="logo images">
					<img width = "50%" src="https://www.ant-tech.asia/wp-content/uploads/2020/11/AT-logo-compressed.png" alt="" class="logo-thumb images">
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
						<a href="index.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Warehouse Managers</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="/warehouse/list" class="">List Warehouse</a></li>
							<li class=""><a href="/warehouse/addwarehouse" class="">Add Warehouse</a></li>
						</ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Shipping Bill</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="/bill/list" class="">List Bill</a></li>
                            <li class=""><a href="/bill/addbill" class="">Add Bill</a></li>
                            <li class=""><a href="/bill/statics" class="">Statistics Bill</a></li>
						</ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Manage user</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="/list-user" class="">List User</a></li>
							<li class=""><a href="/add-user" class="">Add User</a></li>
						</ul>
                    </li>
                </ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
			<a href="index.html" class="b-brand">
				<img src="{{ asset('images/logo.svg')}}" alt="" class="logo images">
				<img src="{{ asset('images/logo-icon.svg')}}" alt="" class="logo-thumb images">
			</a>
		</div>
		<a class="mobile-menu" id="mobile-header" href="#!">
			<i class="feather icon-more-horizontal"></i>
		</a>
		<div class="collapse navbar-collapse">
			<a href="#!" class="mob-toggler"></a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<div class="main-search open">
						<div class="input-group">
							<input type="text" id="m-search" class="form-control" placeholder="Search . . .">
							<a href="#!" class="input-group-append search-close">
								<i class="feather icon-x input-group-text"></i>
							</a>
							<span class="input-group-append search-btn btn btn-primary">
								<i class="feather icon-search input-group-text"></i>
							</span>
						</div>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
						<div class="dropdown-menu dropdown-menu-right notification">
							<div class="noti-head">
								<h6 class="d-inline-block m-b-0">Notifications</h6>
								<div class="float-right">
									<a href="#!" class="m-r-10">mark as read</a>
									<a href="#!">clear all</a>
								</div>
							</div>
							<ul class="noti-body">
								<li class="n-title">
									<p class="m-b-0">NEW</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="{{ asset('images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
											<p>New ticket Added</p>
										</div>
									</div>
								</li>
								<li class="n-title">
									<p class="m-b-0">EARLIER</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="{{ asset('images/user/avatar-2.jpg') }}" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="{{ asset('images/user/avatar-3.jpg') }}" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
											<p>currently login</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="{{ asset('images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="{{ asset('images/user/avatar-3.jpg') }}" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
											<p>currently login</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="{{ asset('images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="noti-footer">
								<a href="#!">show all</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon feather icon-settings"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="{{ asset('images/user/avatar-1.jpg') }}" class="img-radius" alt="User-Profile-Image">
								<span> {{ Auth::user()->name }}</span>
								<a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
							</div>
							<ul class="pro-body">
								<li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
								<li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
								<li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
								<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- [ Header ] end -->

	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<!-- [ breadcrumb ] start -->
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5><!--i class="feather icon-home"></i--> Home</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">

								<!-- product profit start -->
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-red">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Total warehouse</h6>
													<h3 class="m-b-0 text-white">1,783</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-money-bill-alt text-c-red f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-blue">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Total User</h6>
													<h3 class="m-b-0 text-white">15,830</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-database text-c-blue f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-green">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Total Staff</h6>
													<h3 class="m-b-0 text-white">6,780</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-dollar-sign text-c-green f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6">
									<div class="card prod-p-card bg-c-yellow">
										<div class="card-body">
											<div class="row align-items-center m-b-25">
												<div class="col">
													<h6 class="m-b-5 text-white">Product Bill</h6>
													<h3 class="m-b-0 text-white">6,784</h3>
												</div>
												<div class="col-auto">
													<i class="fas fa-tags text-c-yellow f-18"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- sessions-section start -->
                            <div class="col-md-12">
									<div class="card table-card">
										<div class="card-header">
											<h5>Site visitors session log</h5>
										</div>
										<div class="card-body px-0 py-0">
											<div class="table-responsive">
												<div class="session-scroll" style="height:478px;position:relative;">
													<table class="table table-hover m-b-0">
														<thead>
															<tr>
																<th><span>CAMPAIGN DATE</span></th>
																<th><span>CLICK <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
																				class="feather icon-help-circle f-16"></i></a></span></th>
																<th><span>COST <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
																				class="feather icon-help-circle f-16"></i></a></span></th>
																<th><span>CTR <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
																				class="feather icon-help-circle f-16"></i></a></span></th>
																<th><span>ARPU <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
																				class="feather icon-help-circle f-16"></i></a></span></th>
																<th><span>ECPI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
																				class="feather icon-help-circle f-16"></i></a></span></th>
																<th><span>ROI <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
																				class="feather icon-help-circle f-16"></i></a></span></th>
																<th><span>REVENUE <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
																				class="feather icon-help-circle f-16"></i></a></span></th>
																<th><span>CONVERSIONS <a class="help" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><i
																				class="feather icon-help-circle f-16"></i></a></span></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Total and average</td>
																<td>1300</td>
																<td>1025</td>
																<td>14005</td>
																<td>95,3%</td>
																<td>29,7%</td>
																<td>3,25</td>
																<td>2:30</td>
																<td>45.5%</td>
															</tr>
															<tr>
																<td>8-11-2016</td>
																<td>786
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>485
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>769
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>45,3%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>6,7%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>8,56
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>10:55
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>33.8%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>15-10-2016</td>
																<td>786
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>523
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>736
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>78,3%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>6,6%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-info rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>7,56
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>4:30
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>76.8%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>8-8-2017</td>
																<td>624
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>436
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>756
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>78,3%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>6,4%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>9,45
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>9:05
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>8.63%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>11-12-2017</td>
																<td>423
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>123
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>756
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>78,6%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>45,6%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-info rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>6,85
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>7:45
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>33.8%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>8-11-2016</td>
																<td>786
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>485
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>769
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>45,3%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>6,7%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>8,56
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>10:55
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>33.8%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>15-10-2016</td>
																<td>786
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>523
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>736
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>78,3%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>6,6%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-info rounded" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>7,56
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>4:30
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>76.8%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>8-8-2017</td>
																<td>624
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>436
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-primary rounded" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>756
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>78,3%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>6,4%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-info rounded" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>9,45
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>9:05
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 67%;" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
																<td>8.63%
																	<div class="progress mt-1" style="height:4px;">
																		<div class="progress-bar bg-success rounded" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- sessions-section end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Required Js -->
	<script src="{{ asset('js/vendor-all.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/pcoded.min.js') }}"></script>

</body>

</html>
