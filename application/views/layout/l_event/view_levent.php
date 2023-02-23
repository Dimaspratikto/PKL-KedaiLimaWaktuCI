<section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div class="text-center">
      <h2 class="section-heading text-uppercase">Event</h2>
      <h3 class="section-subheading text-muted">Sinari Ketenangan Hati Dengan Event Kami Pada Tiap Minggunya.</h3>
      </div>     
    
          <div class="row">
          <?php foreach ($data_event as $key => $value) { ?>
            <div class="col-md-3">
              <div class="card mb-3 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?= base_url('/asset/foto/'.$value['foto_event'])?>" data-holder-rendered="true">
                <div class="card-body">
                <h3><center><?= $value['nama_event']?></center></h3>
                  <p class="card-text"><center><?= $value['keterangan_event']?></center></p>
                  <div class="d-flex justify-content-between align-items-center">
              
                    <small class="text-muted"><?= $value['tanggal_event']?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
      </div>
</section>
    