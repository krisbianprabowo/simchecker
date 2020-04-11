					<?php include('/../sim/_padding-content.php') ?>

						<!--Begin::Section-->
						<div class="kt-portlet kt-portlet__body--bordered">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon2-analytics-1 h2 text-success"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Results : TF-IDF
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
												<div class="col-xl-12 order-1 order-xl-1">
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
											</div>
										</div>

										<!--end: Search Form -->
									</div>
									<div class="kt-portlet__body kt-portlet__body--fit">
										<!--begin: Datatable -->
										<table class="kt-datatable table-hover responsive" id="html_table" width="100%">
											<thead style="background-color: rgba(201, 205, 209, 0.15);">
												<tr>
													<th title="Field #1">ID</th>
													<th title="Field #2">Term</th>
													<th title="Field #3">Title ID</th>
													<th title="Field #4">Sum</th>
													<th title="Field #5">IDF</th>
													<th title="Field #6">Weight</th>
												</tr>
											</thead>
											<tbody >
												<?php
												if(isset($outputTerm)){
													foreach($outputTerm as $oT){?>
													<tr>
														<td><span class="text-dark">
															<?php echo $oT->id?></span></td>
														<td><span class="text-dark">
															<?php echo $oT->term?></span></td>
														<td><span class="text-dark">
															<?php echo $oT->docid?></span></td>
														<td><span class="text-dark">
															<?php echo $oT->jumlah?></td>
														<td><span class="text-dark">
														<?php echo $oT->idf?></span></td>
														<td><span class="text-dark">
														<?php echo $oT->bobot?></span></td>
													</tr>
												<?php
													}
												}?>

											</tbody>
										</table>
										<div class="row">
											<div class="col-md-10">
											</div>
											<div class="col-md-2">
												<a href="<?php echo base_url('simCheck/vector_process')?>"  class="btn btn-success" id="start-check" >NEXT >
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Section-->
						<!--begin::Page Scripts(used by this page) -->
						
					<?php include('/../sim/_padding-content--end.php') ?>