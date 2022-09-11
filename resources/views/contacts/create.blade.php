
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobs | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>Contact</b>Us</a>
    </div>
    <!-- /.login-logo -->
    <div class="card" >
        <div class="card-body login-card-body">
            <p class="login-box-msg">We will reply within 24 hrs</p>

            <form action="{{route('contacts.store')}}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="name" name="name" class="form-control " placeholder="Your Name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control " placeholder="Your Email address">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="subject" class="form-control " placeholder="Subject">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-pen"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
 
                </div>

                    <div class="col">
                        <div class="row">
                            <div class="col col-12">
                        <button type="submit" class="btn btn-primary btn-block">Send</button>
                        </div>
                        <div class="col">
                        <a href="{{ route('login.index') }}" class="btn btn-light mt-2">Login</a>
                        </div>
                        </div>
            </form>

        </div>
        @if(Session::has('success'))
        <div class="alert alert-success mt-3">
            {{ Session::get('success') }}
        </div>
@endif
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('assets/dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dashboard/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
