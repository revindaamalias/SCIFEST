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
			<div class="container">
				<h1 class="text-center">ABSENSI - PT SUCOFINDO</h1>

				<form method="POST" action="{{ url('webcam/store') }}">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div id="my_camera"></div>
							<br/>
							<button type="button" class="btn btn-sm bg-primary" onclick="take_snapshot()">Ambil Gambar</button>
							<input type="hidden" name="image" class="image-tag">
						</div>
						<div class="col-md-6">
							<div id="results">Your captured image will appear here...</div>
						</div>
						<div class="col-md-12 text-center">
							<br/>
							<button class="btn btn-success" id="saveImage">Submit</button>
						</div>
					</div>
				</form>
			</div>
	    </section>
	    <!-- /.content -->
	</div>
	  <!-- /.content-wrapper -->
    @include('footer')
	<script language="JavaScript">
		Webcam.set({
			width: 490,
			height: 350,
			image_format: 'jpeg',
			jpeg_quality: 90
		});

		Webcam.attach( '#my_camera' );

		function take_snapshot() {
			Webcam.snap( function(data_uri) {
				$(".image-tag").val(data_uri);
				document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
			} );
		}

        $('#saveImage').click(function(e)
        {
            e.preventDefault();

            const form = new FormData();
            var dataimage = $(".image-tag").val();

            form.append('image', dataimage)
            console.log(JSON.stringify(dataimage));

            $.ajax({
                url:"{{route('storeImage')}}",
                type:"POST",
                cache: false,
                contentType: false,
                processData: false,
                data:form,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success:function(response)
                {
                    console.log(response)
                    if(response.status == 200)
                    {
                        window.location.replace('result');
                    }
                }
            })
        })

	</script>
</body>

</html>


