<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?php echo site_url('Dashboard') ?>" class="brand-link">
		<img src="<?php echo base_url()?>template/dist/img/adminlogo.png" alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Kedai Lima Waktu</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url()?>template/dist/img/admin.png" class="img-circle elevation-2"
					alt="User Image">
			</div>
			<div class="info">
				<a href="<?php echo site_url('Dashboard') ?>" class="d-block">Admin Kedai</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<!-- <div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div> -->

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo site_url('food') ?>" class="nav-link active">
								<i class="nav-icon fas fa-utensils"></i>
								<p>Menu</p>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="<?php echo site_url('beverages') ?>" class="nav-link">
								<i class="nav-icon fas fa-coffee"></i>
								<p>Beverages</p>
							</a>
						</li> -->
						<!-- <li class="nav-item">
							<a href="<?php echo site_url('slide') ?>" class="nav-link">
								<i class="nav-icon fas fa-sliders-h"></i>
								<p>Slider</p>
							</a>
						</li> -->
						<li class="nav-item">
							<a href="<?php echo site_url('event') ?>" class="nav-link">
								<i class="nav-icon far fa-calendar-plus"></i>
								<p>Event</p>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="./index3.html" class="nav-link">
								<i class="nav-icon fa fa-user-circle"></i>
								<p>Admin</p>
							</a>
						</li> -->
						<li class="nav-item">
							<a href="<?php echo site_url('invoice')?>" class="nav-link">
								<i class="nav-icon fa fa-sticky-note"></i>
								<p>Invoice</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('aboutusmain')?>" class="nav-link">
								<i class="nav-icon fa fa-sticky-note"></i>
								<p>About Us Main</p>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="<?php echo site_url('aboutus')?>" class="nav-link">
								<i class="nav-icon fa fa-sticky-note"></i>
								<p>About Us List</p>
							</a>
						</li> -->
						<li class="nav-item">
							<a href="<?php echo site_url('llogin/logout')?>" class="nav-link">
								<i class="nav-icon fas fa-sign-out-alt"></i>
								<p>Log Out</p>
							</a>
						</li>
					</ul>
				</li>

				<!-- <li class="nav-item">
					<a href="https://adminlte.io/docs/3.1/" class="nav-link">
						<i class="nav-icon fas fa-file"></i>
						<p>Documentation</p>
					</a>
				</li>

				<li class="nav-header">LABELS</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-circle text-danger"></i>
						<p class="text">Important</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-circle text-warning"></i>
						<p>Warning</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-circle text-info"></i>
						<p>Informational</p>
					</a>
				</li> -->

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>