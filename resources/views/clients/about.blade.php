@include('clients.blocks.header')
@include('clients.blocks.banner')

<!-- About Area start -->
<section class="about-area-two py-100 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-3" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <span class="subtitle mb-35">Về Công Ty</span>
            </div>
            <div class="col-xl-9">
                <div class="about-page-content" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row">
                        <div class="col-lg-8 pe-lg-5 me-lg-5">
                            <div class="section-title mb-25">
                                <h2>Công Ty Du Lịch & Lữ Hành Chuyên Nghiệp với Kinh Nghiệm Quốc Tế</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="experience-years rmb-20">
                                <span class="title bgc-secondary">Số Năm Kinh Nghiệm</span>
                                <span class="text">Chúng tôi có</span>
                                <span class="years">28+</span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <p>Chúng tôi chuyên tạo ra những trải nghiệm thành phố đáng nhớ cho du khách muốn khám phá
                                nhịp sống và linh hồn của các đô thị. Những tour du lịch do chúng tôi hướng dẫn sẽ đưa
                                bạn qua các con phố sôi động, những địa danh lịch sử và những viên ngọc ẩn giấu của mỗi
                                thành phố.</p>
                            <ul class="list-style-two mt-35">
                                <li>Công Ty Du Lịch Kinh Nghiệm</li>
                                <li>Đội Ngũ Chuyên Nghiệp</li>
                                <li>Chi Phí Du Lịch Thấp</li>
                                <li>Hỗ Trợ Trực Tuyến 24/7</li>
                            </ul>
                            <a href="about.html" class="theme-btn style-three mt-30">
                                <span data-hover="Khám Phá Các Chuyến Đi">Khám Phá Các Chuyến Đi</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area end -->


<!-- Features Area start -->
<section class="about-features-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-md-6">
                <div class="about-feature-image" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/about/about-feature1.jpg') }}" alt="Giới Thiệu">
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="about-feature-image" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/about/about-feature2.jpg') }}" alt="Giới Thiệu">
                </div>
            </div>
            <div class="col-xl-4 col-md-8">
                <div class="about-feature-boxes" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="feature-item style-three bgc-secondary">
                        <div class="icon-title">
                            <div class="icon"><i class="flaticon-award-symbol"></i></div>
                            <h5><a href="destination-details.html">Chúng Tôi Là Công Ty Đạt Giải Thưởng</a></h5>
                        </div>
                        <div class="content">
                            <p>Tại Pinnacle Business Solutions, cam kết xuất sắc và đổi mới đã giúp chúng tôi đạt được
                                thành công</p>
                        </div>
                    </div>
                    <div class="feature-item style-three bgc-primary">
                        <div class="icon-title">
                            <div class="icon"><i class="flaticon-tourism"></i></div>
                            <h5><a href="destination-details.html">5000+ Điểm Đến Du Lịch Phổ Biến</a></h5>
                        </div>
                        <div class="content">
                            <p>Đội ngũ chuyên gia của chúng tôi luôn tận tâm phát triển các chiến lược tiên tiến để thúc
                                đẩy thành công</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Features Area end -->


<!-- About Us Area start -->
<section class="about-us-area pt-70 pb-100 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-25">
                        <h2>Du Lịch Tự Tin - Những Lý Do Hàng Đầu Để Chọn Công Ty Chúng Tôi</h2>
                    </div>
                    <p>Chúng tôi làm việc chặt chẽ với khách hàng để hiểu rõ thách thức và mục tiêu, cung cấp các giải
                        pháp tùy chỉnh nhằm nâng cao hiệu quả, tăng lợi nhuận và thúc đẩy tăng trưởng bền vững.</p>
                    <div class="row pt-25">
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="3000" data-stop="3">0</span>
                                <span class="counter-title">Điểm Đến Phổ Biến</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text m-plus" data-speed="3000" data-stop="9">0</span>
                                <span class="counter-title">Khách Hàng Hài Lòng</span>
                            </div>
                        </div>
                    </div>
                    <a href="destination-details.html" class="theme-btn mt-10 style-two">
                        <span data-hover="Khám Phá Điểm Đến">Khám Phá Điểm Đến</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="about-us-page">
                    <img src="{{ asset('clients/assets/images/about/about-page.jpg') }}" alt="Giới Thiệu">
                </div>
            </div>
        </div>
    </div>

</section>
<!-- About Us Area end -->


