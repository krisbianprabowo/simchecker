					<?php include('/../sim/_padding-content.php') ?>

						<!--Begin::Section-->
						<div class="kt-portlet kt-portlet__body--bordered">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon2-paper h2 text-primary"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Research List
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
												<div class="col-md-8 order-2 order-xl-1 kt-align-right">
													<div class="row align-items-center">
														<div class="col-md-12 kt-margin-b-20-tablet-and-mobile">
															<div class="kt-input-icon kt-input-icon--left">
																<input type="text" class="form-control search-input" placeholder="Search..." id="generalSearch">
																<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 order-2 order-xl-1 kt-align-right">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-outline-success btn-pill btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fa fa-cloud-download-alt"></i> Export
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<ul class="kt-nav">
																<li class="kt-nav__section kt-nav__section--first">
																	<span class="kt-nav__section-text">Choose an option</span>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-print"></i>
																		<span class="kt-nav__link-text">Print</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon la la-file-excel-o"></i>
																		<span class="kt-nav__link-text">Excel</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
													&nbsp;
													<button href="#" class="btn btn-brand btn-pill btn-elevate btn-icon-sm" data-toggle="modal" data-target="#kt_modal_4" id="clickMe">
														<i class="fa fa-plus"></i>
													Add Research
													</button>
												</div>
											</div>
										</div>

										<!--end: Search Form -->
									</div>

									<div class="kt-portlet__body kt-portlet__body--fit">
										<!--begin: Datatable -->
										<table class="kt-datatable table-hover responsive" id="auto_column_hide" width="100%">
											<thead>
												<tr>
													<th title="Field #1">No</th>
													<th title="Field #2">NIM</th>
													<th title="Field #3">Nama</th>
													<th title="Field #4">Judul</th>
													<th title="Field #5">Dosen Pembimbing</th>
													<th title="Field #6">Tanggal Ujian</th>
													<th title="Field #7">Nilai</th>
													<th title="Field #8">Status TA</th>
													<th title="Field #9">Dosen Penguji</th>
													<th title="Field #10">Tanggal Mulai</th>
													<th title="Field #11">Semester Mulai</th>
													<th title="Field #12">Semester Selesai</th>
													<th title="Field #13">Bab 2</th>
													<th title="Field #14">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($l as $l){
													$modalDTarget =''; 
													$modalTarget ='';?>
													<tr>
														<td><span class="text-dark">
															<?php echo $l->no;
															$modalTarget .= '1-target="'.$l->no.'" ';
															$modalDTarget .= '1-target="'.$l->no.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->NIM;
															$modalTarget .= '2-target="'.$l->NIM.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->nama;
															$modalTarget .= '3-target="'.$l->nama.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->judul;
															$modalTarget .= '4-target="'.$l->judul.'" ';
															$modalDTarget .= '2-target="'.$l->judul.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->dosen_pembimbing;
															$modalTarget .= '5-target="'.$l->dosen_pembimbing.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->tanggal_ujian;
															$modalTarget .= '6-target="'.$l->tanggal_ujian.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->nilai;
															$modalTarget .= '7-target="'.$l->nilai.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->status_ta;
															$modalTarget .= '8-target="'.$l->status_ta.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->dosen_penguji;
															$modalTarget .= '9-target="'.$l->dosen_penguji.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->tanggal_mulai;
															$modalTarget .= '10-target="'.$l->tanggal_mulai.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->semester_mulai;
															$modalTarget .= '11-target="'.$l->semester_mulai.'" '; ?></span></td>
														<td><span class="text-dark">
															<?php echo $l->semester_selesai;
															$modalTarget .= '12-target="'.$l->semester_selesai.'" '; ?></span></td>
														<td> <a  class="btn btn-label-success btn-pill btn-sm"><i class="fa fa-file-pdf"></i>Download</a></td>
														<td>
															<button class="btn btn-label-info btn-pill btn-sm btn-icon" id="btn-edit" title="Edit details" <?php echo $modalTarget?> data-toggle="modal" data-target="#kt_modal_5"><i class="la la-pencil-square-o"></i>
															</button>
															<button class="btn btn-label-danger btn-pill btn-sm btn-icon btn-icon-md" <?php echo $modalDTarget?> id="btn-delete" title="Delete"  data-toggle="modal" data-target="#kt_modal_6">
																<i class="la la-trash"></i>
															</button>
														</td>
													</tr>
												<?php
												}?>

											</tbody>
										</table>

									</div>
								</div>
							</div>
							<!--begin::Modal-->
							<div class="modal fade" id="kt_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Add Research</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<form form id="fadd-title">
												<div class="form-group row">
													<div class="col-6">
														<label for="recipient-name" class="form-control-label">NIM:</label>
														<input type="text" class="form-control" id="" name="NIM" placeholder="1500026105">
													</div>
													<div class="col-6">
														<label for="message-text" class="form-control-label">Nama:</label>
														<input type="text" class="form-control" id="" name="nama" placeholder="Agus Budi">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">Judul:</label>
													<textarea class="form-control" id="message-text" name="judul_sebelum" style="height: 48px"></textarea>
												</div>
												<div class="form-group row">
													<div class="col-6">
														<label for="message-text" class="form-control-label">Tanggal Mulai:</label>
														<input type="text" class="form-control kt_inputmask_1" id="kt_datepicker_1" name="tanggal_mulai" placeholder="Contoh: 23-04-2020">
														<span class="form-text text-muted">format tanggal <code>tanggal-bulan-tahun</code> ex: <span class="font-weight-bold">23-04-2020</span></span>
													</div>
													<div class="col-6">
														<label for="message-text" class="form-control-label">Semester Mulai:</label>
														<input type="text" class="form-control" id="" name="semester_mulai" placeholder="Contoh : Gasal 2020">
														<span class="form-text text-muted">format penulisan <code>semester tahunpelajaran</code> ex: <span class="font-weight-bold">Gasal 2020</span></span>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-6">
														<label for="message-text" class="form-control-label">Semester Selesai:</label>
														<input type="text" class="form-control" id="" name="semester_selesai" placeholder="Contoh : Genap 2020">
													</div>
													<div class="col-6">
														<label for="message-text" class="form-control-label">Status Tugas Akhir:</label>
														<select class="form-control kt-selectpicker" name="status_ta">
															<option data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>LULUS</span>">LULUS</option>
															<option data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>SEDANG DIKERJAKAN</span>">SEDANG DIKERJAKAN</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-6">
														<label for="message-text" class="form-control-label">Dosen Pembimbing:</label>
														<div class="typeahead">
															<input class="form-control" id="kt_typeahead_1" type="text" dir="ltr" name="dosen_pembimbing" placeholder="Dosen Pembimbing">
														</div>
													</div>
													<div class="col-6">
														<label for="message-text" class="form-control-label">Nilai:</label>
														<!-- <input type="text" class="form-control" id="" maxlength="1"> -->
														<select class="form-control kt-selectpicker" data-live-search='true' id="selectnilai" name="nilai" onchange="run()">
															<option value="">(Belum Ada Nilai)</option>
															<option>A</option>
															<option>B</option>
															<option>C</option>
															<option>D</option>
															<option>E</option>
															<option>T</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-6">
														<label for="message-text" class="form-control-label">Tanggal Ujian:</label>
														<input type="text" class="form-control kt_inputmask_2" id="kt_datepicker_2" name="tanggal_ujian" placeholder="Contoh: 23-04-2020">
													</div>
													<div class="col-6">
														<div class="row"> 
															<div class="col-6">
																<label for="message-text" class="form-control-label">Penguji 1:</label>
																<div class="typeahead">
																	<input class="form-control" id="kt_typeahead_1_1" type="text" dir="ltr" name="dosen_penguji1" placeholder="Dosen Penguji 1">
																</div>
															</div>
															<div class="col-6">
																<label for="message-text" class="form-control-label">Penguji 2:<span class="text-danger">*</span></label>
																<div class="typeahead">
																	<input class="form-control" id="kt_typeahead_1_2" type="text" dir="ltr" name="dosen_penguji2" placeholder="Dosen Penguji 2 (Jika Ada)">
																</div>
																<span class="form-text text-muted"><code><span class="font-weight-bold">*Jika Ada</span></code> </span>
															</div>

														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer" style="margin-top: -10px">
											<button type="button" class="btn btn-secondary btn-pill btn-elevate" data-dismiss="modal">Close</button>
											<button type="button"  class="btn btn-brand btn-pill btn-elevate" id="btn-submit">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<!--end::Modal-->
							<!--begin::Modal-->
							<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Add Research</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<form form id="fedit-title">
												<div class="form-group row">
													<input type="hidden" name="no" id="mdl-no">
													<div class="col-6">
														<label for="recipient-name" class="form-control-label">NIM:</label>
														<input type="text" class="form-control" id="mdl-NIM" name="NIM" placeholder="1500026105">
													</div>
													<div class="col-6">
														<label for="message-text" class="form-control-label">Nama:</label>
														<input type="text" class="form-control" id="mdl-nama" name="nama" placeholder="Agus Budi">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">Judul:</label>
													<textarea class="form-control" id="mdl-judul" name="judul_sebelum" style="height: 48px"></textarea>
												</div>
												<div class="form-group row">
													<div class="col-6">
														<label for="message-text" class="form-control-label">Tanggal Mulai:</label>
														<input type="text" class="form-control kt_inputmask_1" id="mdl-tanggal_mulai" name="tanggal_mulai" placeholder="Contoh: 23-04-2020">
														<span class="form-text text-muted">format tanggal <code>tanggal-bulan-tahun</code> ex: <span class="font-weight-bold">23-04-2020</span></span>
													</div>
													<div class="col-6">
														<label for="message-text" class="form-control-label">Semester Mulai:</label>
														<input type="text" class="form-control" id="mdl-semester_mulai" name="semester_mulai" placeholder="Contoh : Gasal 2020">
														<span class="form-text text-muted">format penulisan <code>semester tahunpelajaran</code> ex: <span class="font-weight-bold">Gasal 2020</span></span>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-6">
														<label for="message-text" class="form-control-label">Semester Selesai:</label>
														<input type="text" class="form-control" id="mdl-semester_selesai" name="semester_selesai" placeholder="Contoh : Genap 2020">
													</div>
													<div class="col-6">
														<label for="message-text" class="form-control-label">Status Tugas Akhir:</label>
														<select class="form-control kt-selectpicker" id="mdl-status_ta" name="status_ta">
															<option data-content="<span class='kt-badge kt-badge--success kt-badge--inline kt-badge--rounded'>LULUS</span>">LULUS</option>
															<option data-content="<span class='kt-badge kt-badge--warning kt-badge--inline kt-badge--rounded'>SEDANG DIKERJAKAN</span>">SEDANG DIKERJAKAN</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-6">
														<label for="message-text" class="form-control-label">Dosen Pembimbing:</label>
														<div class="typeahead">
															<input class="form-control" id="mdl-dosen_pembimbing" type="text" dir="ltr" name="dosen_pembimbing" placeholder="Dosen Pembimbing">
														</div>
													</div>
													<div class="col-6">
														<label for="message-text" class="form-control-label">Nilai:</label>
														<!-- <input type="text" class="form-control" id="" maxlength="1"> -->
														<select class="form-control kt-selectpicker" data-live-search='true' id="mdl-nilai" name="nilai">
															<option value="">(Belum Ada Nilai)</option>
															<option>A</option>
															<option>B</option>
															<option>C</option>
															<option>D</option>
															<option>E</option>
															<option>T</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-6">
														<label for="message-text" class="form-control-label">Tanggal Ujian:</label>
														<input type="text" class="form-control kt_inputmask_2" id="mdl-tanggal_ujian" name="tanggal_ujian" placeholder="Contoh: 23-04-2020">
													</div>
													<div class="col-6">
														<div class="row"> 
															<div class="col-6">
																<label for="message-text" class="form-control-label">Penguji 1:</label>
																<div class="typeahead">
																	<input class="form-control" id="mdl-dosen_penguji" type="text" dir="ltr" name="dosen_penguji1" placeholder="Dosen Penguji 1">
																</div>
															</div>
															<div class="col-6">
																<label for="message-text" class="form-control-label">Penguji 2:<span class="text-danger">*</span></label>
																<div class="typeahead">
																	<input class="form-control" id="mdl-penguji2" type="text" dir="ltr" name="dosen_penguji2" placeholder="Dosen Penguji 2 (Jika Ada)">
																</div>
																<span class="form-text text-muted"><code><span class="font-weight-bold">*Jika Ada</span></code> </span>
															</div>

														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer" style="margin-top: -10px">
											<button type="button" class="btn btn-secondary btn-pill btn-elevate" data-dismiss="modal">Close</button>
											<button type="button"  class="btn btn-brand btn-pill btn-elevate" id="btn-editTitle">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<!--end::Modal-->
							<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Confirm Remove</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<form id="fdelete-title">
												<div class="form-group">
													<input class="form-control" type="hidden" id='mdl2-no' dir="ltr" placeholder="ID User" name="no" readonly>
												</div>
												<div class="text-center h4">Are You Sure?</div>
												<p class="text-center"> You are going to <code class="font-weight-bold" >REMOVE</code> "<span class="font-weight-bold" id="mdl2-tjudul"></span>".<br> You won't be able to revert this!</p>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal">Close</button>
											<button class="btn btn-pill btn-danger" id="btn-dtitle">Confirm!</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Section-->
						<!--begin::Page Scripts(used by this page) -->
						<script>

							document.addEventListener('DOMContentLoaded', function(){
								const queryString = window.location.search;
								if (queryString == "?modal=true"){
									document.getElementById('clickMe').click();
								}
								console.log(queryString);
							}, false);
							
							
						    function run() {
						        var value = document.getElementById("selectnilai").value;
						        console.log(value);
						    }
						</script>
					<?php include('/../sim/_padding-content--end.php') ?>
