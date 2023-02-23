<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard Event</h1>
				</div><!-- /.col -->
				
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- /.content-header -->
	<div class="container-fluid">
		<div class="card">

			<div class="card-header">
				<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add
					Event</button>
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
										<th rowspan="1" colspan="1">Id Event</th>
										<th rowspan="1" colspan="1">Nama </th>
										<th rowspan="1" colspan="1" style="">Keterangan </th>
										<th rowspan="1" colspan="1" style="">Tanggal</th>
										<th rowspan="1" colspan="1" style="">Foto</th>
										<th rowspan="1" colspan="1" style="">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                    $no = 1;
                                ?>
									<?php foreach ($data_event as $db): ?>

									<tr class="odd">
										<td><?= $no++; ?> </td>
										<td><?= $db['id_event']?></td>
										<td><?= $db['nama_event']?></td>
										<td><?= $db['keterangan_event']?></td>
										<td><?= $db['tanggal_event']?></td>
										<td><img src ="<?= base_url('/asset/foto/'.$db['foto_event'])?>" width="100px" height="50px"></td>
										<td>
											<a class="btn btn-social-icon " title="edit" ">
												<i class="fas fa-edit" data-toggle="modal" data-target="#modal-edit<?php echo $db['id_event']?>" ></i>
											</a>
											<a onclick="return confirm('Apakah anda yakin menghapus data ini ?')" class="btn btn-social-icon " href="<?php echo base_url() ?>index.php/event/hapus_data/<?php echo $db['id_event'];?>">
												<i class="fas fa-trash-alt"></i>
											</a>
										</td>
									</tr>
									<?php endforeach ?>
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">#</th>
										<th rowspan="1" colspan="1">Id Event</th>
										<th rowspan="1" colspan="1">Nama </th>
										<th rowspan="1" colspan="1" style="">Keterangan</th>
										<th rowspan="1" colspan="1" style="">Tanggal</th>
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
				<h4 class="modal-title">Data Event</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>

			</div>
			<div class="modal-body">
				<div class="box box-info">

					<!-- /.box-header -->
					<!-- form start -->

					<?php echo form_open_multipart('event/insert'); ?>

					<div class="form-group">
						<label for="nama_event" class="col-sm-3 control-label">Nama event</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="nama_event" name="nama_event">
						</div>
					</div>
					<div class="form-group">
						<label for="keterangan_event" class="col-sm-3 control-label">Keterangan event</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="keterangan_event" name="keterangan_event">
						</div>
					</div>
					<div class="form-group">
						<label for="tanggal_event" class="col-sm-3 control-label">Tanggal Event</label>

						<div class="col-sm-10">
							<input type="date" class="form-control" id="tanggal_event" name="tanggal_event">
						</div>
					</div>
					<div class="form-group">
						<label for="foto_event" class="col-sm-3 control-label">Foto</label>
						<input type="file" class="form-control" name="userfile" id="foto_event" required="">

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
foreach($data_event as $db):$no++; ?>
<div class="modal fade" id="modal-edit<?php echo $db['id_event'];?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Data event</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>

			</div>
			<div class="modal-body">
				<div class="box box-info">

					<!-- /.box-header -->
					<!-- form start -->

					<?php echo form_open_multipart('event/edit'); ?>
					
					
					<input type="hidden" name="id_event"  value="<?php echo $db['id_event']?>">
					
					
					<div class="form-group">
						<label for="nama_event" class="col-sm-3 control-label">Nama event</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="nama_event" name="nama_event" value="<?php echo $db['nama_event']?>">
						</div>
					</div>
					<div class="form-group">
						<label for="keterangan_event" class="col-sm-3 control-label">Keterangan Event</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="keterangan_event" name="keterangan_event" value="<?php echo $db['keterangan_event']?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="tanggal_event" class="col-sm-3 control-label">Tanggal event</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="tanggal_event" name="tanggal_event" value="<?php echo $db['tanggal_event']?>">
						</div>
					</div>
					<div class="form-group">
						<label for="foto_event" class="col-sm-3 control-label">Foto</label>
						<input type="file" class="form-control" name="userfile" id="foto_event"   >

					</div>
					<img src="<?php echo base_url().'/asset/foto/'.$db['foto_event'];?>" width="100px">




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