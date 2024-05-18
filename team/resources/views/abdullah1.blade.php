<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Quiz sale, Quiz buy">
	<meta name="description" content="Homy is a beautiful website template designed for Real Estate Agency.">
    <meta Quiz="og:site_name" content="Study.ai">
    <meta Quiz="og:url" content="">
    <meta Quiz="og:type" content="website">
    <meta Quiz="og:title" content="Study.ai - Dashboard">
	<meta name='og:image' content="{{asset('public/../images/asset/ogg.png')}}">
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
	<title>Study.ai - Add Quiz</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('public/../images/fav-icon/icon.png')}}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/../css/bootstrap.min.css')}}" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/../css/style.css')}}" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/../css/responsive.css')}}" media="all">


</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		{{-- <div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="{{asset('public/../images/loader.gif')}}" alt="" class="m-auto d-block" width="64"></div>
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
						<img src="{{asset('public/../images/logo/logo_01.svg')}}" alt="">
					</a>
					<button class="close-btn d-block d-md-none"><i class="fa-light fa-circle-xmark"></i></button>
				</div>
				<nav class="dasboard-main-nav pt-30 pb-30 bottom-line">
					<ul class="style-none">
						<li class="plr"><a href="dashboard-index.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_1.svg')}}" alt="">
							<span>Dashboard</span>
						</a></li>
						<li class="plr"><a href="message.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_2.svg')}}" alt="">
							<span>Message</span>
						</a></li>
						<li class="bottom-line pt-30 lg-pt-20 mb-40 lg-mb-30"></li>
						<li><div class="nav-title">Profile</div></li>
						<li class="plr"><a href="profile.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_3.svg')}}" alt="">
							<span>Profile</span>
						</a></li>
						<li class="plr"><a href="account-settings.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_4.svg')}}" alt="">
							<span>Account Settings</span>
						</a></li>
						<li class="plr"><a href="membership.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_5.svg')}}" alt="">
							<span>Membership</span>
						</a></li>
						<li class="bottom-line pt-30 lg-pt-20 mb-40 lg-mb-30"></li>
						<li><div class="nav-title">Listing</div></li>
						<li class="plr"><a href="properties-list.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_6.svg')}}" alt="">
							<span>My Properties</span>
						</a></li>
						<li class="plr"><a href="add-Quiz.html" class="d-flex w-100 align-items-center active">
							<img src="{{asset('public/images/icon/icon_7_active.svg')}}" alt="">
							<span>New Quiz</span>
						</a></li>
						<li class="plr"><a href="favourites.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_8.svg')}}" alt="">
							<span>Favourites</span>
						</a></li>
						<li class="plr"><a href="saved-search.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_9.svg')}}" alt="">
							<span>Saved Search</span>
						</a></li>
						<li class="plr"><a href="review.html" class="d-flex w-100 align-items-center">
							<img src="{{asset('public/images/icon/icon_10.svg')}}" alt="">
							<span>Reviews</span>
						</a></li>
					</ul>
				</nav>
				<!-- /.dasboard-main-nav -->
				<div class="profile-complete-status bottom-line pb-35 plr">
					<div class="progress-value fw-500">82%</div>
					<div class="progress-line position-relative">
						<div class="inner-line" style="width:80%;"></div>
					</div>
					<p>Profile Complete</p>
				</div>
				<!-- /.profile-complete-status -->

				<div class="plr">
					<a href="#" class="d-flex w-100 align-items-center logout-btn">
						<div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle"><img src="{{asset('public/images/icon/icon_41.svg')}}" alt=""></div>
						<span>Logout</span>
					</a>
				</div>
			</div>
		</aside>
		<!-- /.dash-aside-navbar -->

		<!--
		=============================================
			Dashboard Body
		==============================================
		-->
		<div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<h4 class="m0 d-none d-lg-block">Add New Quiz</h4>
					</div>
				</header>
				<!-- End Header -->

				<h2 class="main-title d-block d-lg-none">Add New Quiz</h2>

				<div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">Overview</h4>
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Quiz Title*</label>
                        <input type="text" placeholder="Your Quiz Name">
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Rules*</label>
                        <textarea class="size-lg" placeholder="Write about Quiz..."></textarea>
                    </div>
                </div>

                <div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">Questions</h4>

                    <div class="dash-input-wrapper mb-30">
                        <label for="">Question*</label>
                        <input type="text" placeholder="Your Quiz Name" name="question">
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Qption1</label>
                        <input type="text" class="" name="">

                        <label for="">Qption2</label>
                        <input type="text" class="" name="">

                        <label for="">Qption3</label>
                        <input type="text" class="" name="">

                        <label for="">Qption4</label>
                        <input type="text" class="" name="">
                    </div>

                </div>

                <div class="button-group d-inline-flex align-items-center mt-30">
					<a href="#" class="dash-btn-two tran3s me-3">Add Question</a>

				</div>
                <br>

				<div class="button-group d-inline-flex align-items-center mt-30">
					<a href="#" class="dash-btn-two tran3s me-3">Submit Quiz</a>
					<a href="#" class="dash-cancel-btn tran3s">Cancel</a>
				</div>
			</div>
		</div>
		<!-- /.dashboard-body -->


		<!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="remove-account-popup text-center modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<img src="{{asset('public/../images/lazy.svg')}}" data-src="{{asset('public/images/icon/icon_22.svg')}}" alt="" class="lazy-img m-auto">
						<h2>Are you sure?</h2>
						<p>Are you sure to delete your account? All data will be lost.</p>
						<div class="button-group d-inline-flex justify-content-center align-items-center pt-15">
							<a href="#" class="confirm-btn fw-500 tran3s me-3">Yes</a>
							<button type="button" class="btn-close fw-500 ms-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
						</div>
                    </div>
                    <!-- /.remove-account-popup -->
                </div>
            </div>
        </div>



		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="../vendor/jquery.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- WOW js -->
		<script src="../vendor/wow/wow.min.js')}}"></script>
		<!-- Slick Slider -->
		<script src="../vendor/slick/slick.min.js')}}"></script>
		<!-- Fancybox -->
		<script src="../vendor/fancybox/fancybox.umd.js')}}"></script>
		<!-- Lazy -->
		<script src="../vendor/jquery.lazy.min.js')}}"></script>
		<!-- js Counter -->
		<script src="../vendor/jquery.counterup.min.js')}}"></script>
		<script src="../vendor/jquery.waypoints.min.js')}}"></script>
		<!-- Nice Select -->
		<script src="../vendor/nice-select/jquery.nice-select.min.js')}}"></script>
		<!-- validator js -->
		<script src="{{asset('public/../vendor/validator.js')}}')}}"></script>

		<!-- Theme js -->
		<script src="{{asset('public/../js/theme.js')}}')}}"></script>
	</div> <!-- /.main-page-wrapper -->
</body>

</html>
