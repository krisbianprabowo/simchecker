			<?php include('_padding-content.php') ?>
				<!--Begin::Section-->
				<div class="row">
					<div class="col-xl-12">
						<!--begin::Portlet-->
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon-star h2 text-warning"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Research Offer
									</h3>
									<!-- <span class="kt-widget14__desc text-danger font-weight-bold">
										 (This Pages is still on working progress, only dummy data displayed)
									</span> -->
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-actions">
										<button href="#" class="btn btn-brand btn-pill btn-elevate btn-icon-sm" data-toggle="modal" data-target="#kt_modal_4" id="clickMe">
											<i class="fa fa-plus"></i>
										Add Offers
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<?php foreach ($data as $t){?>
								<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--bordered">
										<div class="kt-portlet__head" style="background: #f7f8fa">
											<div class="kt-portlet__head-label mt-3 ">
												<h3 class="kt-portlet__head-title">
													<i class="fa fa-bookmark text-success"></i>
													<?php echo $t->judul ?>
												</h3> 
											</div>
											<div class="kt-portlet__head-toolbar" >
												<ul class="nav nav-tabs nav-tabs-bold nav-tabs-line   nav-tabs-line-right nav-tabs-line-brand" role="tablist" >
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_portlet_tab_1_1" role="tab">
															<i class="flaticon2-information h2"></i>
															Info
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_portlet_tab_1_1">
													<div class="form-group row">
														<label class="col-lg-1">From</label>
														<div class="col-lg-4">
															<label class=" text-dark font-weight-bold"><?php echo $t->nama?></label>
														</div>
														<label class="col-lg-1">Interest</label>
														<div class="col-lg-4">
															<label class=" text-dark font-weight-bold"><?php echo $t->interest?></label>
														</div>
													</div>
													<div class="form-group row">
														
													</div>
													<div class="form-group row">
														<label class="col-lg-1 text-danger">Notes :</label>
														<div class="col-lg-11">
															<label class=" text-dark">
																<?php if(strlen($t->notes)!=0){
																		echo $t->notes;
																	}else {
																		echo "There is no available information about this research.";
																	}?></label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								<?php }?>

								<div ><?php echo $pagination; ?></div>
							</div>
						</div>
						<!--end::Portlet-->
					</div>
				</div>
				<div class="modal fade" id="kt_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Offer A Research</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								</button>
							</div>
							<div class="modal-body">
								<form id="fadd-tawaran">
									<div class="form-group">
										<label for="message-text" class="form-control-label">Lecturer/ Professor</label>
										<div class="typeahead">
											
											<span class="h5 font-weight-bold text-dark" style=""><?php echo $_SESSION['nama']?></span>
										</div>
									</div>
									<div class="form-group">
										<label for="message-text" class="form-control-label">Title:</label>
										<textarea class="form-control" id="message-text" name="title"></textarea>
									</div>
									<div class="form-group">
										<label for="message-text" class="form-control-label">Interest:</label>
										<!-- <input type="text" class="form-control" id="" maxlength="1"> -->
										<select class="form-control kt-selectpicker"  id="selectnilai" onchange="run()" name="interest">
											<option>American Studies</option>
											<option>Literatures</option>
											<option>Linguistics</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group">
										<label for="message-text" class="form-control-label">Notes:</label>
										<textarea class="form-control" id="message-text" placeholder="Add Some Notes..." name="notes"></textarea>
										<input type="hidden" name="id_dosen" value="<?php echo $_SESSION['id_user']?>">
									</div>
									
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button class="btn btn-primary" id="submit-tawaran">Send message</button>
							</div>
						</div>
					</div>
				</div>
				<!--End::Section-->
				<?php include('_padding-content--end.php') ?>