@include('header')
<body class="hold-transition login-page">

<div class="row">
  <div class="col-12" style="color:white">
    <div class="card">
      <div class="card-body">
        <div class="row px-2">
          <div class="col-12 text-center">
            <p class="text-dark" style="font-size: 32px;">
              <b>SCI</b>Kemitraan
            </p>
          </div>
          <div class="col-12">
            <form action="login" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                  <input style="width: 50%; font-height:14px;" type="text" name="username" class="form-control" placeholder="Username">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input style="width: 50%; font-height:14px;" type="password" name="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn d-block btn-primary btn-block">Masuk</button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="{{ asset('style/plugins/jquery/jquery.min.js')}}"></script> 
<!-- Bootstrap 4 -->
<script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('style/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
