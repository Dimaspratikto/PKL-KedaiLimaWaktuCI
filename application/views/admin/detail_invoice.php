<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Detail Pesanan<div class="btn btn-sm btn-success">No. Invoice :
							<?php echo $invoice->id_invoice ?></div>
					</h1>
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
										<th rowspan="1" colspan="1">Id Barang</th>
										<th rowspan="1" colspan="1">Nama Produk</th>
										<th rowspan="1" colspan="1">Jumlah Pesanan</th>
										<th rowspan="1" colspan="1" style="">Harga Satuan</th>
										<th rowspan="1" colspan="1" style="">Sub Total</th>



									</tr>
								</thead>
								<tbody>
									<?php
                                    $total = 0;
                                ?>
									<?php foreach($pesanan as $psn):
                                        $subtotal = $psn->jumlah * $psn->harga;
                                        $total += $subtotal;
                                    ?>

									<tr class="odd">
										<td><?php echo $psn->id_food ?></td>
										<td><?php echo $psn->nama_food ?></td>
										<td><?php echo $psn->jumlah ?></td>
										<td>Rp. <?php echo number_format($psn->harga,0,',','.') ?></td>
										<td>Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
										
									</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<!-- <tr>
										<th rowspan="1" colspan="1">Id Barang</th>
										<th rowspan="1" colspan="1">Nama Produk</th>
										<th rowspan="1" colspan="1">Jumlah Pesanan</th>
										<th rowspan="1" colspan="1" style="">Harga Satuan</th>
										<th rowspan="1" colspan="1" style="">Sub Total</th>
									</tr> -->
									<tr>
										<td colspan="4" align="right">Grand Total</td>
										<td align="right">Rp. <?php echo number_format($total,0,',','.')?></td>
									</tr>
									
								</tfoot>
								
								</tbody>
							</table>
                            <a href="<?php echo site_url('invoice/index') ?>">
                                <div class="btn btn-sm btn-primary">Kembali</div></a>
						</div>
					</div>

				</div>
			</div>
			<!-- /.card-body -->
		</div>
		</section>
	</div>
</div>


