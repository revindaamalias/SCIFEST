@include('header')

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

	  <!-- Preloader -->
	  <div class="preloader flex-column justify-content-center align-items-center">
	    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
	      <span class="sr-only">Loading...</span>
	    </div>
	  </div>

	  <!-- Navbar -->
	  @include('navbar')

	  <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    	<div class="content-header">
	      		<div class="container-fluid">
	        		<div class="row mb-2">
	          			<div class="col-sm-6">
	            			<h1 class="m-0">Dashboard</h1>
	          			</div><!-- /.col -->
	          			<div class="col-sm-6">
	            		<ol class="breadcrumb float-sm-right">
	              			<li class="breadcrumb-item"><a href="#">Home</a></li>
	              			<li class="breadcrumb-item active">Dashboard</li>
	            		</ol>
	          		</div><!-- /.col -->
	        	</div><!-- /.row -->
	      	</div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->

	    <!-- Main content -->
	    <section class="content">
			<div class="content-fluid">
				<div class="container">
					<div class="row">
						<!-- /.col -->
						<div class="col-md-12">
						  <!-- Widget: user widget style 1 -->
						  <div class="card card-widget widget-user shadow">
							<!-- Add the bg color to the header using any of the bg-* classes -->
							<div class="widget-user-header bg-info">
							  <h3 class="widget-user-username">Alexander Pierce</h3>
							  <h5 class="widget-user-desc">Founder & CEO</h5>
							</div>
							<div class="widget-user-image">
							  <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
							</div>
							<div class="card-footer">
							  <div class="row">
								<div class="col-sm-4 border-right">
								  <div class="description-block">
									<h5 class="description-header">3,200</h5>
									<span class="description-text">SALES</span>
								  </div>
								  <!-- /.description-block -->
								</div>
								<!-- /.col -->
								<div class="col-sm-4 border-right">
								  <div class="description-block">
									<h5 class="description-header">13,000</h5>
									<span class="description-text">FOLLOWERS</span>
								  </div>
								  <!-- /.description-block -->
								</div>
								<!-- /.col -->
								<div class="col-sm-4">
								  <div class="description-block">
									<h5 class="description-header">35</h5>
									<span class="description-text">PRODUCTS</span>
								  </div>
								  <!-- /.description-block -->
								</div>
								<!-- /.col -->
							  </div>
							  <!-- /.row -->
							</div>
						  </div>
						  <!-- /.widget-user -->
						</div>
						<!-- /.col -->
						<!-- /.col -->
					  </div>
				</div>
			</div>
	    </section>
	    <!-- /.content -->
	</div>
	  <!-- /.content-wrapper -->
	  @include('footer')
</body>

</html>


