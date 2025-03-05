@include('clients.blocks.header')

<!-- 404 Error Area start -->
<section class="error-area pt-70 pb-100 rel z-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="error-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <h1>Ôi! </h1>
                    <div class="section-title mt-15 mb-25">
                        <h2>Không tìm thấy trang</h2>
                    </div>
                    <p>Có vẻ như trang bạn đang tìm kiếm không tồn tại hoặc đã bị di chuyển.
                    </p>
                    <form class="newsletter-form mt-40 mb-50" action="#">
                        <input id="news-email" type="text" placeholder="Search keyword" required>
                        <button type="submit" class="theme-btn bgc-secondary style-two">
                            <span data-hover="Search">Tìm kiếm</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                    </form>
                    <div class="keywords">
                        <a href="{{ route('home') }}">Trang chủ</a>
                        <a href="{{ route('about') }}">Giới thiệu</a>
                        <a href="{{ route('contact') }}">Liên hệ</a>
                        <a href="{{ route('tours') }}">Dịch vụ</a>
                    </div>                    
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="error-images" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/newsletter/404.png')}}" alt="404 Error">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404 Error Area end -->


@include('clients.blocks.footer')
