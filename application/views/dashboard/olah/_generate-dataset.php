					<?php include('/../sim/_padding-content.php') ?>
						<!--Begin::Section-->
						<div class="row">
							<div class="col-md-8">
								<!--begin::Portlet-->
								<div class="kt-portlet">
									<div class="kt-portlet__head">
										<div class="kt-portlet__head-label">
											<span class="kt-portlet__head-icon">
												<i class="flaticon2-analytics-1 h2 text-success"></i>
											</span>
											<h3 class="kt-portlet__head-title">
												Generate Datasources
											</h3>
										</div>
									</div>
									<form method="GET" action="<?php echo base_url('SimCheck/titletfidfproc')?>">
										<div class="kt-portlet__body">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--bordered">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<span class="kt-portlet__head-icon">
															<i class="flaticon2-graph-1"></i>
														</span>
														<h3 class="kt-portlet__head-title">
															Datasources Info
														</h3>
													</div>
												</div>
												<div class="kt-portlet__body">
													<ul style="font-weight:400;">
														<li>
															Title listed : <span class="text-dark">10</span>
														</li>
														<li>
															Amount of words : <span class="text-dark">78</span>
														</li>
														<li>
															Last Updated : <span class="text-dark">Mon, 24 February 2020</span> 
														</li>
													</ul>
												</div>
											</div>

											<!--end::Portlet-->
											<span class="h5 text-dark">Generate now to begin the process</span>
										</div>
										<div class="kt-portlet__foot">
											<div class="row align-items-center">
												<div class="col-md-5">
												</div>
												<div class="col-md-4">
													<a href="<?php echo base_url('SimCheck/term_process')?>" type="submit" class="btn btn-success text-white" id="start-check" >GENERATE</a>
												</div>
											</div>
										</div>
									</form>
								</div>
								<!--end::Portlet-->
							</div>
							<div class="col-md-4">
								<!--begin::Portlet-->
								<div class="kt-portlet">
									<div class="kt-portlet__head kt-bg-danger ">
										<div class="kt-portlet__head-label ">
											<span class="kt-portlet__head-icon text-white">
												<i class="flaticon2-information h2"></i>
											</span>
											<h3 class="kt-portlet__head-title text-white">
												How To Start
											</h3>
										</div>
									</div>
									<div class="kt-portlet__body">
										<ol style="color: black; font-weight:400; font-size: 1.1em" class="text-justify">
											<li>
												 Click <span class="btn-success">&nbsp;Generate&nbsp;</span> button to begin the process.
											</li>
											<li>
												Kindly wait until the page is successfully refreshed.
											</li>
											<li>
												If it <span style="color : #28a745;font-weight: bold">success</span>, The page will show the result of your similarity check with the detailed information.
											</li>
											<li>
												If some <span style="color : #dc3545;font-weight: bold">errors</span> occur, You will get notified and you might need to start back from the 1st step.
											</li>
										</ol>
									</div>
								</div>
								<!--end::Portlet-->
							</div>

						</div>
						<!--End::Section-->

					<?php include('/../sim/_padding-content--end.php') ?>