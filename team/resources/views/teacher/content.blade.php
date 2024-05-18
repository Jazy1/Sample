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
	<title>Homy-Real Estate HTML5 Template & Dashboard</title>
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
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="../images/loader.gif" alt="" class="m-auto d-block" width="64"></div>
			</div>
		</div>

		<!--
		=============================================
			Dashboard Aside Menu
		==============================================
		-->
		<aside class="dash-aside-navbar">
			<div class="position-relative">
				<div class="logo d-md-block d-flex align-items-center justify-content-between plr bottom-line pb-30">
					<a href="dashboard-index.html">
						<img src="../images/logo/logo_01.svg" alt="">
					</a>
					<button class="close-btn d-block d-md-none"><i class="fa-light fa-circle-xmark"></i></button>
				</div>
				<nav class="dasboard-main-nav pt-30 pb-30 bottom-line">
					<ul class="style-none">
						<li class="plr"><a href="dashboard-index.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_1.svg" alt="">
							<span>Dashboard</span>
						</a></li>
						<li class="plr"><a href="message.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_2.svg" alt="">
							<span>Message</span>
						</a></li>
						<li class="bottom-line pt-30 lg-pt-20 mb-40 lg-mb-30"></li>
						<li><div class="nav-title">Profile</div></li>
						<li class="plr"><a href="profile.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_3.svg" alt="">
							<span>Profile</span>
						</a></li>
						<li class="plr"><a href="account-settings.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_4.svg" alt="">
							<span>Account Settings</span>
						</a></li>
						<li class="plr"><a href="membership.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_5.svg" alt="">
							<span>Membership</span>
						</a></li>
						<li class="bottom-line pt-30 lg-pt-20 mb-40 lg-mb-30"></li>
						<li><div class="nav-title">Listing</div></li>
						<li class="plr"><a href="properties-list.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_6.svg" alt="">
							<span>My Properties</span>
						</a></li>
						<li class="plr"><a href="add-property.html" class="d-flex w-100 align-items-center active">
							<img src="images/icon/icon_7_active.svg" alt="">
							<span>Add New Property</span>
						</a></li>
						<li class="plr"><a href="favourites.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_8.svg" alt="">
							<span>Favourites</span>
						</a></li>
						<li class="plr"><a href="saved-search.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_9.svg" alt="">
							<span>Saved Search</span>
						</a></li>
						<li class="plr"><a href="review.html" class="d-flex w-100 align-items-center">
							<img src="images/icon/icon_10.svg" alt="">
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
						<div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle"><img src="images/icon/icon_41.svg" alt=""></div>
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
						<h4 class="m0 d-none d-lg-block">Teachers</h4>
						<button class="dash-mobile-nav-toggler d-block d-md-none me-auto">
							<span></span>
						</button>
						<form action="#" class="search-form ms-auto">
							<input type="text" placeholder="Search here..">
							<button><img src="../images/lazy.svg" data-src="images/icon/icon_43.svg" alt="" class="lazy-img m-auto"></button>
						</form>
						<div class="profile-notification position-relative dropdown-center ms-3 ms-md-5 me-4">
							<button class="noti-btn dropdown-toggle" type="button" id="notification-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
								<img src="../images/lazy.svg" data-src="images/icon/icon_11.svg" alt="" class="lazy-img">
								<div class="badge-pill"></div>
							</button>
							<ul class="dropdown-menu" aria-labelledby="notification-dropdown">
								<li>
									<h4>Notification</h4>
									<ul class="style-none notify-list">
										<li class="d-flex align-items-center unread">
											<img src="../images/lazy.svg" data-src="images/icon/icon_36.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>You have 3 new mails</h6>
												<span class="time">3 hours ago</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<img src="../images/lazy.svg" data-src="images/icon/icon_37.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>Your listing post has been approved</h6>
												<span class="time">1 day ago</span>
											</div>
										</li>
										<li class="d-flex align-items-center unread">
											<img src="../images/lazy.svg" data-src="images/icon/icon_38.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>Your meeting is cancelled</h6>
												<span class="time">3 days ago</span>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="d-none d-md-block me-3">
							<a href="add-property.html" class="btn-two"><span>Add Listing</span> <i class="fa-thin fa-arrow-up-right"></i></a>
						</div>
						<div class="user-data position-relative">
							<button class="user-avatar online position-relative rounded-circle dropdown-toggle" type="button" id="profile-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
								<img src="../images/lazy.svg" data-src="images/avatar_01.jpg" alt="" class="lazy-img">
							</button>
							<!-- /.user-avatar -->
							<div class="user-name-data">
								<ul class="dropdown-menu" aria-labelledby="profile-dropdown">
									<li>
										<a class="dropdown-item d-flex align-items-center" href="profile.html"><img src="../images/lazy.svg" data-src="images/icon/icon_23.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Profile</span></a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="account-settings.html"><img src="../images/lazy.svg" data-src="images/icon/icon_24.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Account Settings</span></a>
									</li>
									<li>
										<a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"><img src="../images/lazy.svg" data-src="images/icon/icon_25.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Delete Account</span></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.user-data -->
					</div>
				</header>
				<!-- End Header -->

				<h2 class="main-title d-block d-lg-none">Add New Property</h2>

				<div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">aaa</h4>
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Property Title*</label>
                        <input type="text" placeholder="Your Property Name">
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Description*</label>
                        <textarea class="size-lg" placeholder="Write about property..."></textarea>
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Category*</label>
                                <select class="nice-select">
									<option value="1">Apartments</option>
									<option value="2">Condos</option>
									<option value="3">Houses</option>
									<option value="4">Industrial</option>
									<option value="6">Villas</option>
								</select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Listed in*</label>
                                <select class="nice-select">
									<option>All Listing</option>
									<option>Buy</option>
                                    <option>Sell</option>
                                    <option>Rent</option>
								</select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
								<label for="">Price*</label>
                                <input type="text" placeholder="Your Price">
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
								<label for="">Yearly Tax Rate*</label>
                                <input type="text" placeholder="Tax Rate">
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                    </div>
                </div>
				<!-- /.card-box -->
				<div class="bg-white card-box border-20 mt-40">
					<h4 class="dash-title-three">Listing Details</h4>
					<div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Size in ft*</label>
                                <input type="text" placeholder="Ex: 3,210 sqft">
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Bedrooms*</label>
                                <select class="nice-select">
									<option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
								</select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Bathrooms*</label>
                                <select class="nice-select">
									<option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
								</select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
						<div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Kitchens*</label>
                                <select class="nice-select">
									<option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
								</select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
						<div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Garages</label>
                                <select class="nice-select">
									<option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
								</select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
						<div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Garage Size</label>
                                <input type="text" placeholder="Ex: 1,230 sqft">
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
						<div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Year Built*</label>
                                <input type="text" placeholder="Type Year">
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Floors No*</label>
                                <select class="nice-select">
									<option value="0">Ground</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
								</select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
						<div class="col-12">
							<div class="dash-input-wrapper">
								<label for="">Description*</label>
								<textarea class="size-lg" placeholder="Write about property..."></textarea>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
                    </div>
				</div>
				<!-- /.card-box -->

				<div class="bg-white card-box border-20 mt-40">
					<h4 class="dash-title-three">Photo & Video Attachment</h4>
                    <div class="dash-input-wrapper mb-20">
                        <label for="">File Attachment*</label>

                        <div class="attached-file d-flex align-items-center justify-content-between mb-15">
                            <span>PorpertyImage_01.jpg</span>
                            <a href="#" class="remove-btn"><i class="bi bi-x"></i></a>
                        </div>
						<div class="attached-file d-flex align-items-center justify-content-between mb-15">
                            <span>PorpertyImage_02.jpg</span>
                            <a href="#" class="remove-btn"><i class="bi bi-x"></i></a>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <div class="dash-btn-one d-inline-block position-relative me-3">
                        <i class="bi bi-plus"></i>
                        Upload File
                        <input type="file" id="uploadCV" name="uploadCV" placeholder="">
                    </div>
                    <small>Upload file .jpg,  .png,  .mp4</small>
				</div>
				<!-- /.card-box -->

				<div class="bg-white card-box border-20 mt-40">
					<h4 class="dash-title-three m0 pb-5">Select Amenities</h4>
					<ul class="style-none d-flex flex-wrap filter-input">
						<li>
							<input type="checkbox" name="Amenities" value="01">
							<label>A/C & Heating</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="02" placeholder="">
							<label>Garages</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="03">
							<label>Swimming Pool</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="04">
							<label>Parking</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="05">
							<label>Lake View</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="06">
							<label>Garden</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="07">
							<label>Disabled Access</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="08">
							<label>Pet Friendly</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="09">
							<label>Ceiling Height</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="10">
							<label>Outdoor Shower</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="11">
							<label>Refrigerator</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="12">
							<label>Fireplace</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="13">
							<label>Wifi</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="14">
							<label>TV Cable</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="15">
							<label>Barbeque</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="16">
							<label>Laundry</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="17">
							<label>Dryer</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="18">
							<label>Lawn</label>
						</li>
						<li>
							<input type="checkbox" name="Amenities" value="19">
							<label>Elevator</label>
						</li>
					</ul>
				</div>
				<!-- /.card-box -->

				<div class="bg-white card-box border-20 mt-40">
					<h4 class="dash-title-three">Address & Location</h4>
					<div class="row">
						<div class="col-12">
							<div class="dash-input-wrapper mb-25">
								<label for="">Address*</label>
								<input type="text" placeholder="145/A, Ranchview">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-lg-4">
							<div class="dash-input-wrapper mb-25">
								<label for="">Country*</label>
								<select class="nice-select">
									<option value="0">Select Country</option>
									<option>Afghanistan</option>
									<option>Albania</option>
									<option>Algeria</option>
									<option>Andorra</option>
									<option>Angola</option>
									<option>Antigua and Barbuda</option>
									<option>Argentina</option>
									<option>Armenia</option>
									<option>Australia</option>
									<option>Austria</option>
									<option>Azerbaijan</option>
									<option>Bahamas</option>
									<option>Bahrain</option>
									<option>Bangladesh</option>
									<option>Barbados</option>
									<option>Belarus</option>
									<option>Belgium</option>
									<option>Belize</option>
									<option>Benin</option>
									<option>Bhutan</option>
								</select>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-lg-4">
							<div class="dash-input-wrapper mb-25">
								<label for="">City*</label>
								<select class="nice-select">
									<option value="0">Select City</option>
									<option>Dhaka</option>
									<option>Tokyo</option>
									<option>Delhi</option>
									<option>Shanghai</option>
									<option>Mumbai</option>
									<option>Bangalore</option>
								</select>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-lg-4">
							<div class="dash-input-wrapper mb-25">
								<label for="">State*</label>
								<select class="nice-select">
									<option value="0">Select State</option>
									<option>Dhaka</option>
									<option>Tokyo</option>
									<option>Delhi</option>
									<option>Shanghai</option>
									<option>Mumbai</option>
									<option>Bangalore</option>
								</select>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						<div class="col-12">
							<div class="dash-input-wrapper mb-25">
								<label for="">Map Location*</label>
								<div class="position-relative">
									<input type="text" placeholder="XC23+6XC, Moiran, N105">
									<button class="location-pin tran3s"><img src="../images/lazy.svg" data-src="images/icon/icon_16.svg" alt="" class="lazy-img m-auto"></button>
								</div>
								<div class="map-frame mt-30">
									<div class="gmap_canvas h-100 w-100">
										<iframe class="gmap_iframe h-100 w-100" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dhaka collage&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
									</div>
								</div>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
					</div>
				</div>
				<!-- /.card-box -->
				<div class="button-group d-inline-flex align-items-center mt-30">
					<a href="#" class="dash-btn-two tran3s me-3">Submit Property</a>
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
						<img src="../images/lazy.svg" data-src="images/icon/icon_22.svg" alt="" class="lazy-img m-auto">
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
		<script src="../vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- WOW js -->
		<script src="../vendor/wow/wow.min.js"></script>
		<!-- Slick Slider -->
		<script src="../vendor/slick/slick.min.js"></script>
		<!-- Fancybox -->
		<script src="../vendor/fancybox/fancybox.umd.js"></script>
		<!-- Lazy -->
		<script src="../vendor/jquery.lazy.min.js"></script>
		<!-- js Counter -->
		<script src="../vendor/jquery.counterup.min.js"></script>
		<script src="../vendor/jquery.waypoints.min.js"></script>
		<!-- Nice Select -->
		<script src="../vendor/nice-select/jquery.nice-select.min.js"></script>
		<!-- validator js -->
		<script src="../vendor/validator.js"></script>

		<!-- Theme js -->
		<script src="../js/theme.js"></script>
	</div> <!-- /.main-page-wrapper -->
</body>

</html>
