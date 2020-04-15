					<?php include('/../sim/_padding-content.php') ?>
						<!--Begin::Section-->
						<div class="kt-portlet kt-portlet__body--bordered">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon-profile-1 h2 text-primary"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Kelola Akun
									</h3>
								</div>
							</div>
							
							<div class="kt-portlet__body">
								<br>
								<!--begin::Section-->
								<div class="kt-section">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-portlet__body">
											<?php echo form_open_multipart('', ['class'=>'kt-form']); ?>
											<div class="form group row">
												<div class="col-lg-12 col-md-12 kt-margin-b-30" style="text-align:center;">
													<img src="<?php echo asset_url().$_SESSION['photo_user']?>" id="output" style="border-radius:50% !important;width:auto ;max-width: 100px;max-height: 250px"><br><br>
													<div class="h5 text-dark">Krisbiantoro Prabowo</div>
													<div class="text-dark small">1500018200 &nbsp;&nbsp;&nbsp;&nbsp; <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">Mahasiswa</span></div>
													<div class="font-weight-bold kt-margin-t-20">Edit Photo</div>
													<div class="row">
														<div class="col-lg-4">
														</div>
														<div class="col-lg-4">
															<input type="file" class="custom-file-input" onchange="loadFile(event)" accept="image/*" id="customFile" name="photo">
															<label class="custom-file-label" for="customFile">+ Upload Photo</label>
															<script>
															  var loadFile = function(event) {
															    var output = document.getElementById('output');
															    output.src = URL.createObjectURL(event.target.files[0]);
															  };
															</script>
														</div>
														<div class="col-lg-4"></div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-3"></div>
												<div class="col-lg-9">
													<div class="form-group  row">
														<label class="col-form-label col-lg-3 text-dark">
															Change Password
 														</label>
														<div class="col-lg-5  ">
															<input type="password" class="form-control m-input"  name="password_baru" placeholder="Enter a New Password...">
														</div>
													</div>
													<div class="form-group m-form__group row">
														<label class="col-form-label col-lg-3 text-dark">
															Old Password (As a Confirmation)
														</label>
														<div class="col-lg-5 ">
															<input type="password" class="form-control m-input" name="password_lama" placeholder="Enter an Old Password..." >
														</div>
													</div>
												</div>
												<div class="col-lg-12 text-center">
													<button class="btn btn-brand" id="btn-submit">Save Updates</button>
												</div>
											</div>
											<?php echo form_close()?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Section-->
						<!--begin::Page Scripts(used by this page) -->
						
					<?php include('/../sim/_padding-content--end.php') ?>