<section class="page-section" id="aboutmain">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Kenali Kedai Kami Mulai Sekarang.</h3>
                </div>
                <div class="row">
                <?php foreach ($data_aboutusmain as $key => $value) { ?>
               <div class="col-sm-6 col-lg-6">
              <p><?= $value['ket_aboutusmain']?> </p>
              
              
            </div>
            <?php } ?>
            <div class="col-sm-6 col-lg-offset-1">
              <img src="<?= base_url('/asset/foto/'.$value['foto_aboutusmain'])?>" class="img-fluid" data-evernote-hover-show="true" loading="lazy">
            </div>
</section>    

<!-- <section class="page-section" id="about">       
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Perjalanan Kedai Dari Masa Ke Masa</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                <?php foreach ($data_aboutus as $key => $value) { ?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= base_url('/asset/foto/'.$value['foto_aboutus'])?>" alt="..."></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?= $value['tahun_aboutus']?></h4>
                                <h4 class="subheading"><?= $value['judul_aboutus']?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?= $value['keterangan_aboutus']?></p></div>
                        </div>
                    </li>
                    <?php } ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br>
                                Of Our
                                <br>
                                Story!
                            </h4>
                        </div>
                    </li>
                   
                </ul>
            </div>
            </div>
        </section> -->