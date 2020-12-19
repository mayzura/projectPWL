<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin | Log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href=" {{ asset('assets/dist/css/adminlte.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/square/blue.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: linear-gradient(to right, #bc4e9c , #f80759)" >
<div class="login-box">
  <div class="login-logo">
      <img src="{{ asset('assets/dist/img/book-shop.png') }}" width="128px" height="128px" ><br>
    <a  style="color: white;font-size:30px;"><b>Website Toko Buku Online</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk untuk memulai sesi anda</p>

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group has-feedback">
          <input id="email" placeholder="Masukan Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
            <div class="alert alert-danger alert-dismissible" style="margin-top:15px;">
                    <h6><i class="icon fa fa-ban"></i> Error!</h6>
                    <strong>{{ $message }}</strong>
            </div>
          @enderror
          
        </div>
        <div class="form-group has-feedback">
                <input id="password" placeholder="Masukan Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <div class="alert alert-danger alert-dismissible" style="margin-top:15px;">
                        <h6><i class="icon fa fa-ban"></i> Error!</h6>
                        <strong>{{ $message }}</strong>
                </div>
              @enderror

        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                Remember Me
              </label>

           
            </div>
          </div>
        </div>
      

      <div class="social-auth-links text-center mb-3">

        <button type="submit" class="btn btn-block btn-primary">
                <i class="fa fa-sign-in mr-2"></i> Masuk
        </button>

        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="btn btn-block btn-danger">
          <i class="fa fa-lock mr-2"></i> Lupa Password
        </a>
        @endif

    </form>
      </div>
    </div>
  </div>
</div>
<script src=" {{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src=" {{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }} "></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%'
    })
  })
</script>
</body>
</html>
