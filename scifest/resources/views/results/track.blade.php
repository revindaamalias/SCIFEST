@include('header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

          <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{url('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
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
                      <h1 class="m-0">View Data 1</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Track Record</li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Track Record</h3>
                    </div>
                    <div class="card-body">
                    <div class="pull-right" style="margin-bottom: 3%">
                        <a href="#" class="btn btn-success btn-sm"> <i class="fa fa-plus"></i> Add</button> </a>
                    </div>

                    <table id="example" class="table table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Absen</th>
                                <th>Track</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>123456789</td>
                                <td>Alexander Pierce</td>
                                <td>Hadir</td>
                                <td>Lantai 9 - 20231309 - 12:00:30</td>
                                {{-- <td>
                                    <span class="badge badge-secondary"><i class="fe fe-times m-1"></i> <?= 'Belum Terverifikasi' ?></span> <br>
                                </td> --}}
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

</body>
  <!-- Footer -->
@include('footer')

<script type="text/javascript">
$(document).ready(function () {
    $('#example').DataTable();
});
</script>

</html>
