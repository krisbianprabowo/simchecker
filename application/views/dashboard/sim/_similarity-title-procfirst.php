					<?php include('_padding-content.php') ?>

					<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--tabs">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-toolbar">
									<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-danger nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#kt_portlet_base_demo_2_3_tab_content" role="tab">
												<i class="flaticon2-heart-rate-monitor" aria-hidden="true"></i>
													<h5 class="kt-portlet__head-title">
														<small>Results:</small> TF-IDF
													</h5>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_2_2_tab_content" role="tab">
												<i class="flaticon2-heart-rate-monitor" aria-hidden="true"></i>
													<h5 class="kt-portlet__head-title">
														<small>Results:</small> Vector
													</h5>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="tab-content">
									<div class="tab-pane active" id="kt_portlet_base_demo_2_3_tab_content" role="tabpanel">
										<div class="table-responsive">
											<table class="table table-hover ">
												<thead class="text-white text-center" style="background-color:#5867dd;">
													<tr>
														<th title="Field #1">ID</th>
														<th title="Field #2">Term</th>
														<th title="Field #3">Found in Doc</th>
														<th title="Field #4">TF (in Doc)</th>
														<th title="Field #5">TF (in Query)</th>
														<th title="Field #5">IDF</th>
														<th title="Field #6">Weight</th>
													</tr>
												</thead>
												<tbody class="text-center">
													<?php 
													if(isset($outputTerm)){
														foreach($outputTerm as $oT){?>
														<tr>
															<td><span class="text-dark">
																<?php echo $oT['idTerm']?></span></td>
															<td class="text-left"><span class="text-dark ">
																<?php echo $oT['term']?></span></td>
															<td><span class="text-dark">
																<?php echo $oT['jumDoc']?></span></td>
															<td><span class="text-dark">
																<?php echo $oT['jumTermDoc']?></span></td>
															<td><span class="text-dark">
																<?php echo $oT['jumTermQuery']?></span></td>
															<td><span class="text-dark">
															<?php echo $oT['idf']?></span></td>
															<td><span class="text-dark">
															<?php echo $oT['weight']?></span></td>
														</tr>
													<?php
														}
													}?>

												</tbody>
											</table>
										</div>
										<div class="row">
											<div class="col-md-10">
											</div>
											<div class="col-md-2">
												<a href="<?php echo base_url('simCheck/titlecosimproc')?>"  class="btn btn-success" id="start-check" >NEXT >
												</a>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="kt_portlet_base_demo_2_2_tab_content" role="tabpanel">
										<div class="table-responsive">
											<table class="table  table-hover ">
												<thead class="text-white text-center" style="background-color:#5867dd;">
													<tr>
														<th title="Field #1">Title ID</th>
														<th title="Field #2">Vector Values</th>
													</tr>
												</thead>
												<tbody class="text-center" >
													<?php
													if(isset($outputTermR)){
														foreach($outputTermR as $oTR){?>
														<tr>
															<td><span class="text-dark">
																<?php echo $oTR['docid']?></span></td>
															<td><span class="text-dark">
																<?php echo $oTR['yvector']?></span></td>
														</tr>
													<?php
														}
													}?>

												</tbody>
											</table>
										</div>
										<div class="row">
											<div class="col-md-10">
											</div>
											<div class="col-md-2">
												<a href="<?php echo base_url('simCheck/titlecosimproc')?>"  class="btn btn-success" id="start-check" >NEXT >
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					<!--end::Portlet-->
					<!--begin::Page Scripts(used by this page) -->
					<!-- <table class="kt-datatable table-hover responsive" id="html_table" width="100%">
					<thead style="background-color: rgba(201, 205, 209, 0.15);"> -->
					<?php include('_padding-content--end.php') ?>