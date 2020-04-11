					<?php include('/../sim/_padding-content.php') ?>

						<!--Begin::Section-->
						<div class="kt-portlet kt-portlet__body--bordered">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon2-list-3 h2 text-primary"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Daftar Penelitian
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
												<div class="col-xl-8 order-2 order-xl-1 kt-align-right">
													<div class="row align-items-center">
														<div class="col-md-8 kt-margin-b-20-tablet-and-mobile">
															<div class="kt-input-icon kt-input-icon--left">
																<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
																<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-4 order-2 order-xl-1 kt-align-right">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-outline-success btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="la la-download"></i> Export
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Choose an option</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-print"></i>
																		<span class="kt-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-excel-o"></i>
																		<span class="kt-nav__link-text">Excel</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
													&nbsp;
													<a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
														<i class="la la-plus"></i>
													Tambah Penelitian
													</a>
												</div>
											</div>
										</div>

										<!--end: Search Form -->
									</div>
									<div class="kt-portlet__body kt-portlet__body--fit">
										<!--begin: Datatable -->
										<table class="kt-datatable table-hover responsive no-wrap" id="auto_column_hide" width="100%">
											<thead>
												<tr>
													<th title="Field #1">No</th>
													<th title="Field #2">NIM</th>
													<th title="Field #3">Nama</th>
													<th title="Field #4">Judul</th>
													<th title="Field #5">Dosen Pembimbing</th>
													<th title="Field #6">Tanggal Ujian</th>
													<th title="Field #7">Nilai</th>
													<th title="Field #8">Status TA</th>
													<th title="Field #9">Dosen Penguji</th>
													<th title="Field #10">Tanggal Mulai</th>
													<th title="Field #11">Semester Mulai</th>
													<th title="Field #12">Semester Selesai</th>
													<th title="Field #13">Bab 2</th>
													<th title="Field #14">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($l as $l){ ?>
													<tr>
														<td><span class="text-dark">
															<?php echo $l->no?></span></td>
														<td><span class="text-dark">
															<?php echo $l->NIM?></span></td>
														<td><span class="text-dark">
															<?php echo $l->nama?></span></td>
														<td><span class="text-dark">
															<?php echo $l->judul?></span></td>
														<td><span class="text-dark">
															<?php echo $l->dosen_pembimbing?></span></td>
														<td><span class="text-dark">
															<?php echo $l->tanggal_ujian?></span></td>
														<td><span class="text-dark">
															<?php echo $l->nilai?></span></td>
														<td><span class="text-dark">
															<?php echo $l->status_ta?></span></td>
														<td><span class="text-dark">
															<?php echo $l->dosen_penguji?></span></td>
														<td><span class="text-dark">
															<?php echo $l->tanggal_mulai?></span></td>
														<td><span class="text-dark">
															<?php echo $l->semester_mulai?></span></td>
														<td><span class="text-dark">
															<?php echo $l->semester_selesai?></span></td>
														<td><i class="h5 fa fa-file-pdf text-danger"></i> <a href="#">NIM_BAB2_Theoretical_Framework.pdf</a></td>
														<td></td>
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
						
					<?php include('/../sim/_padding-content--end.php') ?>