<!-- Team Area start -->
<!-- Khu Vực Đội Ngũ Bắt Đầu -->
<section class="about-team-area pb-70 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Gặp Gỡ Những Hướng Dẫn Viên Du Lịch Kinh Nghiệm Của Chúng Tôi</h2>
                    <p>Một địa điểm <span class="count-text plus bgc-primary" data-speed="3000"
                            data-stop="34500">0</span> trải nghiệm phổ biến nhất mà bạn sẽ nhớ mãi</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item hover-content" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/team/guide1.jpg') }}" alt="Hướng Dẫn Viên">
                    <div class="content">
                        <h6>John L. Simmons</h6>
                        <span class="designation">Đồng sáng lập</span>
                        <div class="social-style-one inner-content">
                            <a href="contact.html"><i class="fab fa-twitter"></i></a>
                            <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                            <a href="contact.html"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item hover-content" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/team/guide2.jpg') }}" alt="Hướng Dẫn Viên">
                    <div class="content">
                        <h6>Andrew K. Manley</h6>
                        <span class="designation">Hướng dẫn viên cao cấp</span>
                        <div class="social-style-one inner-content">
                            <a href="contact.html"><i class="fab fa-twitter"></i></a>
                            <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                            <a href="contact.html"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item hover-content" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/team/guide3.jpg') }}" alt="Hướng Dẫn Viên">
                    <div class="content">
                        <h6>Drew J. Bridges</h6>
                        <span class="designation">Hướng dẫn viên du lịch</span>
                        <div class="social-style-one inner-content">
                            <a href="contact.html"><i class="fab fa-twitter"></i></a>
                            <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                            <a href="contact.html"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="team-item hover-content" data-aos="fade-up" data-aos-delay="150"
                    data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/team/guide4.jpg') }}" alt="Hướng Dẫn Viên">
                    <div class="content">
                        <h6>Byron F. Simpson</h6>
                        <span class="designation">Hướng dẫn viên du lịch</span>
                        <div class="social-style-one inner-content">
                            <a href="contact.html"><i class="fab fa-twitter"></i></a>
                            <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                            <a href="contact.html"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Khu Vực Đội Ngũ Kết Thúc -->

<!-- Team Area end -->


<!-- Features Area start -->
<section class="about-feature-two bgc-black pt-100 pb-45 rel z-1">
    <div class="container">
        <div class="section-title text-center text-white counter-text-wrap mb-50" data-aos="fade-up"
            data-aos-duration="1500" data-aos-offset="50">
            <h2>Cách Hưởng Lợi Từ Ravelo Tours & Travels</h2>
            <p>Một địa điểm <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm
                phổ biến nhất mà bạn sẽ nhớ mãi</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="feature-item style-two">
                    <div class="icon"><i class="flaticon-save-money"></i></div>
                    <div class="content">
                        <h5><a href="destination-details.html">Đảm Bảo Giá Tốt Nhất</a></h5>
                        <p>Cắm trại bằng lều là một cách tuyệt vời để kết nối với thiên nhiên</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="feature-item style-two">
                    <div class="icon"><i class="flaticon-travel-1"></i></div>
                    <div class="content">
                        <h5><a href="destination-details.html">Điểm Đến Đa Dạng</a></h5>
                        <p>Đạp xe leo núi là một môn thể thao đầy phấn khích giúp tăng cường thể lực</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="feature-item style-two">
                    <div class="icon"><i class="flaticon-booking"></i></div>
                    <div class="content">
                        <h5><a href="destination-details.html">Đặt Chỗ Nhanh Chóng</a></h5>
                        <p>Chèo thuyền kayak là một hoạt động ngoài trời đầy phiêu lưu</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="feature-item style-two">
                    <div class="icon"><i class="flaticon-guidepost"></i></div>
                    <div class="content">
                        <h5><a href="destination-details.html">Hướng Dẫn Viên Tốt Nhất</a></h5>
                        <p>Câu cá và đi thuyền là những hoạt động mang lại trải nghiệm tuyệt vời</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('clients/assets/images/video/shape1.png') }}" alt="hình dạng">
    </div>
</section>
<!-- Features Area end -->


<!-- Video Area start -->
<div class="video-area pt-25 rel z-1">
    <div class="container">
        <div class="video-wrap" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
            <img src="{{ asset('clients/assets/images/video/video-bg.jpg') }}" alt="Video">
            <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play" tabindex="-1"><i
                    class="fas fa-play"></i></a>
        </div>
    </div>
    <div class="for-bg bgc-black">
        <div class="shape">
            <img src="{{ asset('clients/assets/images/video/shape2.png') }}" alt="shape">
        </div>
    </div>
</div>
<!-- Video Area end -->

<!-- Client Logo Area start -->
<div class="client-logo-area mb-100">
    <div class="container">
        <div class="client-logo-wrap pt-60 pb-55">
            <div class="text-center mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                <h6>Chúng tôi được đề xuất bởi:</h6>
            </div>
            <div class="client-logo-active">
                <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo1.png') }}"
                            alt="Client Logo"></a>
                </div>
                <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo2.png') }}"
                            alt="Client Logo"></a>
                </div>
                <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo3.png') }}"
                            alt="Client Logo"></a>
                </div>
                <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo4.png') }}"
                            alt="Client Logo"></a>
                </div>
                <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="#"><img src="{{ asset('clients/assets/images/client-logos/client-logo5.png') }}"
                            alt="Client Logo"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client Logo Area end -->
@include('clients.blocks.footer')
