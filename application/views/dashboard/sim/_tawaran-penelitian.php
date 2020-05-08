			<?php include('_padding-content.php') ?>
				<!--Begin::Section-->
				<div class="row">
					<div class="col-xl-12">
						<!--begin::Portlet-->
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon-star h2 text-warning"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Research Offer
									</h3>
									<!-- <span class="kt-widget14__desc text-danger font-weight-bold">
										 (This Pages is still on working progress, only dummy data displayed)
									</span> -->
								</div>
							</div>
							<div class="kt-portlet__body">
								<?php foreach ($data as $t){?>
								<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--bordered">
										<div class="kt-portlet__head" style="background: #f7f8fa">
											<div class="kt-portlet__head-label mt-3 ">
												<h3 class="kt-portlet__head-title">
													<i class="fa fa-bookmark text-success"></i>
													<?php echo $t->judul ?>
												</h3> 
											</div>
											<div class="kt-portlet__head-toolbar" >
												<ul class="nav nav-tabs nav-tabs-bold nav-tabs-line   nav-tabs-line-right nav-tabs-line-brand" role="tablist" >
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_portlet_tab_1_1" role="tab">
															<i class="flaticon2-information h2"></i>
															Info
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_portlet_tab_1_1">
													<div class="form-group row">
														<label class="col-lg-1">From</label>
														<div class="col-lg-4">
															<label class=" text-dark font-weight-bold"><?php echo $t->nama?></label>
														</div>
														<label class="col-lg-1">Interest</label>
														<div class="col-lg-4">
															<label class=" text-dark font-weight-bold"><?php echo $t->interest?></label>
														</div>
													</div>
													<div class="form-group row">
														
													</div>
													<div class="form-group row">
														<label class="col-lg-1 text-danger">Notes :</label>
														<div class="col-lg-11">
															<label class=" text-dark"><?php echo $t->notes ?></label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								<?php }?>

								<div ><?php echo $pagination; ?></div>
							</div>
						</div>
						<!--end::Portlet-->
					</div>
				</div>
				<!--End::Section-->
				<?php include('_padding-content--end.php') ?>

												<!-- Begin:: Komentar -->
												<!-- <div class="tab-pane" id="kt_portlet_tab_1_2">
													
													<div class="kt-widget3">
														<div class="kt-widget3__item">
															<div class="kt-widget3__header">
																<div class="kt-widget3__user-img">
																	<img class="kt-widget3__img" src="../assets/media/users/300_21.jpg" alt="">
																</div>
																<div class="kt-widget3__info">
																	<a href="#" class="kt-widget3__username">
																		Krisbiantoro Prabowo
																	</a><br>
																	<span class="kt-widget3__time">
																		5 July 2019, at 09:00 
																	</span>
																</div>
																<span class="kt-widget3__status kt-font-info">
																	<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">Mahasiswa</span>
																</span>
															</div>
															<div class="kt-widget3__body">
																<p class="kt-widget3__text text-dark">
																	Maaf Bu, untuk judul penelitiannya apakah sudah ada yang mengambil atau belum ya bu?
																</p>
															</div>
														</div>
														<div class="kt-widget3__item">
															<div class="kt-widget3__header">
																<div class="kt-widget3__user-img">
																	<img class="kt-widget3__img" src="../assets/media/users/user1.jpg" alt="">
																</div>
																<div class="kt-widget3__info">
																	<a href="#" class="kt-widget3__username">
																		Sri Winiarti S.T, M.Cs
																	</a><br>
																	<span class="kt-widget3__time">
																		6 July 2019, at 13:45
																	</span>
																</div>
																<span class="kt-widget3__status kt-font-brand">
																	<span class="btn btn-label-danger btn-sm btn-bold btn-font-md">From</span>
																</span>
															</div>
															<div class="kt-widget3__body">
																<p class="kt-widget3__text text-dark">
																	Belum mas, langsung contact WA aja ya jika berminat
																</p>
															</div>
														</div>
														<div class="form-group">
															<label class="col-form-label font-weight-bold"> Tambahkan Komentar </label>
																<span class="kt-widget3__time">
																	<small>sebagai Krisbiantoro Prabowo </small>
																</span>
															<textarea class="form-control" placeholder="Add a Reply..."></textarea>
														</div>
														<div class="kt-form__actions">
															<button type="submit" class="btn btn-success">Submit</button>
														</div>
													</div>
													
												</div> -->
												<!-- End:: Komentar -->