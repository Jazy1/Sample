@include('teacher.header')

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
							<a href="add-property.html" class="btn-two"><span>Logout</span> <i class="fa-thin fa-arrow-up-right"></i></a>
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


				<div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">Create Post</h4>
                    <!-- /.dash-input-wrapper -->
            <form method="post">
            @csrf

                    <div class="dash-input-wrapper mb-30">
                        <label for="">Content*</label>
                        <textarea class="size-lg" name="content" placeholder="Write about property..."></textarea>
                </div>

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
                        <input type="file" id="uploadCV" name="file" placeholder="">
                    </div>
                    <small>Upload file .jpg,  .png,  .mp4</small>
				</div>
				<!-- /.card-box -->

                <div class="dash-input-wrapper mb-30">
                    <label for="">Objects*</label>
                    <select class="nice-select" name="objects">
                        <option value="Public">Public</option>
                        <option value="Specific">Specific</option>
                    </select>
                </div>

				<div class="button-group d-inline-flex align-items-center mt-30">
					<a href="#" class="dash-btn-two tran3s me-3">Submit</a>
					<a href="#" class="dash-cancel-btn tran3s">Cancel</a>
				</div>
            </form>
			</div>
		</div>
		<!-- /.dashboard-body -->






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
