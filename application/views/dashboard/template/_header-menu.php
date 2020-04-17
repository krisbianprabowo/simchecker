<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--left kt-aside--fixed kt-page--loading">

		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<?php if (isset($_SESSION['logged_in'])) {?>
			<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
				<div class="kt-header-mobile__logo">
					<a href="index.html">
						<!-- <img alt="Logo" src="<?php echo asset_url()?>/media/logos/logo-9-sm.png" /> -->
						<span class="h3">ENGLISH LITERATURE</span>
					</a>
				</div>
				<div class="kt-header-mobile__toolbar">
					<!-- <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button> -->
					<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
					<a href="<?php echo site_url('SimCheck/olah_akun')?>" ><img class="kt-header-mobile__toolbar-toggler" style="width: 3.1rem;"src="<?php echo asset_url().$_SESSION['photo_user']?>" ></a>
				</div>
			</div>
		<?php } else {?>
			<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
				<div class="kt-header-mobile__logo">
					<a href="index.html">
						<!-- <img alt="Logo" src="<?php echo asset_url()?>/media/logos/logo-9-sm.png" /> -->
						<span class="h3">ENGLISH LITERATURE</span>
					</a>
				</div>
				<div class="kt-header-mobile__toolbar">
					<!-- <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button> -->
					<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
					<div class="kt-margin-l-10-mobile"></div>
					<a href="<?php echo site_url('SimCheck/login')?>" >
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="22px" viewBox="0 0 22 22" version="1.1" class="kt-svg-icon">
						    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <rect id="bound" x="0" y="0" width="30" height="30"/>
						        <rect id="Rectangle" fill="#000000" opacity="0.3" transform="translate(9.000000, 12.000000) rotate(-270.000000) translate(-9.000000, -12.000000) " x="8" y="6" width="2" height="12" rx="1"/>
						        <path d="M20,7.00607258 C19.4477153,7.00607258 19,6.55855153 19,6.00650634 C19,5.45446114 19.4477153,5.00694009 20,5.00694009 L21,5.00694009 C23.209139,5.00694009 25,6.7970243 25,9.00520507 L25,15.001735 C25,17.2099158 23.209139,19 21,19 L9,19 C6.790861,19 5,17.2099158 5,15.001735 L5,8.99826498 C5,6.7900842 6.790861,5 9,5 L10.0000048,5 C10.5522896,5 11.0000048,5.44752105 11.0000048,5.99956624 C11.0000048,6.55161144 10.5522896,6.99913249 10.0000048,6.99913249 L9,6.99913249 C7.8954305,6.99913249 7,7.89417459 7,8.99826498 L7,15.001735 C7,16.1058254 7.8954305,17.0008675 9,17.0008675 L21,17.0008675 C22.1045695,17.0008675 23,16.1058254 23,15.001735 L23,9.00520507 C23,7.90111468 22.1045695,7.00607258 21,7.00607258 L20,7.00607258 Z" id="Path-103" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.000000, 12.000000) rotate(-90.000000) translate(-15.000000, -12.000000) "/>
						        <path d="M16.7928932,9.79289322 C17.1834175,9.40236893 17.8165825,9.40236893 18.2071068,9.79289322 C18.5976311,10.1834175 18.5976311,10.8165825 18.2071068,11.2071068 L15.2071068,14.2071068 C14.8165825,14.5976311 14.1834175,14.5976311 13.7928932,14.2071068 L10.7928932,11.2071068 C10.4023689,10.8165825 10.4023689,10.1834175 10.7928932,9.79289322 C11.1834175,9.40236893 11.8165825,9.40236893 12.2071068,9.79289322 L14.5,12.0857864 L16.7928932,9.79289322 Z" id="Path-104" fill="#000000" fill-rule="nonzero" transform="translate(14.500000, 12.000000) rotate(-90.000000) translate(-14.500000, -12.000000) "/>
						    </g>
						</svg>

					</a>
					<div class="kt-margin-r-10-mobile"></div>
				</div>
			</div>
		<?php } ?>
		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-container kt-container--fluid">
							<!-- begin: Header Menu -->
							<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
								<button class="kt-aside-toggler kt-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
								<div class="kt-margin-l-30-desktop"></div>
								<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">

									<ul class="kt-menu__nav ">
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover"><a href="<?php echo site_url('SimCheck')?>" class="kt-menu__link"><span class="kt-menu__link-text">Home</span></a>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Similarity&nbsp;Check</span><i class="kt-menu__hor-arrow la la-angle-down"></i></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item "><a href="<?php echo site_url('SimCheck/simcheck_title')?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Undergraduate Thesis</span></a></li>
													<li class="kt-menu__item "><a href="<?php echo site_url('SimCheck/simcheck_theory')?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Theory (Bab 2)</span></a></li>
												</ul>
											</div>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Research</span><i class="kt-menu__hor-arrow la la-angle-down"></i></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item "><a href="<?php echo site_url('SimCheck/list_penelitian')?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">List of Research</span></a></li>
													<li class="kt-menu__item "><a href="<?php echo site_url('SimCheck/trend')?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Trend</span></a></li>
													<!-- <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Campaigns</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">3</span></span></a></li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Cloud Manager</span><i class="kt-menu__hor-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add"></i><span class="kt-menu__link-text">File Upload</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">3</span></span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-signs-1"></i><span class="kt-menu__link-text">File Attributes</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-folder"></i><span class="kt-menu__link-text">Folders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text">System Settings</span></a></li>
															</ul>
														</div>
													</li> -->
												</ul>
											</div>
										</li>
										
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover"><a href="<?php echo site_url('SimCheck/tawaran_penelitian')?>" class="kt-menu__link"><span class="kt-menu__link-text">Research&nbsp;Offer</span></a>
										</li>
										<?php if (isset($_SESSION['logged_in'])) {?>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover"><a href="<?php echo site_url('SimCheck/olah_akun')?>" class="kt-menu__link hide-menus"><span class="kt-menu__link-text">My&nbsp;Account&nbsp;(<span class="font-weight-bold"><?php echo $_SESSION['id_user']?></span>)&nbsp;</span></a>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover"><a href="<?php echo site_url('SimCheck/logout')?>" class="kt-menu__link hide-menus"><div class="btn btn-label-brand btn-sm btn-bold text-danger">Logout</div></a>
										</li>
										<?php }else { ?>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover"><a href="<?php echo site_url('SimCheck/login')?>" class="kt-menu__link hide-menus"><div class="btn btn-label-brand btn-sm btn-bold text-success">Login</div></a>
										</li>
										<?php } ?>
 									</ul>
								</div>
							</div>

							<!-- end: Header Menu -->

							<!-- begin:: Brand -->
							<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
								<a class="kt-header__brand-logo" href="index.html">
									<!-- <img alt="Logo" src="<?php echo asset_url()?>/media/logos/logo-9.png" /> -->
									<span class="h2">ENGLISH LITERATURE</span>
								</a>
							</div>

							<!-- end:: Brand -->

							<!-- begin:: Header Topbar -->
							<div class="kt-header__topbar kt-grid__item">

								<!--begin: Search -->
								<!-- <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
										<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
											<form method="get" class="kt-quick-search__form">
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
													<input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
													<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
												</div>
											</form>
											<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
											</div>
										</div>
									</div>
								</div> -->

								<!--end: Search -->

								<!--begin: Notifications -->
								
								<!--end: Notifications -->

								<!--begin: Quick actions -->
								

								<!--end: Quick actions -->

								<!--begin: User bar -->
								
								<div class="kt-header__topbar-item kt-header__topbar-item--user">
									<?php if (isset($_SESSION['logged_in'])) {?>
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										
											<span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
											<span class="kt-header__topbar-username kt-visible-desktop"><?php echo $_SESSION['id_user']?></span>
											<img alt="Pic" src="<?php echo asset_url().$_SESSION['photo_user']?>" />
										
										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

										<!--begin: Head -->
										<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
											<div class="kt-user-card__avatar">
												<img class="kt-hidden-" alt="Pic" src="<?php echo asset_url().$_SESSION['photo_user']?>" />

												<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
												<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
											</div>
											<div class="kt-user-card__name">
												<?php echo $_SESSION['id_user']?>
											</div>
											<div class="kt-user-card__badge">
												<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">Mahasiswa</span>
											</div>
										</div>

										<!--end: Head -->

										<!--begin: Navigation -->
										<div class="kt-notification">
											<a href="<?php echo site_url('SimCheck/olah_akun')?>" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-calendar-3 kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														My Account
													</div>
													<div class="kt-notification__item-time">
														Account settings
													</div>
												</div>
											</a>
											<div class="kt-notification__custom">
												<a href="<?php echo site_url('SimCheck/logout')?>" class="btn btn-label-brand btn-sm btn-bold text-danger">Log Out</a>
											</div>
										</div>

										<!--end: Navigation -->
									</div>
									<?php }else{ ?>
										<a href="<?php echo site_url('SimCheck/login')?>" class="kt-header__topbar-username kt-visible-desktop"><span>You're not logged in yet, <span class="text-success">Login Now</span></span></a>
											
										<?php } ?>
								</div>
								<div class="kt-margin-r-100-desktop"></div>
								<!--end: User bar -->

							</div>

							<!-- end:: Header Topbar -->
						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
						<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">

							<?php include('_header-aside.php') ?>
							<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

								