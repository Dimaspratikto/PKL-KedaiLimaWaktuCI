<section class="page-section bg-light" id="portfolio">
<div class="container-fluid">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Pemesanan</h2>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" >
            <div align="center">
            <div class="btn btn-sm btn-success" >
                <?php 
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];

                    }
                echo "<h5>Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
                ?>
            </div><br><br>
            <h3 class="text-center">Input Identitas Pemesananan Anda</h3>
            <form method="post" action="<?php echo site_url('lfoodiescon/proses_pesan')?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda"class="form-control">
                </div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="input" name="telp" placeholder="Nomor Telp Anda"class="form-control">
                </div>
                <div class="form-group">
                    <label>Nomor Meja</label>
                    <input type="input" name="no_meja" placeholder="Nomor Meja Anda Sekarang"class="form-control">
                </div>
                <!-- <div class="form-group">
                    <label>Tipe Pemesanan</label>
                        <select class="form-control" name="pilihan">
                            <option>Bawa Pulang</option>
                            <option>Makan Di Kedai</option>
                        </select>
                </div> -->

                <button type="submit" class="btn btn-lg btn-primary">Pesan</button>
            </form>
            <?php
            }else{
                    echo "<h5>Keranjang Belanja Anda Masih Kosong";
                }
            ?>
            </div>
        </div>
        
        <div class="col-md-2"></div>
    </div>
    
</div>
</section>