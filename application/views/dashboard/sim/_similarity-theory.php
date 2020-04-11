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
												Theory Similarity Checker 
											</h3>
										</div>
									</div>
									<form method="POST" action="<?php echo base_url('simCheck/theorytfidfproc')?>" enctype="multipart/form-data">
										<div class="kt-portlet__body">
											<div class="row">
												<div class="col-md-12">
												  <?php
												  $info = $this->session->flashdata('info');
												      if (!empty($info)){
												        echo $info;
												      }else {
												  }?>
												</div>
											</div>
											<span class="text-danger text-bold font-weight-bold">*Before you take the similarity check, kindly read the instructions on the left box </span>
											<div class="kt-portlet__body">
												<span class="h5">Upload Your Files Theory</span>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile" name="title">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>

											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="row align-items-center">
												<div class="col-lg-8 m--valign-middle small">
													Click "Start" to begin the process
												</div>
												<div class="col-lg-4 kt-align-right">
													<button type="submit" class="btn btn-success">START</button>
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
												Upload your files on the right box.
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

						<!--Begin::Section-->
						<div class="kt-portlet kt-portlet__body--bordered" id="result-check" style="display: none">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon2-list-3 h2 text-primary"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Test Results
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<!-- <div class="kt-portlet kt-portlet--bordered">
									<div class="kt-portlet__body">
										<div class="text-center h2"> Hasil Kesimpulan Test Akan Ditampilkan Disini</div>
									</div>
								</div> -->
								<div class="text-center h2"> Summary For The Test Results Will Be Displayed Here</div>
								<br>
								<!--begin::Section-->
								<div class="kt-section">
									<div class="kt-section__content">
										<div class="table-responsive">
											<table class="table table-bordered  table-hover ">
												<thead class="text-white text-center" style="background-color:#5867dd;">
													<tr>
														<th>No.</th>
														<th>NIM</th>
														<th>Name</th>
														<th>Research Title</th>
														<th>Year</th>
														<th>Score</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th>1</th>
														<td>1400026072</td>
														<td>AZWAR HAMIDI</td>
														<td>CODE MIXING ANALYSIS USED BY INDONESIAN VLOGGERS : A SOCIOLINGUISTIC APPROACH</td>
														<td>2016</td>
														<td>70%</td>
														<td align="center"><span class="kt-badge kt-badge--danger  kt-badge--inline kt-badge--pill ">High</span></td>
													</tr>
													<tr>
														<th>2</th>
														<td>1400026072</td>
														<td>ANUNG PRASETIANINGRUM</td>
														<td>CODE MIXING ANALYSIS USED BY INDONESIAN VLOGGERS : A SOCIOLINGUISTIC APPROACH</td>
														<td>2017</td>
														<td>10%</td>
														<td align="center"><span class="kt-badge kt-badge--success  kt-badge--inline kt-badge--pill">Rendah</span></td>
													</tr>
													<tr>
														<th>3</th>
														<td>1400026085</td>
														<td>SARWI HENDAH KUSUMANINGAYU</td>
														<td>HIP HOP SLANG USED IN WIZ KHALIFA’S SONG LYRICS: A SOCIOLINGUISTIC STUDY</td>
														<td>2017</td>
														<td>7%</td>
														<td align="center"><span class="kt-badge kt-badge--success  kt-badge--inline kt-badge--pill">Rendah</span></td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Section-->
					<?php include('_padding-content--end.php') ?>