<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard About Us List</h1>
				</div><!-- /.col -->
				
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- /.content-header -->
	<div class="container-fluid">
		<div class="card">

			<div class="card-header">
				<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add
					aboutus</button>
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
										<th rowspan="1" colspan="1">Id Aboutus</th>
										<th rowspan="1" colspan="1">Tahun Aboutus</th>
										<th rowspan="1" colspan="1">Judul Aboutus </th>
										<th rowspan="1" colspan="1" style="">Keterangan Aboutus </th>
										<th rowspan="1" colspan="1" style="">Foto</th>
										<th rowspan="1" colspan="1" style="">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                    $no = 1;
                                ?>
									<?php foreach ($data_aboutus as $db): ?>

									<tr class="odd">
										<td><?= $no++; ?> </td>
										<td><?= $db['id_aboutus']?></td>
										<td><?= $db['tahun_aboutus']?></td>
										<td><?= $db['judul_aboutus']?></td>
										<td><?= $db['keterangan_aboutus']?></td>
										<td><img src ="<?= base_url('/asset/foto/'.$db['foto_aboutus'])?>" width="100px" height="50px"></td>
										<td>
											<a class="btn btn-social-icon " title="edit" ">
												<i class="fas fa-edit" data-toggle="modal" data-target="#modal-edit<?php echo $db['id_aboutus']?>" ></i>
											</a>
											<a onclick="return confirm('Apakah anda yakin menghapus data ini ?')" class="btn btn-social-icon " href="<?php echo base_url() ?>index.php/aboutus/hapus_data/<?php echo $db['id_aboutus'];?>">
												<i class="fas fa-trash-alt"></i>
											</a>
										</td>
									</tr>
									<?php endforeach ?>
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">#</th>
										<th rowspan="1" colspan="1">Id Aboutus</th>
										<th rowspan="1" colspan="1">Tahun Aboutus </th>
										<th rowspan="1" colspan="1">Judul Aboutus </th>
										<th rowspan="1" colspan="1" style="">Keterangan Aboutus</th>
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
				<h4 class="modal-title">Data Aboutus</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>

			</div>
			<div class="modal-body">
				<div class="box box-info">

					<!-- /.box-header -->
					<!-- form start -->

					<?php echo form_open_multipart('aboutus/insert'); ?>

					<div class="form-group">
						<label for="judul_aboutus" class="col-sm-4 control-label">Judul Aboutus</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="judul_aboutus" name="judul_aboutus">
						</div>
					</div>
					<div class="form-group">
						<label for="judul_aboutus" class="col-sm-4 control-label">Tahun Aboutus</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="tahun_aboutus" name="tahun_aboutus">
						</div>
					</div>
					<div class="form-group">
						<label for="keterangan_aboutus" class="col-sm-5 control-label">Keterangan Aboutus</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="keterangan_aboutus" name="keterangan_aboutus">
						</div>
					</div>
					
					<div class="form-group">
						<label for="foto_aboutus" class="col-sm-4 control-label">Foto</label>
						<input type="file" class="form-control" name="userfile" id="foto_aboutus" required="">

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
foreach($data_aboutus as $db):$no++; ?>
<div class="modal fade" id="modal-edit<?php echo $db['id_aboutus'];?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Data aboutus</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>

			</div>
			<div class="modal-body">
				<div class="box box-info">

					<!-- /.box-header -->
					<!-- form start -->

					<?php echo form_open_multipart('aboutus/edit'); ?>
					
					
					<input type="hidden" name="id_aboutus"  value="<?php echo $db['id_aboutus']?>">
					
					<div class="form-group">
						<label for="judul_aboutus" class="col-sm-4 control-label">Tahun Aboutus</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="tahun_aboutus" name="tahun_aboutus" value="<?php echo $db['tahun_aboutus']?>">
						</div>
					</div>
					<div class="form-group">
						<label for="judul_aboutus" class="col-sm-4 control-label">Judul Aboutus</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="judul_aboutus" name="judul_aboutus" value="<?php echo $db['judul_aboutus']?>">
						</div>
					</div>
					<div class="form-group">
						<label for="keterangan_aboutus" class="col-sm-5 control-label">Keterangan Aboutus</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="keterangan_aboutus" name="keterangan_aboutus" value="<?php echo $db['keterangan_aboutus']?>">
						</div>
					</div>
					<div class="form-group">
						<label for="foto_aboutus" class="col-sm-4 control-label">Foto</label>
						<input type="file" class="form-control" name="userfile" id="foto_aboutus"   >

					</div>
					<img src="<?php echo base_url().'/asset/foto/'.$db['foto_aboutus'];?>" width="100px">




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