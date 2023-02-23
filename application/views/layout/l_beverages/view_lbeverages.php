<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Beverages</h2>
                    <h3 class="section-subheading text-muted">Kenali Minuman Favoritmu Hanya Di Kedai Lima Waktu</h3>
                </div> 
                <div class="row">
                    <?php foreach ($data_beverages as $key => $value) { ?>
                     
                    
                    <div class="col-lg-3 col-sm-4 mb-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    
                                </div>
                                <img class="img-fluid"  src="<?= base_url('/asset/foto/'.$value['foto_beverages'])?>"  alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?= $value['nama_beverages']?></div>
                                <div class="portfolio-caption-subheading text-muted"><?= $value['harga_beverages']?></div>
                            </div>
                        </div>
                    </div> 
                    <?php } ?>
                </div>
            </div>
        </section>