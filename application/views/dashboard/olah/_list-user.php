					<?php include('_padding-content.php') ?>

						<!--Begin::Section-->
						<div class="kt-portlet kt-portlet__body--bordered">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger" style="width: 31px !important;height: 31px !important">
										    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
										        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
										        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"/>
										    </g>
										</svg>
									</span>
									<h3 class="kt-portlet__head-title">
										User List
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<!-- <iframe src="<?php echo base_url('SimCheck/list_penelitian')?>" id='testframe' frameborder="0" allowfullscreen></iframe>
								<script>
								window.setInterval("reloadIFrame();", 30000);

								function reloadIFrame() {
								 document.getElementById('testframe').contentDocument.location.reload(true);
								}
								</script> -->
								<br>
								<!--begin::Section-->
								<div class="kt-section">
									<div class="kt-section__content">
										<!--begin: Search Form -->
										<div class="kt-form kt-form--label-right kt-margin-t-0 kt-margin-b-10">
											<div class="row align-items-center">
												<div class="col-md-6 order-2 order-xl-1 kt-align-right">
													<div class="row align-items-center">
														<div class="col-md-12 kt-margin-b-20-mobile">
															<div class="kt-input-icon kt-input-icon--left" data-step="1" data-intro="Box ini dapat digunakan untuk mencari data pengguna/user dengan memasukkan keyword sesuai yang diinginkan seperti nama, nim, niy, dll.">
																<input type="text" class="form-control search-input" placeholder="Search..." id="generalSearch">
																<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 order-2 order-xl-1">
													<div class="kt-form__group kt-form__group--inline" data-step="2" data-intro="Anda dapat menyortir status pengguna dari nav-menu ini.
													Contoh: Mahasiswa">
														<div class="kt-form__label">
															<label>Status:</label>
														</div>
														<div class="kt-form__control">
															<select class="form-control bootstrap-select" id="kt_form_status">
																<option value="">All</option>
																<option value="1">Ketua Program Studi</option>
																<option value="2">Koordinator TA</option>
																<option value="3">Dosen</option>
																<option value="4">Mahasiswa</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-2 order-2 order-xl-1 kt-align-right">
													<div class="kt-margin-t-15-mobile"></div>
													<div class="dropdown dropdown-inline"  data-step="3" data-intro="Click <b>Button</b> ini untuk menambahkan data pengguna baru.">
														<button href="#" class="btn btn-brand btn-pill btn-elevate btn-icon-sm" data-toggle="modal" data-target="#kt_modal_8" id="clickMe">
															<i class="fa fa-plus"></i>
														Add User
														</button>
													</div>
													&nbsp;
												</div>
											</div>
										</div>

										<!--end: Search Form -->
									</div>

									<div class="kt-portlet__body kt-portlet__body--fit">
										<span class="text-danger text-bold font-weight-bold">*Table will be updated after you refresh the page!</span>
										<!--begin: Datatable -->
										<table class="kt-datatable table-hover responsive no-wrap user-tables" id="auto_column_hide" width="100%" data-step="4" data-intro="Untuk mengelola data pengguna<br>: 1. Click <b>Button</b> warna <span style='color:#59A2FC'>BIRU</span> => mengubah(mengedit) data pengguna;<br> 2. Click <b>Button</b> warna <span style='color:#1DC9B7'>HIJAU</span> => mengubah status pengguna(misal dari dosen menjadi koordinator TA);<br> 3. Click <b>Button</b> warna <span style='color:#FA0C52'>MERAH</span> => menghapus data pengguna;">
											<thead>
												<tr>
													<th title="Field #2">ID User (NIY/NIP/NIM)</th>
													<th title="Field #3">Nama</th>
													<th title="Field #4">Status</th>
													<th title="Field #5">Keterangan</th>
													<th title="Field #6">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($u as $u){ ?>
													<tr>
														<td id='tbl-id_user'><span class="text-dark">
															<?php echo $u->id_user?></span></td>
														<td id='tbl-nama'><span class="text-dark">
															<?php $nama=(isset($u->nama_dsn))? $u->nama_dsn : $u->nama_mhs;
																  echo $nama;
															?></span></td>
														<td id='tbl-role'>
															<?php $role=$u->role;
																  if($role=='1'){
																  	echo "1";
																  }elseif ($role=='2'){
																  	echo '2';
																  }elseif ($role=='3'){
																  	echo '3';
																  }else {
																  	echo '4';
																  }?>
														</td>
														<td id='tbl-keterangan'><span class="text-dark">
															<?php echo $u->jabatan?></span></td>
														<td>
															<div class="dropwdown">
																<button class="btn btn-label-info btn-pill btn-sm btn-icon"  id_user-target="<?php echo $u->id_user ?>" nama-target="<?php echo $nama?>" role-target="<?php echo $role?>" ket-target="<?php echo $u->jabatan ?>" id="btn-edit" title="Edit details" data-toggle="modal" data-target="#kt_modal_4"><i class="la la-pencil-square-o"></i>
																</button>
																<button class="btn btn-label-success btn-pill btn-sm btn-icon" id_user-target="<?php echo $u->id_user ?>" role-target="<?php echo $role?>" id="btn-status" title="Change Status" data-toggle="modal" data-target="#kt_modal_6"><i class="la la-refresh"></i>
																</button>
																<button class="btn btn-label-danger btn-pill btn-sm btn-icon btn-icon-md" type="button" id="btn-delete"  nama-target="<?php echo $nama?>" role-target="<?php echo $role?>" id_user-target="<?php echo $u->id_user ?>" id="btn-delete" title="Delete"  data-toggle="modal" data-target="#kt_modal_7">
																	<i class="la la-trash"></i>
																</button>
															</div>
														</td>
													</tr>
												<?php
												}?>

											</tbody>
										</table>

									</div>
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
											<form id="fedit-user">
												<input type="hidden" name="tid_user" id="mdl-tid_user">
												<div class="form-group">
													<label for="message-text" class="form-control-label">ID User (NIY/NIP/NIM)</label>
													<input class="form-control" type="text" id='mdl-id_user' dir="ltr" placeholder="ID User" name="id_user" >
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">Nama:</label>
													<input class="form-control"  type="text" dir="ltr" id='mdl-nama' placeholder="Nama" name="nama">
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">Status: <button type="button" class="btn btn-pill btn-danger" id="btn-role" style="padding:0.35em !important">Change Status</button></label>

													<!-- <input type="text" class="form-control" id="" maxlength="1"> -->
													<select class="form-control kt-selectpicker" disabled id="mdl-role" name="role">
														<option value="1">Ketua Prodi</option>
														<option value="2">Koordinator Tugas Akhir</option>
														<option value="3">Dosen</option>
														<option value="4">Mahasiswa</option>
													</select>
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">Keterangan:</label>
													<input class="form-control"  type="text" dir="ltr" id='mdl-keterangan' placeholder="Keterangan" name="jabatan">
												</div>
											</form>
										</div>
										<div class="modal-footers">
												<div class="col-md-6">
													<button class="btn btn-pill btn-success"  data-toggle="modal" data-target="#kt_modal_5" data-dismiss="modal">Change Password</button>
												</div>
												<div class="col-md-6 kt-align-right">
													<button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal">Close</button>
													<button class="btn btn-pill btn-primary" id="btn-submit">Submit</button>
												</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<form id="fchange-password">
												<div class="form-group">
													<label for="message-text" class="form-control-label">ID User (NIY/NIP/NIM)</label>
													<input class="form-control" type="text" id='mdl2-id_user' dir="ltr" placeholder="ID User" name="id_user" readonly>
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">New Password</label>
													<input class="form-control" type="text" id='new-password' dir="ltr" placeholder="Enter New Password" name="new-password" >
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">Repeat Password</label>
													<input class="form-control"  type="text" dir="ltr" id='repeat-password' placeholder="Repeat New Password" name="repeat-password">
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-pill btn-secondary" id="btn-pclose" data-dismiss="modal">Close</button>
											<button class="btn btn-pill btn-primary" id="btn-cpassword">Submit</button>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<form id="fchange-role">
												<div class="form-group">
													<label for="message-text" class="form-control-label">ID User (NIY/NIP/NIM)</label>
													<input class="form-control" type="text" id='mdl3-id_user' dir="ltr" placeholder="ID User" name="id_user" readonly>
												</div>
												<div class="form-group">
													<label for="message-text" class="form-control-label">Status:</label>

													<!-- <input type="text" class="form-control" id="" maxlength="1"> -->
													<select class="form-control kt-selectpicker" id="mdl3-role" name="role">
														<option value="1">Ketua Prodi</option>
														<option value="2">Koordinator Tugas Akhir</option>
														<option value="3">Dosen</option>
														<option value="4">Mahasiswa</option>
													</select>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button class="btn btn-pill btn-secondary" id="btn-cclose" data-dismiss="modal" >Close</button>
											<button class="btn btn-pill btn-primary" id="btn-crole">Submit</button>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="kt_modal_7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Confirm Remove User</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<form id="fdelete-user">
												<div class="form-group">
													<input class="form-control" type="hidden" id='mdl4-id_user' dir="ltr" placeholder="ID User" name="id_user" readonly>
													<input class="form-control" type="hidden" id='mdl4-role' dir="ltr" placeholder="ID User" name="role" readonly>
												</div>
												<div class="text-center h4">Are You Sure?</div>
												<p class="text-center"> You are going to <code class="font-weight-bold" >REMOVE</code> <span class="font-weight-bold" id="mdl4-nama"></span>(<span class="font-weight-bold" id="mdl4-tid_user"></span>)<br> You won't be able to revert this!</p>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal">Close</button>
											<button class="btn btn-pill btn-danger" id="btn-duser">Confirm!</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="modal fade" id="kt_modal_8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Add User</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										</button>
									</div>
									<div class="modal-body">
										<form id="fadd-user" enctype="multipart/form-data">
											<div class="form-group">
												<label for="message-text" class="form-control-label">ID User (NIY/NIP/NIM)</label>
												<input class="form-control" type="text" id='mdl5-id_user' dir="ltr" placeholder="ID User" name="id_user" >
											</div>
											<div class="form-group">
												<label for="message-text" class="form-control-label">Nama:</label>
												<input class="form-control"  type="text" dir="ltr" id='mdl5-nama' placeholder="Nama" name="nama">
											</div>
											<div class="form-group">
												<label for="message-text" class="form-control-label">Status:</label>

												<!-- <input type="text" class="form-control" id="" maxlength="1"> -->
												<select class="form-control kt-selectpicker" id="mdl5-role" name="role">
													<option></option>
													<option value="1" name="select-dsn">Ketua Prodi</option>
													<option value="2" name="select-dsn">Koordinator Tugas Akhir</option>
													<option value="3" name="select-dsn">Dosen</option>
													<option value="4" name="select-mhs">Mahasiswa</option>
												</select>
											</div>
											<div id="form-dsn" style="display:none">
												<div class="form-group" >
													<label for="message-text" class="form-control-label">Keterangan:<span class="text-danger">*</span></label>
													<input class="form-control"  type="text" dir="ltr" id='mdl5-keterangan' placeholder="Keterangan" name="jabatan">
													<span class="form-text text-muted"><code><span class="font-weight-bold">KOSONGKAN JIKA TIDAK ADA*</span></code></span>
												</div>
												<div class="form-group" >
													<label for="message-text" class="form-control-label">Password:</label>
													<input class="form-control"  type="text" dir="ltr" id='mdl5-password' placeholder="Keterangan" name="password-dsn">
												</div>
												<div class="form-group" >
													<label for="message-text" class="form-control-label">Photo:<span class="text-danger">*</span></label>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="customFile" name="photo" accept="image/*">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
													<span class="form-text text-muted"><code><span class="font-weight-bold">KOSONGKAN JIKA TIDAK ADA*</span></code></span>
												</div>
											</div>
											<div id="form-mhs" style="display:none">
												<div class="form-group">
													<label for="message-text" class="form-control-label">Dosen Pembimbing:<span class="text-danger">*</span></label>
													<input class="form-control"  type="text" dir="ltr" id='mdl5-dosenbim' placeholder="Keterangan" name="dosenbim">
													<span class="form-text text-muted"><code><span class="font-weight-bold">KOSONGKAN JIKA TIDAK ADA*</span></code></span>
												</div>
												<div class="form-group" >
													<label for="message-text" class="form-control-label">Password:</label>
													<input class="form-control"  type="text" dir="ltr" id='mdl5-password' placeholder="Keterangan" name="password-mhs">
												</div>
												<div class="form-group" >
													<label for="message-text" class="form-control-label">Photo:<span class="text-danger">*</span></label>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="customFile" name="photo-mhs" accept="image/*">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
													<span class="form-text text-muted"><code><span class="font-weight-bold">KOSONGKAN JIKA TIDAK ADA*</span></code></span>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<div class="col-md-6 kt-align-right">
											<button type="button" class="btn btn-pill btn-secondary" id="btn-aclose" data-dismiss="modal">Close</button>
											<button class="btn btn-pill btn-primary" id="btn-adduser">Submit</button>
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
					<?php include('_padding-content--end.php') ?>
