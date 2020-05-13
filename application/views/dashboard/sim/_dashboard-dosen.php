					<?php include('_padding-content.php') ?>
						<!--Begin::Section-->
						<div class="row">
							<div class="col-md-8">
								<!--begin::Portlet-->
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head">
										<div class="kt-portlet__head-label">
											<span class="kt-portlet__head-icon">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand" style="width: 31px !important;height: 31px !important">
									        	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        <rect id="bound" x="0" y="0" width="24" height="24"/>
											        <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
											        <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000"/>
											    </g>
											</svg>
											</span>
											<h3 class="kt-portlet__head-title">
												Dashboard
											</h3>
										</div>
									</div>
									<form method="GET" action="<?php echo base_url('SimCheck/titletfidfproc')?>">
										<div class="kt-portlet__body">
											<div class="alert alert-outline-success fade show" role="alert">
												<div class="alert-icon">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33px" height="33px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning" style="width: 35px !important;height: 35px !important">
										        		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        		        <rect id="bound" x="0" y="0" width="24" height="24"/>
									        		        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" id="Combined-Shape" fill="#000000"/>
									        		        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
									        		    </g>
									        		</svg>											
									        	</div>
												<div class="alert-text">Hello <span class="font-weight-bold"><?php echo $_SESSION['nama']?></span>!<br>Welcome to Similarity Checker Web for English Literature, Ahmad Dahlan University.<br></div>
												<div class="alert-close">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true"><i class="la la-close"></i></span>
													</button>
												</div>
											</div>
											<div id="chart-penelitian"></div>
											<!--begin::Portlet-->
											<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<span class="kt-portlet__head-icon">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33px" height="33px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning" style="width: 33px !important;height: 33px !important">
												        		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											        		        <rect id="bound" x="0" y="0" width="24" height="24"/>
											        		        <path d="M18.5,6 C19.3284271,6 20,6.67157288 20,7.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 C17.6715729,20 17,19.3284271 17,18.5 L17,7.5 C17,6.67157288 17.6715729,6 18.5,6 Z M12.5,11 C13.3284271,11 14,11.6715729 14,12.5 L14,18.5 C14,19.3284271 13.3284271,20 12.5,20 C11.6715729,20 11,19.3284271 11,18.5 L11,12.5 C11,11.6715729 11.6715729,11 12.5,11 Z M6.5,15 C7.32842712,15 8,15.6715729 8,16.5 L8,18.5 C8,19.3284271 7.32842712,20 6.5,20 C5.67157288,20 5,19.3284271 5,18.5 L5,16.5 C5,15.6715729 5.67157288,15 6.5,15 Z" id="Combined-Shape" fill="#000000"/>
											        		    </g>
											        		</svg>
														</span>
														<h3 class="kt-portlet__head-title">
															My Summary Test Of Similarity Checks.
														</h3>
													</div>
												</div>
												<div class="kt-portlet__body">

													<span class="text-danger font-weight-bold">*(dummy data displayed below)</span>
													<ul style="font-weight:400;">
														<li>
															Test Taken : <span class="text-dark">1</span>
														</li>
														<li>
															Highest Score : <span class="text-dark">78</span>
														</li>
														<li>
															Last Test: <span class="text-dark">Mon, 24 February 2020</span> 
														</li>
													</ul>
												</div>
											</div>
											<div class="kt-portlet ">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<span class="kt-portlet__head-icon">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info" style="width: 31px !important;height: 31px !important">
														        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															        <rect id="bound" x="0" y="0" width="24" height="24"/>
															        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
															        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000"/>
															    </g>
															</svg>
														</span>
														<h3 class="kt-portlet__head-title">
															My Latest Research Offer
														</h3>
													</div>
												</div>
												<div class="kt-portlet__body">
													<span class="text-danger font-weight-bold">*(dummy data displayed below)</span>
													<!--begin::Portlet-->
													<div class="kt-portlet kt-portlet--tabs kt-portlet--bordered">
														<div class="kt-portlet__head" style="background: #f7f8fa">
															<div class="kt-portlet__head-label mt-3 ">
																<h3 class="kt-portlet__head-title">
																	<i class="fa fa-bookmark text-success"></i>
																	CODE MIXING ANALYSIS USED BY INDONESIAN VLOGGERS : A SOCIOLINGUISTIC
																</h3> 
															</div>
														</div>
													</div>
													<!--end::Portlet-->
													<!--begin::Portlet-->
													<div class="kt-portlet kt-portlet--tabs kt-portlet--bordered">
														<div class="kt-portlet__head" style="background: #f7f8fa">
															<div class="kt-portlet__head-label mt-3 ">
																<h3 class="kt-portlet__head-title">
																	<i class="fa fa-bookmark text-success"></i>
																	HIP HOP SLANG USED IN WIZ KHALIFA’S SONG LYRICS: A SOCIOLINGUISTIC STUDY
																</h3> 
															</div>
														</div>
													</div>
													<!--end::Portlet-->
													<a href="<?php echo base_url('SimCheck/tawaran_penelitian')?>" class="h5">More Details ></a>
												</div>
											</div>
											<!--end::Portlet-->
										</div>
									</form>
								</div>
								<!--end::Portlet-->
							</div>
							<!--begin::Portlet-->
							<div class="col-md-4">
								<div class="kt-portlet ">
									<div class="kt-portlet__body">
 
										<h5 class="text-center text-dark">Shortcut</h5> 
										<!--begin::Nav-->
										<div class="kt-grid-nav">
											<div class="kt-grid-nav__row">
												<a href="<?php echo site_url('Dosection/add_tawaran')?>" class="kt-grid-nav__item">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info" style="width: 31px !important;height: 31px !important">
												        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													        <rect id="bound" x="0" y="0" width="24" height="24"/>
													        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
													        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000"/>
													    </g>
													</svg>
													<span class="h6 kt-grid-nav__title text-primary" style="font-size: 1em !important">Offer A Research</span>
												</a>
												<a href="<?php echo site_url('Dosection/list_user')?>" class="kt-grid-nav__item">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger" style="width: 31px !important;height: 31px !important">
													    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
													        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"/>
													    </g>
													</svg>
													<span class="kt-grid-nav__title text-primary" style="font-size: 1em !important">User List</span>
												</a>
											</div>
											<div class="kt-grid-nav__row">
												<a href="<?php echo site_url('SimCheck/olah_akun')?>" class="kt-grid-nav__item">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning" style="width: 31px !important;height: 31px !important">
										        		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        		        <rect id="bound" x="0" y="0" width="24" height="24"/>
									        		        <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" id="Combined-Shape" fill="#000000"/>
									        		    </g>
									        		</svg>
													<span class="kt-grid-nav__title text-primary" style="font-size: 1em !important">Manage Account</span>
												</a>
												<a href="<?php echo site_url('SimCheck/list_penelitian')?>" class="kt-grid-nav__item">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info" style="width: 31px !important;height: 31px !important">
										        		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        		        <rect id="bound" x="0" y="0" width="24" height="24"/>
									        		        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
									        		        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" id="Combined-Shape" fill="#000000"/>
									        		        <rect id="Rectangle-152" fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
									        		        <rect id="Rectangle-152-Copy-2" fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
									        		        <rect id="Rectangle-152-Copy-3" fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
									        		        <rect id="Rectangle-152-Copy" fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
									        		        <rect id="Rectangle-152-Copy-5" fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
									        		        <rect id="Rectangle-152-Copy-4" fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
									        		    </g>
									        		</svg>
													<span class="kt-grid-nav__title text-primary" style="font-size: 1em !important">Research List</span>
												</a>
											</div>
										</div>
										<!--end::Nav-->
									</div>
								</div>

								<div class="kt-space-30"></div>

								<div class="kt-portlet ">
									<div class="kt-portlet__head kt-bg-danger ">
										<div class="kt-portlet__head-label ">
											<span class="kt-portlet__head-icon text-white">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning" style="width: 31px !important;height: 31px !important">
									        		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        		        <rect id="bound" x="0" y="0" width="24" height="24"/>
								        		        <path d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"/>
								        		        <rect id="Rectangle-28" fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) " x="11" y="4" width="2" height="16" rx="1"/>
									        		   </g>
									        	</svg>
											</span>
											<h3 class="kt-portlet__head-title text-white">
												Quick Guide
											</h3>
										</div>
									</div>
									<div class="kt-portlet__body">
										<ol style="color: black; font-weight:400; font-size: 1.1em" class="text-justify">
											<li>
												Choose any of Similarity Checker Type on Navbar Menu on the Top.
											</li>
											<li>
												 Click <span class="btn-success">&nbsp;Start&nbsp;</span> button to begin the proccess of Similarity Check.
											</li>
											<li>
												If you wanted to offer a research, Head over to 'Offer A Research' menu or by using shortcut navigation.
											</li>
											<li>
												You can change your password or avatar profiles just by heading to 'Manage Account' menu.
											</li>
											<li>
												Any Research done or still going by students were listed on 'Research List'.
											</li>
										</ol>									
									</div>
								</div>

							</div>
							<!--end::Portlet-->
						</div>
						<!--End::Section-->

					<?php include('_padding-content--end.php') ?>