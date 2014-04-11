<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Yoo Records + Medlow</title>
		<meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels" />
		<meta name="keywords" content="multi-level, menu, navigation, off-canvas, off-screen, mobile, levels, nested, transform" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="/assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/fonts-lineicons.css" />
		<link rel="stylesheet" href="http://i.icomoon.io/public/temp/aaccdd78c0/icomoonset/style.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/multi-level-menu.css" />
		
		<script src="/assets/js/vendor/modernizr/modernizr.custom.js"></script>
	</head>
	<body>
		<!-- Push Wrapper -->
		<div id="top"></div>
		<div class="mp-pusher" id="mp-pusher">

			<?php include partials . "/sidebar.php"; ?>
			
			<div class="scroller"><!-- this is for emulating position fixed of the nav -->
				<div class="scroller-inner">
				
						
						<div class="menu-trigger-wrapper">
							<a href="#" class="scroll-link" data-id="videos"><span class="icomoon icomoon-tv"></span></a>
							<a href="#" class="scroll-link" data-id="tour"><span class="icomoon icomoon-ticket"></span></a>
							<a href="#" class="scroll-link" data-id="connect"><span class="icomoon icomoon-heart2"></span></a>
						</div>
						
						<div class="page-trigger-wrapper">
							<div class="prev page-trigger-item">
								<span>&lsaquo;</span>
							</div>
							<div class="next page-trigger-item">
								<span>&rsaquo;</span>
							</div>
						</div>
						
						<div class="profile">
							<div class="container">
								<form class="form" role="form">
									<div class="col-lg-3">
										<h3>Your Profile</h3>
										
									</div>
									<div class="col-lg-3">
										
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Email</label>
											<input type="email"
												name="email"
												required="yes" 
												id="email"
												class="email form-control">
										</div>
									
										<div class="form-group">
											<label>First Name</label>
											<input type="text"
												name="first_name"
												required="yes" 
												id="first_name"
												class="first_name form-control">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text"
												name="last_name"
												required="yes" 
												id="last_name"
												class="last_name form-control">
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Location</label>
											<input type="text"
												name="location"
												id="location"
												class="location form-control">
										</div>
									
										<div class="form-group">
											<label>Gender</label>
											<input type="text"
												name="first_name"
												required="yes" 
												id="first_name"
												class="first_name form-control">
										</div>
										<div class="form-group">
											<label>Date of Birth</label>
											<input type="date"
												name="dob" 
												id="dob"
												class="dob form-control">
										</div>
									</div>
								</form>
							</div>
						</div>
						
						<div class="badge-wrapper">
							<div class="badge-img-wrapper">
								<img src="/assets/img/profiles/users/temp1.png" class="img-circle">
								<div class="badge-shield-wrapper">
									<span class="icomoon icomoon-shield"></span>
								</div>
							</div>
							<div class="badge-points">
								11,834
							</div>
						</div>
						
						<header class="navbar navbar-fixed-top">
							
							<div class="brand"><span class="icomoon icomoon-rocket"></span> Yoo Records</div>
							
							<div class="sb-search-wrapper">
								<div id="sb-search" class="sb-search">
									<form>
										<input class="sb-search-input" placeholder="Enter the name of a song or Artist..." type="text" value="" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"></span>
									</form>
								</div>	
							</div>
							<div class="audio-player-wrapper">
								<div class="audio-player-button">
									<span class="icomoon icomoon-play3"></span>
								</div>
								<div class="audio-player-siblings-wrapper">
									<div class="audio-player-time">
										00:21
									</div>
									<div class="audio-player-progress-bar-wrapper">
										<div class="audio-player-progress-bar"></div>
									</div>
									<div class="audio-player-volume-button">
										<span class="icomoon icomoon-volume-medium"></span>
									</div>
									<div class="audio-player-list-button">
										<span class="icomoon icomoon-menu"></span>
									</div>
								</div>	
								<div class="audio-player-list-wrapper">
									<ul class="list-group audio-player-list-group">
										<li class="list-group-item audio-player-list-item"><span class="badge">1</span> Never Going Back 
											<span class="pull-right actions">
												<span class="icomoon icomoon-heart2"></span>
												<span class="icomoon icomoon-coin"></span>
											</span>
											<span class="pull-right">04:16</span>
										</li>
										<li class="list-group-item audio-player-list-item list-group-item-danger active"><span class="badge">2</span> Don't Let Go</li>
										<li class="list-group-item audio-player-list-item"><span class="badge">3</span> Our Mistake</li>
										<li class="list-group-item audio-player-list-item list-group-item-danger"><span class="badge">4</span> Where Did You Go</li>
									</ul>
								</div>					
							</div>
							
							<!-- profile trigger -->
							<div class="profile-trigger-wrapper">
								<img src="/assets/img/profiles/users/temp1.png" class="img-circle profile-trigger">
								<span class="icomoon icomoon-expand profile-trigger profile-expand-trigger"></span>
								<span class="icomoon icomoon-settings profile-dashboard-trigger" data-toggle="tooltip" data-placement="left" title="Settings"></span>
								<span class="icomoon icomoon-dashboard" data-toggle="tooltip" data-placement="left" title="Stats"></span>
								<span class="icomoon icomoon-switch" data-toggle="tooltip" data-placement="left" title="Logout"></span>

							</div>
							
							<!-- mini profile trigger -->
							<div class="mini-badge-wrapper">
								<span class="icomoon icomoon-diamonds"></span> 17,299 
							</div>
								
											
						</header>
					