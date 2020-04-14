<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--left kt-aside--fixed kt-page--loading">

		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="index.html">
					<!-- <img alt="Logo" src="<?php echo asset_url()?>/media/logos/logo-9-sm.png" /> -->
					<span class="h3">ENGLISH LITERATURE</span>
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>

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
											<span class="kt-header__topbar-username kt-visible-desktop"><?php echo $_SESSION['id_admin']?></span>
											<img alt="Pic" src="<?php echo asset_url()?>media/users/300_21.jpg" />
										
										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

										<!--begin: Head -->
										<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
											<div class="kt-user-card__avatar">
												<img class="kt-hidden-" alt="Pic" src="<?php echo asset_url()?>media/users/300_25.jpg" />

												<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
												<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
											</div>
											<div class="kt-user-card__name">
												<?php echo $_SESSION['id_admin']?>
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
												<a href="<?php echo site_url('SimCheck/logout')?>" class="btn btn-label-brand btn-sm btn-bold">Log Out</a>
											</div>
										</div>

										<!--end: Navigation -->
									</div>
									<?php }else{ ?>
										<a href="<?php echo site_url('SimCheck/login')?>" class="kt-header__topbar-username kt-visible-desktop">You're not logged in yet, Login Now</span>
											
										<?php } ?>
								</div>

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

								