
					<?php include('_padding-content.php') ?>
						<!--Begin::Section-->
						<div class="row">
							<div class="col-md-8">

								<!--begin::Portlet-->
								<?php if (isset($_SESSION['logged_in'])) {?>
								<div class="kt-portlet">
								<?php }else{ ?>
								<div class="kt-portlet" style="background-color: rgba(255,255,255,0.5);filter:blur(3px);pointer-events:none;border: 1px solid #777777">
								<?php }?>
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
											<span class="text-danger text-bold font-weight-bold kt-padding-l-20 kt-padding-l-15-mobile">Before you take the similarity check, kindly read the instructions on the right box* </span>
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
													<button type="submit" class="btn btn-success btn-pill btn-elevate btn-icon-sm" id="start-check" >START</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<?php if (!isset($_SESSION['logged_in'])) {?>
								<div class="h2 text-dark text-center block-feature"><i class="fa fa-exclamation-triangle" style="font-size:1.5em; color: red"></i><br>Please Login To Access This Feature<br>
									<a href="<?php echo site_url('SimCheck/Login')?>" class="btn btn-success">Login Now</a></div>
								<?php }?>
								<!--end::Portlet-->
							</div>
							<div class="col-md-4 kt-margin-t-15-mobile">

								<!--begin::Portlet-->
								<div class="kt-portlet">
									<div class="kt-portlet__head " style="background-color: #fa0c52 !important">
										<div class="kt-portlet__head-label ">
											<span class="kt-portlet__head-icon text-white">
												<i class="flaticon-information h2"></i>
											</span>
											<h3 class="kt-portlet__head-title text-white">
												How To Start
											</h3>
										</div>
									</div>
									<div class="kt-portlet__body">
										<ol style="color: black; font-weight:400; font-size: 1.1em" class="text-justify">
											<li>
												Upload your files on the left box.
												<hr>
											</li>
											<li>
												 Click <span class="btn-success">&nbsp;Start&nbsp;</span> button to begin the proccess of Similarity Check.
											</li>
											<li>
												Kindly wait until the page is successfully refreshed.
												<hr>
											</li>
											<li>
												If it <span style="color : #28a745;font-weight: bold">success</span>, The page will show the result of your similarity check with the detailed information.
												<hr>
											</li>
											<li>
												If some <span style="color : #dc3545;font-weight: bold">errors</span> occur, You will get notified and you might need to start back from the 1st step.
												<hr>
											</li>
										</ol>
									</div>
								</div>
								<!--end::Portlet-->
							</div>

						</div>
						<!--End::Section-->

					<?php include('_padding-content--end.php') ?>