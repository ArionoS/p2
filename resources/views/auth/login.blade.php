<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GYM - LOGIN</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="{!! asset('logreg/stylelogin.css') !!}">
  <link rel="icon" href="landing/images/new/logo2.png">

  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
  <div class="container">

    <div class="forms-container">
      <div class="signin-signup">

        <form method="POST" action="{{ route('login') }}" class="sign-in-form">
          {{ csrf_field() }}

          <h2 class="title">Sign in</h2>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="label">Username</label>
            <div class="input-group">
              <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="username" autofocus>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="label">Password</label>
            <div class="input-group">
              <input id="password" type="password" class="form-control" name="password" required>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block" type="submit">Login</button>
          </div>
      </div>
      <p class="footer-text text-center" style="margin-top: 20px;color: #308ee0">Copyright © {{date('Y')}} Polinema.com - All rights reserved.</p>
    </div>
  </div>
  </div>
  <!-- content-wrapper ends Herziwp@gmail.com -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  </form>
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
</body>

</html>