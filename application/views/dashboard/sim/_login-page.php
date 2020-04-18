<!DOCTYPE html>

<!-- 

-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>English Literature UAD Site</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
		    WebFont.load({
		        google: {
		            "families": ["Poppins:300,400,500,600,700"]
		        },
		        active: function() {
		            sessionStorage.fonts = true;
		        }
		    });
		</script>

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="<?php echo asset_url()?>/app/custom/login/login-v1.default.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url()?>/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url()?>/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<?php echo asset_url()?>/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php echo asset_url()?>/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="https://localhost/simchecker/assets//vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="https://localhost/simchecker/assets//vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="https://localhost/simchecker/assets//vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url()?>/vendors/custom/login-custom.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="<?php echo asset_url()?>/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url()?>/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url()?>/demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url()?>/demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo asset_url()?>/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

					<!--begin::Aside-->
					<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(<?php echo asset_url()?>/media//bg/bg-4.jpg);">
						<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
							
							<div class="kt-grid__item kt-grid__item--middle">
								<h3 class="kt-login__title">Welcome!</h3>
								<h4 class="kt-login__subtitle">Here's the website of English Literature Undergraduate Program in Ahmad Dahlan University</h4>
								
							</div>
						</div>
						<div class="kt-grid__item">
							<div class="kt-login__info">
								<div class="kt-login__copyright">
									&copy 2020 
								</div>
							</div>
						</div>
					</div>

					<!--begin::Aside-->

					<!--begin::Content-->
					<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

						<!--begin::Head-->
						<div class="kt-login__head">
							
							<a href="<?php echo site_url('SimCheck')?>" class="kt-link kt-login__signup-link text-primary h6">Back to Home <i class="fa fa-home"></i></a>
						</div>

						<!--end::Head-->

						<!--begin::Body-->
						<div class="kt-login__body">

							<!--begin::Signin-->

							<div class="kt-login__form">
								<?php
								if(isset($_SESSION['info'])){
								$info = $this->session->flashdata('info');?>
									<div class="row">
										<div class="col-md-12">
										    <?php  echo $info; ?>
										</div>
									</div>
								<?php } ?>
								<div class="kt-login__title">
									<h3 class="text-primary">ENGLISH LITERATURE</h3>
								</div>
								<!--begin::Form-->
								<form class="kt-form">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Username" id="username" autocomplete="off">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" id="password">
									</div>

									<!--begin::Action-->
									<div class="kt-login__actions">
										<div class="form-group">
											<button class="btn btn-brand btn-elevate kt-login__btn-primary" id="btn-login">Sign In</button>
										</div>
									</div>

									<!--end::Action-->
								</form>

								<!--end::Form-->

								<!--begin::Divider-->
								<div class="kt-login__divider">
									<div class="kt-divider">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>

								<!--end::Divider-->

								<!--begin::Options-->
								<div class="row">
									<div class="col-3"></div>
									<div class="col-auto logo-position">
										<a href="#" class="kt-login__logo">
										<img src="<?php echo asset_url()?>/media/logos/logouadmin.png">
									</a>
									</div>
									<div class="col-4"></div>
								</div>

								<!--end::Options-->
							</div>

							<!--end::Signin-->
						</div>

						<!--end::Body-->
					</div>

					<!--end::Content-->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>


		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?php echo asset_url()?>/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<?php echo asset_url()?>/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/components/vendors/bootstrap-datepicker/init.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/components/vendors/bootstrap-timepicker/init.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/components/vendors/bootstrap-switch/init.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/components/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/components/vendors/bootstrap-notify/init.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/components/vendors/jquery-validation/init.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/custom/components/vendors/sweetalert2/init.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo asset_url()?>/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php echo asset_url()?>/app/custom/login/login-v1.js" type="text/javascript"></script>
		<script src="<?php echo asset_url()?>/app/custom/general/components/extended/sweetalert2.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
		<!-- <?php if (!empty($_GET['logout'])){
			if ($_GET['logout']=='success' and !empty($_SESSION['outlog'])){ ?>
				<script>
				$(document).ready(function () {
				    swal.fire({ type: "success",title: "Logout", text: "You are already logout!",customClass: 'animated fadeInDown',showConfirmButton: false,timer:1000 });
				});
				</script>
		<?php }
		}?> -->
		<!--begin::Global App Bundle(used by all pages) -->
		<script src="<?php echo asset_url()?>/app/bundle/app.bundle.js" type="text/javascript"></script>
		
		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>