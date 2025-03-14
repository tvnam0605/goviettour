<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/css/custom-css.css') }}" rel="stylesheet" />
</head>

<body class="login">
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{ route('admin.login-account') }}" method="POST" id="formLoginAdmin">
                    <h1>Đăng nhập</h1>
                    @csrf
                    <div>
                        <input type="text" class="form-control" name="username" id="username"
                            placeholder="Tài khoản" required />
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Mật khẩu" required />
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Đăng nhập</button>
                    </div>
                </form>
            </section>
        </div>
    </div>

    @include('admin.blocks.footer')

    <!-- Import jQuery & Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right"
            };

            @if(session('success'))
                toastr.success("{{ session('success') }}");
            @endif

            @if(session('error'))
                toastr.error("{{ session('error') }}");
            @endif
        });
    </script>
</body>
</html>
