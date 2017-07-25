<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-material/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2017 22:48:52 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
<title>Günəş Edu Online Sistem</title>
<!-- Bootstrap Core CSS -->
<link href="/gunesh/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="/gunesh/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="/gunesh/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="/gunesh/css/colors/blue.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
      <form class="form-horizontal form-material" id="loginform"  method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
        <a href="javascript:void(0)" class="text-center db">Günəş Təhsil Mərkəzi | Qeydiyyat</a>

        <div class="form-group m-t-40 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <div class="col-xs-12">
            <input id="name" type="text" class="form-control" name="name" value="" placeholder="Ad" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="form-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="col-xs-12">
            <input id="email" type="email" class="form-control" name="email" value="" placeholder="E-Poçt Ünvanı" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="form-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="col-xs-12">
            <input type="password" class="form-control" name="password" required placeholder="Şifrə">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="form-group form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="col-xs-12">
            <input type="password" class="form-control" name="password_confirmation" required placeholder="Şifrə Təkrarı">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="form-group form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
          <div class="col-xs-12">
            <input type="number" class="form-control" name="mobile" required placeholder="Telefon nömrəsi">

            @if ($errors->has('mobile'))
                <span class="help-block">
                    <strong>{{ $errors->first('mobile') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="form-group form-group{{ $errors->has('type') ? ' has-error' : '' }}">
          <div class="col-xs-12">
            <select class="form-group" name="type">
              <option value="">Tələbə</option>
              <option value="">Valideyn</option>
            </select>

            @if ($errors->has('type'))
                <span class="help-block">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
            @endif
          </div>
        </div>

        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Qeydİyyatdan Keç</button>
          </div>
        </div>

      </form>

    </div>
  </div>
</section>
<!-- jQuery -->
<script src="gunesh/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="gunesh/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="gunesh/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="gunesh/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="gunesh/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="gunesh/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="gunesh/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-material/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2017 22:48:53 GMT -->
</html>
