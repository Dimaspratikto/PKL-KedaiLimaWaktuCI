<!-- Masthead-->

<link href="<?php echo base_url()?>asset/layout/css/styles.css" rel="stylesheet" />
<div id="demo" class="carousel slide" data-ride="carousel">
 
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url()?>asset/foto/Slidesgo1.jpg" alt="Gambar - 1" width="1280" height="550">
      <div class="carousel-caption">
        <!-- <h3>Slide 1</h3>
        <p>Deskripsi Slide 1</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>asset/foto/Slidesgo2.jpg" alt="Gambar - 2" width="1280" height="550">
      <div class="carousel-caption">
        <!-- <h3>Slide 2</h3>
        <p>Deskripsi Slide 2</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>asset/foto/Slidesgo3.jpg" alt="Gambar - 3" width="1280" height="550">
      <div class="carousel-caption">
        <!-- <h3>Slide 3</h3>
        <p>Deskripsi Slide 3</p> -->
      </div>
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>  
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Melayani Kepuasan Pelanggan Dengan Hati</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-mug-hot fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">RELAXATION</h4>
                        <p class="text-muted">Terkadang Kopi Dapat Menyebabkan Otot Rileks Dan Santai Berlebihan. Nikmati Variant Kopi Santai Dengan Rileks.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">DISCUSS</h4>
                        <p class="text-muted">Diskusi Rasional Hanya Bermanfaat Bila Ada Basis Asumsi Bersama Yang Signifikan.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-wifi fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">FREE WIFI</h4>
                        <p class="text-muted">Lakukan Hal Positif Untuk Memajukan Pendidikan, Organisasi Dan Partisipasi Dengan Internet Tanpa Batas.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="aboutus">
          <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Apa Yang Membuat Kedai Lima Waktu Berbeda?</h2>
                    <h3 class="section-subheading text-muted">Perbedaan Dibutuhkan Untuk Membuat Dunia Tetap Berjalan. Dan bukan Alasan Untuk Saling Menghentikan.</h3>
                </div>
            <div class="row">
            <?php foreach ($data_aboutusmain as $key => $value) { ?>
               <div class="col-sm-6 col-lg-6">
              <p><?= $value['ket_aboutusmain']?></p>
              <a href="<?php echo site_url('laboutus') ?>" class="btn btn-success">Selengkapnya</a> <br/><br/>
              <hr>
              <div class="s_sponsors" data-name="Odoo Sponsors">
                <div class="container">
                  <div class="row">
                    <div class="col-12 s_sponsors_list mb16 mt16">
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-offset-1">
              <img src="<?= base_url('/asset/foto/'.$value['foto_aboutusmain'])?>" class="img-fluid" data-evernote-hover-show="true" loading="lazy">
            </div>
            <?php } ?>
          </div>
            </div>
        </section>
        <section class="page-section" id="maps">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Maps</h2>
                    <h3 class="section-subheading text-muted">Temukan Lokasi Kami Dengan Mudah</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.9179055373966!2d112.78241487152273!3d-7.2634111415535205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9ccecb1e957%3A0xe57b47887ebab075!2sKedai%20Lima%20Waktu!5e0!3m2!1sid!2sid!4v1622515415709!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  
                </div>
            </div>
        </section>
        <script src="asset/layout/js/jquery.js"> <script>
	<script src="asset/layout/js/popper.js"></script> 
	<script src="asset/layout/js/bootstrap.js"></script>