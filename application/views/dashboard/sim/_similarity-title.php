					<?php include('_padding-content.php') ?>
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
												Title Similarity Checker
											</h3>
										</div>
									</div>
									<form method="GET" action="<?php echo base_url('simCheck/titletfidfproc')?>">
										<div class="kt-portlet__body">
											<span class="text-danger text-bold font-weight-bold">*Before you take the similarity check, kindly read the instructions on the left box </span>
											<div class="kt-portlet__body">
												
												<span class="h5 text-dark">Type any of your thesis title below</span>
												<textarea class="form-control" name="title" id="title" rows="3"></textarea>
												
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="row align-items-center">
												<div class="col-lg-8 m--valign-middle small">
													Click "Start" to begin the process
												</div>
												<div class="col-lg-4 kt-align-right">
													<button type="submit" class="btn btn-success" id="start-check" >START</button>
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
												Type any of your thesis title on the right box.
											</li>
											<li>
												 Click <span class="btn-success">&nbsp;Start&nbsp;</span> button to begin the proccess of Similarity Check.
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

					<?php include('_padding-content--end.php') ?>