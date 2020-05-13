			<?php include('_padding-content.php') ?>
				<!--Begin::Section-->
				<div class="row">
					<div class="col-xl-12">
						<!--begin::Portlet-->
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info" style="width: 31px !important;height: 31px !important">
									        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										        <rect id="bound" x="0" y="0" width="24" height="24"/>
										        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
										        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000"/>
										    </g>
										</svg>
									</span>
									<h3 class="kt-portlet__head-title">
										Research Offer
									</h3>
									<!-- <span class="kt-widget14__desc text-danger font-weight-bold">
										 (This Pages is still on working progress, only dummy data displayed)
									</span> -->
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-actions" data-step="1" data-intro="Click 'Button' ini untuk menambahkan tawaran penelitian">
										<button href="#" class="btn btn-brand btn-pill btn-elevate btn-icon-sm" data-toggle="modal" data-target="#kt_modal_4" >
											<i class="fa fa-plus"></i>
										Add Offers
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body" data-step="2" data-intro="Daftar tawaran penelitian anda akan ditampilkan disini. Anda bisa kembali mengubah data tawaran penelitian ataupun menghapusnya.">
								<?php 
									if(!empty($data)){
									foreach ($data as $t){
										$modalTarget = '';
										$modalDTarget = '';?>
								<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--bordered">
										<div class="kt-portlet__head" style="background: #f7f8fa">
											<div class="col-10 col-md-11 ">
												<div class="kt-portlet__head-label kt-margin-t-15 kt-margin-b-10">
													<h3 class="kt-portlet__head-title">
														<i class="fa fa-bookmark text-success kt-margin-r-5"></i>
														<?php echo $t->judul;
														$modalTarget .= '1-target="'.$t->id_tawaran.'" ';
														$modalTarget .= '2-target="'.$t->judul.'" ';
														$modalDTarget .= '1-target="'.$t->id_tawaran.'" ';
														$modalDTarget .= '2-target="'.$t->judul.'" '; ?>
													</h3> 
												</div>
											</div>
											<div class="col-2 col-md-1" >
												<div class="kt-portlet__head-toolbar" >
													<ul class="nav nav-tabs nav-tabs-bold nav-tabs-line nav-tabs-line-right nav-tabs-line-brand">
														<li class="nav-item" style="margin-left:-10px">
															<a class="nav-link" data-toggle="tab" href="#kt_portlet_tab_1_1" role="tab">
																<i class="flaticon-calendar-with-a-clock-time-tools h2"></i>
																<span class="text-success"><?php $tanggal=date('d  M  Y', strtotime($t->created_at)); echo $tanggal;?></span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body" >
											<div class="tab-content" style="margin-bottom:-25px">
												<div class="tab-pane active" id="kt_portlet_tab_1_1">
													<div class="form-group row">
														<label class="col-md-1">From:</label>
														<div class="col-md-4">
															<label class=" text-dark font-weight-bold"><?php echo $t->nama;
															$modalTarget .= '3-target="'.$t->nama.'" ';?></label>
														</div>
														<label class="col-md-1">Interest:</label>
														<div class="col-md-4">
															<label class=" text-dark font-weight-bold"><?php echo $t->interest;
															$modalTarget .= '4-target="'.$t->interest.'" ';?></label>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-1 text-danger">Notes:</label>
														<div class="col-md-11">
															<label class=" text-dark">
																<?php if(strlen($t->notes)!=0){
																		echo $t->notes;
																	}else {
																		echo "There is no available information about this research.";
																	}
																	$modalTarget .= '5-target="'.$t->notes.'" ';?></label>
														</div>
													</div>
													<div class="form-group row">
														<div class="dropwdown">
															<button class="btn btn-label-info btn-pill btn-sm kt-margin-r-5" id="btn-edit" <?php echo $modalTarget?> title="Edit details" data-toggle="modal" data-target="#kt_modal_5"> <i class="la la-pencil-square-o"></i> Edit
															</button>
															<button class="btn btn-label-danger btn-pill btn-sm"  id="btn-delete" <?php echo $modalDTarget?> title="Delete"  data-toggle="modal" data-target="#kt_modal_6">
																<i class="la la-trash"></i> Delete
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								<?php }
								}else { ?>
									<div class="h4 text-center" style="margin:120px 0px">

										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon" style="width: 60px !important;height: 60px !important">
										    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										        <rect id="bound" x="0" y="0" width="24" height="24"/>
										        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
										        <rect id="Rectangle-9" fill="#000000" x="11" y="7" width="2" height="8" rx="1"/>
										        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="16" width="2" height="2" rx="1"/>
										    </g>
										</svg><br>
										You Dont Have Any Research To Offer<br>
										<button href="#" class="btn btn-label-brand btn-pill btn-elevate btn-icon-sm kt-margin-t-10" data-toggle="modal" data-target="#kt_modal_4">
											<i class="fa fa-plus"></i>
											Add Offers
										</button>
									</div>
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
								<button class="btn btn-primary" id="submit-tawaran">Submit</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Offer A Research</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								</button>
							</div>
							<div class="modal-body">
								<form id="fedit-tawaran">
									<div class="form-group">
										<label for="message-text" class="form-control-label">Lecturer/ Professor</label>
										<div class="typeahead">
											
											<span class="h5 font-weight-bold text-dark" style=""><?php echo $_SESSION['nama']?></span>
										</div>
									</div>
									<div class="form-group">
										<label for="message-text" class="form-control-label">Title:</label>
										<textarea class="form-control" id="mdl-judul" name="title"></textarea>
									</div>
									<div class="form-group">
										<label for="message-text" class="form-control-label">Interest:</label>
										<!-- <input type="text" class="form-control" id="" maxlength="1"> -->
										<select class="form-control kt-selectpicker"  id="mdl-interest" name="interest">
											<option>American Studies</option>
											<option>Literatures</option>
											<option>Linguistics</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group">
										<label for="message-text" class="form-control-label">Notes:</label>
										<textarea class="form-control" id="mdl-notes" placeholder="Add Some Notes..." name="notes"></textarea>
										<input type="hidden" id="mdl-id_tawaran" name="id_tawaran">
									</div>
									
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button class="btn btn-primary" id="btn-etawaran">Submit</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-md modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Confirm Remove</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								</button>
							</div>
							<div class="modal-body">
								<form id="fdelete-tawaran">
									<div class="form-group">
										<input class="form-control" type="hidden" id='mdl2-id_tawaran' dir="ltr" placeholder="ID User" name="id_tawaran" readonly>
									</div>
									<div class="text-center h4">Are You Sure?</div>
									<p class="text-center"> You are going to <code class="font-weight-bold" >REMOVE</code> "<span class="font-weight-bold" id="mdl2-judul"></span>".<br> You won't be able to revert this!</p>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal">Close</button>
								<button class="btn btn-pill btn-danger" id="btn-dtawaran">Confirm!</button>
							</div>
						</div>
					</div>
				</div>
				<!--End::Section-->
				<?php include('_padding-content--end.php') ?>