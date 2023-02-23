<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Foodies</h2>
                    <h3 class="section-subheading text-muted">Kenali Makanan Favoritmu Hanya Di Kedai Lima Waktu</h3>
                </div>
                <div class="row text-center">
                    <?php foreach ($data_food as $key => $value) { ?>
                     
                    <div class="card ml-2" style="width: 17rem;">
                        <img src="<?= base_url('/asset/foto/'.$value['foto_food'])?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value['nama_food']?></h5>
                            <small>Makanan ini adalah enak sekali</small>
                            <br>
                            <span class="badge badge-pill bg-success mb-3"><?= $value['harga_food']?> </span><br>
                            <?php echo anchor('lfoodiescon/tambah_ke_keranjang/'.$value['id_food'],
                            '<div  class="btn btn-sm btn-warning">Tambah ke keranjang</div>' )?>
                            <!-- <a href="#" class="btn btn-sm btn-warning">Tambah ke keranjang</a> -->
                            <a href="#" class="btn btn-sm btn-dark">Detail</a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-sm-4 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                   
                                </div>
                                <img class="img-fluid" src="<?= base_url('/asset/foto/'.$value['foto_food'])?>"alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $value['nama_food']?></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $value['harga_food']?></div>
                            </div>
                        </div>
                    </div>  -->
                    <?php } ?>
        
                </div>
            </div>
        </section>