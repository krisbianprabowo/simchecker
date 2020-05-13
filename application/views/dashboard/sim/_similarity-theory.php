					<?php include('_padding-content.php') ?>
						<!--Begin::Section-->
						<div class="row">
							<div class="col-md-8">
								<!--begin::Portlet-->
								<?php if (isset($_SESSION['logged_in'])) {?>
								<div class="kt-portlet kt-portlet--height-fluid">
								<?php }else{ ?>
								<div class="kt-portlet kt-portlet--height=fluid" style="background-color: rgba(255,255,255,0.5);filter:blur(3px);pointer-events:none;border:1px solid #777777">
								<?php }?>
									<div class="kt-portlet__head">
										<div class="kt-portlet__head-label">
											<span class="kt-portlet__head-icon">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger" style="width: 31px !important;height: 31px !important">
									        		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												        <rect id="bound" x="0" y="0" width="24" height="24"/>
												        <rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="3" width="20" height="18" rx="2"/>
												        <path d="M9.9486833,13.3162278 C9.81256925,13.7245699 9.43043041,14 9,14 L5,14 C4.44771525,14 4,13.5522847 4,13 C4,12.4477153 4.44771525,12 5,12 L8.27924078,12 L10.0513167,6.68377223 C10.367686,5.73466443 11.7274983,5.78688777 11.9701425,6.75746437 L13.8145063,14.1349195 L14.6055728,12.5527864 C14.7749648,12.2140024 15.1212279,12 15.5,12 L19,12 C19.5522847,12 20,12.4477153 20,13 C20,13.5522847 19.5522847,14 19,14 L16.118034,14 L14.3944272,17.4472136 C13.9792313,18.2776054 12.7550291,18.143222 12.5298575,17.2425356 L10.8627389,10.5740611 L9.9486833,13.3162278 Z" id="Path-108" fill="#000000" fill-rule="nonzero"/>
												        <circle id="Oval" fill="#000000" opacity="0.3" cx="19" cy="6" r="1"/>
												    </g>
												</svg>
											</span>
											<h3 class="kt-portlet__head-title">
												Theory Similarity Checker 
											</h3>
										</div>
									</div>
									<form method="POST" action="<?php echo base_url('simCheck/theorytfidfproc')?>" enctype="multipart/form-data">
										<div class="kt-portlet__body kt-portlet__body--center-x kt-margin-b-130-desktop">
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
											<span class="text-danger text-bold font-weight-bold kt-padding-l-20 kt-padding-l-15-mobile">*Before you take the similarity check, kindly read the instructions on the right box </span>
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
													<button type="submit" class="btn btn-success btn-pill btn-elevate btn-icon-sm">START</button>
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
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head kt-bg-danger ">
										<div class="kt-portlet__head-label ">
											<span class="kt-portlet__head-icon text-white">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning" style="width: 31px !important;height: 31px !important">
									        		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        		        <rect id="bound" x="0" y="0" width="24" height="24"/>
								        		        <path d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"/>
								        		        <rect id="Rectangle-28" fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) " x="11" y="4" width="2" height="16" rx="1"/>
									        		   </g>
									        	</svg>
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
												If it <span style="color : #1ac49a;font-weight: bold">success</span>, The page will show the result of your similarity check with the detailed information.
												<hr>
											</li>
											<li>
												If some <span class="text-danger font-weight-bold">errors</span> occur, You will get notified and you might need to repeat from the first step.
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