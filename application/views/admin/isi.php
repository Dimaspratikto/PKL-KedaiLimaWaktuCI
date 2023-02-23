<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Kedai Lima Waktu</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 
    <!-- /.content-header -->
<div class="container-fluid">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3><?= $total_food?></h3>

					<p>Menu</p>
				</div>
				<div class="icon">
					<i class="ion ion-pizza"></i>
				</div>
				<a href="<?php echo site_url('food') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<!-- <div class="col-lg-3 col-6">
			 small box 
			<div class="small-box bg-success">
				<div class="inner">
					<h3><?= $total_invoice?></h3>

					<p>Invoice</p>
				</div>
				<div class="icon">
					<i class="ion ion-coffee"></i>
				</div>
				<a href="<?php echo site_url('invoice') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div> -->
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-warning">
				<div class="inner">
					<h3>44</h3>

					<p>Event</p>
				</div>
				<div class="icon">
					<i class="ion ion-calendar"></i>
				</div>
				<a href="<?php echo site_url('event') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		
		<!-- ./col -->
	</div>
	<!-- /.row -->
	<!-- Main row -->
</div>
<!-- /.row (main row) -->
</div> <!-- /.container-fluid -->