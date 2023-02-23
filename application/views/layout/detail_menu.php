<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Menu Kedai Lima Waktu</h2>
			<h3 class="section-subheading text-muted">Kenali Makanan & Minuman Favoritmu Hanya Di Kedai Lima Waktu</h3>
		</div>
        <div class="card"> 
            <h5 class="card-header">Detail Menu</h5>
            <div class="card-body"> 
                <?php foreach($food as $mn): ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url().'/asset/foto/'.$mn->foto_food ?>">
                    </div>
                    <div  class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Menu</td>
                                <td><strong><?php echo $mn->nama_food ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $mn->tipe_food ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $mn->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($mn->harga_food, 0,',','.') ?></div></strong></td>
                            </tr>

                        </table>
                        <?php echo anchor('lfoodiescon/tambah_ke_keranjang/'.$mn->id_food,
                            '<div  class="btn btn-sm btn-warning">Tambah ke keranjang</div>' )?>
                        <?php echo anchor('lfoodiescon/',
                            '<div class="btn btn-sm btn-dark">Kembali</div>' )?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
		

		</div>
	</div>
</section>