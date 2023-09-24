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
							{{-- <img src="{{url('adminlte/dist/img/bg.jpg')}}" alt="User Image"> --}}
							<!-- Add the bg color to the header using any of the bg-* classes -->
							<div class="widget-user-header" style="background-image: url('adminlte/dist/img/bg.jpg');">
							  <h3 class="widget-user-username" style="color:white">Juria Ayu Handini</h3>
							  <h5 class="widget-user-desc" style="color:white">17867</h5>
							</div>
							<div class="widget-user-image">
							  <img class="img-circle elevation-2" src="/storage/img/mbaay.jpeg" alt="User Image">
							</div>
							<div class="card-footer">
							  <div class="row">
								<div class="col-sm-3 border-right">
									<div class="description-block" id="imageBox">
											<img src="/storage/img/validasi1.jpeg"  id="imageValidate">
                                            <div class="description-block">
                                                <?php   $status = "sesuai"; ?>
                                                @if ($status == "sesuai")
                                                    <h1 class="description-text" id="hasilmatch">MATCH</h1>
                                                @else
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="">NOT MATCH</label>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                @endif
										</div>
									</div>
									<!-- /.description-block -->
								</div>
								<div class="col-sm-3 border-right">
									<div class="description-block">
                                        <?php $status="ada"; ?>
                                        @if($status =="ada")
										    <h1 class="description-header bi bi-thermometer-high" style="font-size:40px">34.5 C</h1>
                                            <span class="description-text">BODY TEMPERATURE</span>
                                        @else
                                            <div class="row">
                                                <div class="col">
                                                    <input type="file" name="suhutubuh" id="suhutubuh">
                                                </div>
                                                <div class="col">
                                                    <button type="reset" id="tubuhbutton">upload</button>
                                                </div>
                                            </div>
                                        @endif
								  	</div>
								  <!-- /.description-block -->
								</div>
								<!-- /.col -->
								<div class="col-sm-3 border-right">
								  <div class="description-block">
									<h5 class="description-header bi bi-heart-pulse" style="font-size:40px"> 100</h5>
									<span class="description-text">HEART RATE</span>
								  </div>
								  <!-- /.description-block -->
								</div>
								<!-- /.col -->
								<div class="col-sm-3">
								  <div class="description-block">
									<h5 class="description-header bi bi-clipboard2-pulse" style="font-size:40px"> 98</h5>
									<span class="description-text">SpO2</span>
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
			{{-- track --}}
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card card-primary">
							<div class="card-header" style="background-color: #023431">
								<h3 class="card-title">Track Record</h3>
							</div>
							<div class="card-body">
                                <table id="example" class="table table-bordered table-striped datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Absen</th>
                                            <th>Track</th>
                                            <th>Body Temperature</th>
                                            <th>Hearth Rate</th>
                                            <th>SpO2</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>123456789</td>
                                            <td>Alexander Pierce</td>
                                            <td>Hadir</td>
                                            <td>Lantai 9 - 20231309</td>
                                            <td>36.5 C</td>
                                            <td>70</td>
                                            <td>99%</td>
                                            <td><div class="bi bi-person-fill-check bg-gradient-success btn-sm"><div></td>
                                        </tr>
                                    </tbody>
                                </table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.Content -->

            </div>
				 <!-- /.content-wrapper -->
			</div>
	    </section>
	    <!-- /.content -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">NOT MATCH</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    DATA FOTO SESUAI
                    <br>
                    DATA FOTO TIDAK TERDAPAT PADA DATA LOGIN
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
              </div>
            </div>
          </div>
	</div>
	  <!-- /.content-wrapper -->
	@include('footer')
    <script>
        $(document).ready(function(){


            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });

            $("#tubuhbutton").click(function(){
                location.reload(true);
            })

            fetchImage()

            function fetchImage(){
                $.ajax({
                    url:"{{route('loadImage')}}",
                    type:"GET",
                    dataType:"json",
                    success:function(response)
                    {
                        console.log(response.image.gambar);
                        $('#imageBox').html('');
						$('#imageBox').prepend('<img src="/storage/'+response.image.gambar+'" id="imageValidate">');
                    }
                })
            }
        })
    </script>
</body>

</html>


