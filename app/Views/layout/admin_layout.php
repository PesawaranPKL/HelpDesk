<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Jobie : jobie Job Portal Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Jobie : jobie Job Portal Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Jobie : Job Portal  Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://jobie.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<title>Dashboard Admin Helpdesk</title>
	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo1.png" type="image/x-icon">
	<link href="<?php base_url() ?>/assets/admin/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php base_url() ?>/assets/admin/vendor/chartist/css/chartist.min.css">
	<!-- Datatable -->
	<link rel="stylesheet" href="<?php base_url() ?>assets/admin/vendor/datatables/css/jquery.dataTables.min.css">
	<!-- Custom Stylesheet -->
	<link href="<?php base_url() ?>/assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?php base_url() ?>/assets/admin/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php base_url() ?>/assets/admin/vendor/LineIcons.css" rel="stylesheet">
	<link href="<?php base_url() ?>/assets/admin/css/style.css" rel="stylesheet">
	<link href="<?php base_url() ?>/assets/admin/vendor/dropzone/dist/dropzone.css" rel="stylesheet">

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
			<a href="<?php base_url() ?>/dashboard" class="brand-logo">
				<center>
					<img class="logo1" src="<?php base_url() ?>/assets/images/logo/logo-B1.png" alt="Logo Helpdesk">
				</center>
				<img class="logo2 brand-title" src="<?php base_url() ?>/assets/images/logo/logo-B2.png" alt="Logo Helpdesk">
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
							<div class="dashboard_bar">
								Dashboard Admin
							</div>
						</div>

						<ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Cari...">
									<div class="input-group-append">
										<button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
									</div>
								</div>
							</li>
							
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
									<img src="<?php base_url() ?>/assets/admin/images/profile/17.jpg" width="20" alt="">
									<div class="header-info">
										<span class="text-black">Oda Dink</span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
											<polyline points="22,6 12,13 2,6"></polyline>
										</svg>
										<span class="ms-2">Inbox </span>
									</a>
									<a href="page-login.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout </span>
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
					<li><a href="<?php base_url() ?>/dashboard" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					
					
					<li><a href="<?php base_url() ?>/dashboard/admin/artikel" class="ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Artikel</span>
						</a>
					</li>
					<li class="has-menu">
						<a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-help-1"></i>
							<span class="nav-text">FAQ</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="<?php base_url() ?>/dashboard/admin/faq">Daftar FAQ</a></li>
						</ul>
					</li>
                    <li><a href="<?php base_url()?>/dashboard/admin/daftar_pengaduan" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-incoming-call"></i>
							<span class="nav-text">Daftar Pengaduan</span>
						</a>
					</li>
					<li><a href="<?php base_url()?>/dashboard/admin/chatbot" class="ai-icon" aria-expanded="false">
							<i class="fa fa-comments"></i>
							<span class="nav-text">Chat Bot</span>
						</a>
					</li>
                </ul>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<?= $this->renderSection('content') ?>

	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="<?php base_url() ?>/assets/admin/vendor/global/global.min.js"></script>
	<script src="<?php base_url() ?>/assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php base_url() ?>/assets/admin/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="<?php base_url() ?>/assets/admin/vendor/owl-carousel/owl.carousel.js"></script>
	<script src="<?php base_url() ?>/assets/admin/vendor/ckeditor/ckeditor.js"></script>


	<!-- Chart piety plugin files -->
	<script src="<?php base_url() ?>/assets/admin/vendor/peity/jquery.peity.min.js"></script>

	<!-- Dashboard 1 -->
	<script src="<?php base_url() ?>/assets/admin/js/dashboard/dashboard-1.js"></script>

	<script src="<?php base_url() ?>/assets/admin/vendor/dropzone/dist/dropzone.js"></script>
	<script src="<?php base_url() ?>/assets/admin/js/custom.min.js"></script>
	<script src="<?php base_url() ?>/assets/admin/js/deznav-init.js"></script>
	<script src="<?php base_url() ?>/assets/admin/js/demo.js"></script>
	<script src="<?php base_url() ?>/assets/admin/js/styleSwitcher.js"></script>

	<!-- Datatable -->
    <script src="<?php base_url()?>/assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php base_url()?>/assets/admin/js/plugins-init/datatables.init.js"></script>

	<?= $this->renderSection('script') ?>
	
	
	<script>
		function carouselReview() {
			/*  testimonial one function by = owl.carousel.js */
			function checkDirection() {
				var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
				if (htmlClassName == 'rtl') {
					return true;
				} else {
					return false;

				}
			}
			jQuery('.testimonial-one').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 15,
				nav: false,
				dots: false,
				left: true,
				rtl: checkDirection(),
				navText: ['', ''],
				responsive: {
					0: {
						items: 1
					},
					800: {
						items: 2
					},
					991: {
						items: 2
					},

					1200: {
						items: 2
					},
					1600: {
						items: 2
					}
				}
			})
			jQuery('.testimonial-two').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 15,
				nav: false,
				dots: true,
				left: true,
				rtl: checkDirection(),
				navText: ['', ''],
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 2
					},
					991: {
						items: 3
					},

					1200: {
						items: 3
					},
					1600: {
						items: 4
					}
				}
			})
		}
		jQuery(window).on('load', function() {
			setTimeout(function() {
				carouselReview();
			}, 1000);
		});
	</script>
</body>

</html>