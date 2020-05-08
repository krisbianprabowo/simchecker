					<?php include('_padding-content.php') ?>

						<!--Begin::Section-->
						<div class="kt-portlet kt-portlet__body--bordered">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon2-list-3 h2 text-primary"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Research List <?php echo $datatable;?>
									</h3>
								</div>

							</div>
							<div class="kt-portlet__body">
								<br>
								<!--begin::Section-->
								<div class="kt-section">
									<div class="kt-section__content">
										<!--begin: Search Form -->
										<div class="kt-form kt-form--label-right kt-margin-t-0 kt-margin-b-10">
											<div class="row align-items-center">
												<div class="col-sm-8 order-1 order-xl-1">
													<div class="row align-items-center">
														<div class="col-md-12 kt-margin-b-20-tablet-and-mobile">
															<div class="kt-input-icon kt-input-icon--left">
																<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-4 order-2 order-xl-1 kt-align-right">
													<span class="text-danger text-bold font-weight-bold">Click any columns to sort the table <i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i>* </span>
												</div>
											</div>
										</div>

										<!--end: Search Form -->
									</div>
									<div class="kt-portlet__body kt-portlet__body--fit">
										<!--begin: Datatable -->
										<table class="kt-datatable table-hover responsive" id="auto_column_hide" width="100%">
											<thead>
												<tr>
													<th title="Field #2">NIM</th>
													<th title="Field #3">Name</th>
													<th title="Field #4">Title</th>
													<th title="Field #5">Finished on</th>
												</tr>
											</thead>
											<tbody >
												<?php foreach($l as $l){ ?>
													<tr>
														<td><span class="text-dark">
															<?php echo $l->NIM?></span></td>
														<td><span class="text-dark">
															<?php echo $l->nama?></span></td>
														<td><span class="text-dark">
															<?php echo $l->judul?></td>
														<td><span class="text-dark">
															<?php echo $l->tanggal_ujian?></span></td>
													</tr>
												<?php
												}?>
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
						<!--end::Section-->
						<!--begin::Page Scripts(used by this page) -->
						
					<?php include('_padding-content--end.php') ?>