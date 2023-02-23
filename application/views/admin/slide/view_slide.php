<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard Kedai Lima Waktu</h1>
				</div><!-- /.col -->
			
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- /.content-header -->
	<div class="container-fluid">
		<div class="card">

			<div class="card-header">
				<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add
					slide</button>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 col-md-6"></div>
						<div class="col-sm-12 col-md-6"></div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
								role="grid" aria-describedby="example2_info">
								<thead>
									<tr role="row">
										<th rowspan="1" colspan="1">#</th>
										<th rowspan="1" colspan="1">Id Slide</th>
										<th rowspan="1" colspan="1">judul Slide</th>
										<th rowspan="1" colspan="1" style="">Keterangan Slide</th>
							            <th rowspan="1" colspan="1" style="">Foto</th>
										<th rowspan="1" colspan="1" style="">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                    $no = 1;
                                ?>
									<?php foreach ($data_slide as $db): ?>

									<tr class="odd">
										<td><?= $no++; ?> </td>
										<td><?= $db['id_slide']?></td>
										<td><?= $db['judul_slide']?></td>
										<td><?= $db['keterangan_slide']?></td>
									    <td><img src ="<?= base_url('/asset/foto/'.$db['foto_slide'])?>" width="100px" height="50px"></td>
										<td>
											<a class="btn btn-social-icon " title="edit" ">
												<i class="fas fa-edit" data-toggle="modal" data-target="#modal-edit<?php echo $db['id_slide']?>" ></i>
											</a>
											<a onclick="return confirm('Apakah anda yakin menghapus data ini ?')" class="btn btn-social-icon " href="<?php echo base_url() ?>index.php/slide/hapus_data/<?php echo $db['id_slide'];?>">
												<i class="fas fa-trash-alt"></i>
											</a>
										</td>
									</tr>
									<?php endforeach ?>
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">#</th>
										<th rowspan="1" colspan="1">Id Slide</th>
										<th rowspan="1" colspan="1">Judul Slide</th>
										<th rowspan="1" colspan="1" style="">Keterangan Slide</th>
										<th rowspan="1" colspan="1" style="">Foto</th>
										<th rowspan="1" colspan="1" style="">Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1
								to 10 of
								57 entries</div>
						</div>
						<div class="col-sm-12 col-md-7">
							<div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
								<ul class="pagination">
									<li class="paginate_button page-item previous disabled" id="example2_previous"><a
											href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
											class="page-link">Previous</a>
									</li>
									<li class="paginate_button page-item active"><a href="#" aria-controls="example2"
											data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="example2"
											data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="example2"
											data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="example2"
											data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="example2"
											data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
									<li class="paginate_button page-item "><a href="#" aria-controls="example2"
											data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
									<li class="paginate_button page-item next" id="example2_next"><a href="#"
											aria-controls="example2" data-dt-idx="7" tabindex="0"
											class="page-link">Next</a>
									</li>
								</ul>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		</section>
	</div>
</div>

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Data Slider</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>

			</div>
			<div class="modal-body">
				<div class="box box-info">

					<!-- /.box-header -->
					<!-- form start -->

					<?php echo form_open_multipart('slide/insert'); ?>

					<div class="form-group">
						<label for="judul_slide" class="col-sm-2 control-label">Judul Slide</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="judul_slide" name="judul_slide">
						</div>
					</div>
					<div class="form-group">
						<label for="keterangan_slide" class="col-sm-2 control-label">Keterangan Slider</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="keterangan_slide" name="keterangan_slide">
						</div>
					</div>
	
					<div class="form-group">
						<label for="foto_slide" class="col-sm-2 control-label">Foto</label>
						<input type="file" class="form-control" name="userfile" id="foto_slide" required="">

					</div>





					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
					<!-- /.box-body -->

					<!-- /.box-footer -->
					<!-- </form> -->
					<?php echo form_close(); ?>
				</div>
			</div>

		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<?php $no=0; 
foreach($data_slide as $db):$no++; ?>
<div class="modal fade" id="modal-edit<?php echo $db['id_slide'];?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Data Slide</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>

			</div>
			<div class="modal-body">
				<div class="box box-info">

					<!-- /.box-header -->
					<!-- form start -->

					<?php echo form_open_multipart('slide/edit'); ?>
					
					
					<input type="hidden" name="id_slide"  value="<?php echo $db['id_slide']?>">
					
					
					<div class="form-group">
						<label for="judul_slide" class="col-sm-2 control-label">Judul Slide</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="judul_slide" name="judul_slide" value="<?php echo $db['judul_slide']?>">
						</div>
					</div>
					<div class="form-group">
						<label for="keterangan_slide" class="col-sm-2 control-label">Keterangan Slide</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="keterangan_slide" name="keterangan_slide" value="<?php echo $db['keterangan _slide']?>">
						</div>
					</div>
			
					<div class="form-group">
						<label for="foto_slide" class="col-sm-2 control-label">Foto</label>
						<input type="file" class="form-control" name="userfile" id="foto_slide"   >

					</div>
					<img src="<?php echo base_url().'/asset/foto/'.$db['foto_slide'];?>" width="100px">




					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
					<!-- /.box-body -->

					<!-- /.box-footer -->
					<!-- </form> -->
					<?php echo form_close(); ?>
				</div>
			</div>

		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<?php endforeach ?>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->