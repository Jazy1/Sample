<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Property sale, Property buy">
	<meta name="description" content="Homy is a beautiful website template designed for Real Estate Agency.">
    <meta property="og:site_name" content="Homy">
    <meta property="og:url" content="https://creativegigstf.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Homy-Real Estate HTML5 Template & Dashboard">
	<meta name='og:image' content='../images/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#0D1A1C">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#0D1A1C">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0D1A1C">
	<title>Study.ai - Student Dashboard</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="../images/fav-icon/icon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="../css/style.css" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="../css/responsive.css" media="all">

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		{{-- <div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="../images/loader.gif" alt="" class="m-auto d-block" width="64"></div>
			</div>
		</div> --}}

		<!--
		=============================================
			Dashboard Aside Menu
		==============================================
		-->
		<aside class="dash-aside-navbar">
			<div class="position-relative">
				<div class="logo d-md-block d-flex align-items-center justify-content-between plr bottom-line pb-30">
					<a href="dashboard-index.html">
						{{--  <img src="../images/logo/logo_01.svg" alt="">  --}}
                       <b> Students Portal </b>
					</a>
					<button class="close-btn d-block d-md-none"><i class="fa-light fa-circle-xmark"></i></button>
				</div>
				<nav class="dasboard-main-nav pt-30 pb-30 bottom-line">
					<ul class="style-none">
						<li class="plr"><a href="{{ url('/student') }}" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_7_active.svg" alt="">
							<span>Add Content</span>
						</a></li>
						<li class="plr"><a href="{{ url('/join-classroom') }}" class="d-flex w-100 align-items-center">
			    				<img src="images/icon/icon_8.svg" alt="">
							<span>Join Classroom</span>
						</a></li>
						<li class="plr"><a href="{{ url('/upload-posts') }}" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_9.svg" alt="">
							<span>Create Posts</span>
						</a></li>
					</ul>
				</nav>
			</div>
		</aside>
		<!-- /.dash-aside-navbar -->
