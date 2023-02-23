
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Invoice Pemesanan Menu</h1>
				</div><!-- /.col -->

			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- /.content-header -->
	<div class="container-fluid">
		<div class="card">

			
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
										
										<th rowspan="1" colspan="1">Id Invoice</th>
										<th rowspan="1" colspan="1">Nomor Meja</th>
										<th rowspan="1" colspan="1">Nama Pemesan</th>
										<th rowspan="1" colspan="1">Alamat Pemesan</th>
										<th rowspan="1" colspan="1" style="">Telp Pemesan</th>
										<th rowspan="1" colspan="1" style="">Tanggal Pemesanan</th>
										<th rowspan="1" colspan="1" style="">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                    $no = 1;
                                ?>
									<?php foreach($invoice as $inv): ?>

									<tr class="odd">
										<td><?php echo $inv->id_invoice ?></td>
										<td><?php echo $inv->no_meja ?></td>
										<td><?php echo $inv->nama ?></td>
										<td><?php echo $inv->alamat ?></td>
										<td><?php echo $inv->telp ?></td>
										<td><?php echo $inv->tanggal_pesan ?></td>
										<td> <?php echo anchor('invoice/detail/'.$inv->id_invoice, '<div class="btn btn-sm btn-primary">Detail</div>')?>
											
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
									<th rowspan="1" colspan="1">Id Invoice</th>
										<th rowspan="1" colspan="1">Nomor Meja</th>
										<th rowspan="1" colspan="1">Nama Pemesan</th>
										<th rowspan="1" colspan="1">Alamat Pemesan</th>
										<th rowspan="1" colspan="1" style="">Telp Pemesan</th>
										<th rowspan="1" colspan="1" style="">Tanggal Pemesanan</th>
										<th rowspan="1" colspan="1" style="">Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>

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
				<h4 class="modal-title">Data Makanan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>

			</div>
			<div class="modal-body">
				<div class="box box-info">

					<!-- /.box-header -->
					<!-- form start -->

					<?php echo form_open_multipart('food/insert'); ?>

					<div class="form-group">
						<label for="nama_food" class="col-sm-2 control-label">Nama Makanan</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="nama_food" name="nama_food">
						</div>
					</div>
					<div class="form-group">
						<label for="tipe_food" class="col-sm-2 control-label">Tipe Makanan</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="tipe_food" name="tipe_food">
						</div>
					</div>
					<div class="form-group">
						<label for="harga_food" class="col-sm-2 control-label">Harga Makanan</label>

						<div class="col-sm-10">
							<input type="input" class="form-control" id="harga_food" name="harga_food">
						</div>
					</div>
					<div class="form-group">
						<label for="foto_food" class="col-sm-2 control-label">Foto</label>
						<input type="file" class="form-control" name="userfile" id="foto_food" required="">

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


