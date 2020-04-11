					<?php include('_padding-content.php') ?>

						<!--Begin::Section-->
						<div class="kt-portlet kt-portlet__body--bordered">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon2-list-3 h2 text-primary"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Results : Cosine Similarity
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
											<thead style="background-color: rgba(201, 205, 209, 0.15)" class="text-white">
												<tr>
													<th title="Field #1">ID</th>
													<th title="Field #2">Name</th>
													<th title="Field #3">NIM</th>
													<th title="Field #4">Title</th>
													<th title="Field #5">Result</th>
													<th title="Field #6">Status</th>
												</tr>
											</thead>
											<tbody >
												<?php
												if(isset($resultCosim)){
													foreach($resultCosim as $rS){?>
													<tr>
														<td><span class="text-dark">
															<?php echo $rS['no']?></span></td>
														<td><span class="text-dark">
															<?php echo $rS['nama']?></span></td>
														<td><span class="text-dark">
															<?php echo $rS['NIM']?></span></td>
														<td><span class="text-dark">
															<?php echo $rS['judul']?></td>
														<td><span class="text-dark">
															<?php echo $rS['cosim']?></span></td>
														<td>
															<?php $cs = $rS['cosim'];
															if($cs == 0){$status=1;}
															elseif($cs >0 and $cs<=0.24){$status=2;}
															elseif($cs >=0.25 and $cs<=0.49){$status=3;}
															elseif($cs >=0.5){$status=4;}
															if(isset($status)){
																echo $status;
															}?>
														</td>	
													</tr>
												<?php
													}
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