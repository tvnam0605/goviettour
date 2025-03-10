@include('clients.blocks.header')

    <div class="login-template">
        <div class="main">
            <!-- Form Đăng ký -->
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <h2 class="form-title">Đăng ký</h2>
                            <span id="error" class="alert alert-danger"></span>
                            <span id="message" class="alert alert-success"></span>
                            <div class="loader"></div>
                            <form action="{{ route('register') }}" method="POST" class="register-form" id="register-form" style="margin-top: 15px">
                                <div class="form-group">
                                    <label for="username_register"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="username_register" id="username_register" placeholder="Tên tài khoản" required/>
                                </div>
                                <div class="invalid-feedback" style="margin-top:-15px" id="validate_username_regis"></div>
                                @csrf
                                <div class="form-group">
                                    <label for="email_register"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email_register" id="email_register" placeholder="Email" required/>
                                </div>
                                <div class="invalid-feedback" style="margin-top:-15px" id="validate_email_regis"></div>
                                <div class="form-group">
                                    <label for="password_register"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password_register" id="password_register" placeholder="Mật khẩu" required/>
                                </div>
                                <div class="invalid-feedback" style="margin-top:-15px" id="validate_password_regis"></div>
                                <div class="form-group">
                                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="password" name="re_pass" id="re_pass" placeholder="Nhập lại mật khẩu" required/>
                                </div>
                                <div class="invalid-feedback" style="margin-top:-15px" id="validate_repass"></div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signup" id="signup" class="form-submit"
                                        value="Đăng ký" />
                                </div>
                            </form>
                        </div>
                        <div class="signup-image">
                            <figure><img src="{{ asset('clients/assets/images/login/signup-image.jpg') }}"
                                    alt="sing up image"></figure>
                            <a href="javascript:void(0)" class="signup-image-link" id="sign-in">Tôi đã có tài khoản rồi</a>
                        </div>
                    </div>
                </div>
            </section>
    
    
            <!-- Form Đăng nhập -->
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <img src="{{ asset('clients/assets/images/login/signin-image.jpg') }}" alt="Hình ảnh đăng nhập">
                            <a href="#" class="signup-image-link" id ="sign-up">Tạo tài khoản mới</a>
                        </div>
    
                        <div class="signin-form">
                            <h2 class="form-title">Đăng nhập</h2>
                            <span id="error_login" class="alert alert-danger" style="padding: 10px 3px"></span>
                            <form action="{{ route('user-login') }}" method="POST" class="login-form" id="login-form" style="margin-top: 15px">
                                <div class="form-group">
                                    <label for="username_login"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="username_login" id="username_login" placeholder="Tên đăng nhập"/>
                                </div>
                                <div class="invalid-feedback" style="margin-top:-15px" id="validate_username"></div>
                               @csrf
                                <div class="form-group">
                                    <label for="password_login"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password_login" id="password_login" placeholder="Mật khẩu"/>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Ghi nhớ đăng nhập</label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng nhập"/>
                                </div>
                            </form>
                            <div class="social-login">
                                <span class="social-label">Đăng nhập với</span>
                                <ul class="socials">
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        </div>    
    </div>

@include('clients.blocks.footer')
