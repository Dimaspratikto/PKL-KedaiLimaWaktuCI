<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kedai Lima Waktu</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url()?> asset/layout/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
       
        <link href="<?php echo base_url()?>asset/layout/css/styles.css" rel="stylesheet" />
        <!-- <link href="<?php echo base_url()?>asset/layout/css/bootstrap.css" rel="stylesheet" /> -->
        <script src="<?php echo base_url()?>asset/layout/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>asset/layout/js/bootstrap.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('') ?>"><img src="<?php echo base_url()?>asset/layout/assets/img/logo.gif" alt="..." /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-link js-scroll-trigger"><?php $keranjang='Keranjang Belanja : '.$this->cart->total_items().' items' ?> 
                        <?php echo anchor ('lfoodiescon/detail_keranjang', $keranjang)?></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo site_url('') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo site_url('lfoodiescon') ?>">Menu</a></li>
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo site_url('lbeverages') ?>">Beverages</a></li> -->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo site_url('levent') ?>">Event</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo site_url('laboutus') ?>">About Us</a></li>
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo site_url('laboutus') ?>">Contact Us</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo site_url('llogin') ?>">Login</a></li> -->
                    
                    </ul>
                </div>
            </div>
        </nav>
