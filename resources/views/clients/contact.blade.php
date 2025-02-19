@include('clients.blocks.header')
@include('clients.blocks.banner')
<!-- Contact Info Area start -->
<section class="contact-info-area pt-100 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact-info-content mb-30 rmb-55" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-30">
                        <h2>Hãy Trò Chuyện Cùng Các Hướng Dẫn Viên Du Lịch Chuyên Nghiệp Của Chúng Tôi</h2>
                    </div>
                    <p>Đội ngũ hỗ trợ tận tâm của chúng tôi luôn sẵn sàng giúp đỡ bạn với mọi thắc mắc hoặc vấn đề, cung
                        cấp các giải pháp nhanh chóng và phù hợp theo nhu cầu của bạn.</p>
                    <div class="features-team-box mt-40">
                        <h6>85+ Thành Viên Chuyên Gia</h6>
                        <div class="feature-authors">
                            <img src="{{ asset('clients/assets/images/features/feature-author1.jpg') }}"
                                alt="Chuyên gia">
                            <img src="{{ asset('clients/assets/images/features/feature-author2.jpg') }}"
                                alt="Chuyên gia">
                            <img src="{{ asset('clients/assets/images/features/feature-author3.jpg') }}"
                                alt="Chuyên gia">
                            <img src="{{ asset('clients/assets/images/features/feature-author4.jpg') }}"
                                alt="Chuyên gia">
                            <img src="{{ asset('clients/assets/images/features/feature-author5.jpg') }}"
                                alt="Chuyên gia">
                            <img src="{{ asset('clients/assets/images/features/feature-author6.jpg') }}"
                                alt="Chuyên gia">
                            <img src="{{ asset('clients/assets/images/features/feature-author7.jpg') }}"
                                alt="Chuyên gia">
                            <span>+</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="50">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="content">
                                <h5>Cần Hỗ Trợ & Giúp Đỡ</h5>
                                <div class="text"><i class="far fa-envelope"></i> <a
                                        href="mailto:support@gmail.com">support@gmail.com</a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="100">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="content">
                                <h5>Cần Hỗ Trợ Gấp</h5>
                                <div class="text"><i class="far fa-phone"></i> <a href="callto:+0001234588">+000 (123)
                                        45 88</a></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="50">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5>Chi Nhánh Đà Lạt</h5>
                                <div class="text"><i class="fal fa-map-marker-alt"></i> Đà Lạt, Lâm Đồng</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-info-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50"
                            data-aos-delay="100">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="content">
                                <h5>Địa Chỉ Văn Phòng Chính</h5>
                                <div class="text"><i class="fal fa-map-marker-alt"></i> Đà Lạt, Lâm Đồng</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Info Area end -->


<!-- Contact Form Area start -->
<section class="contact-form-area py-70 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                    <form id="contactForm" class="contactForm" name="contactForm"
                        action="https://webtendtheme.net/html/2024/ravelo/assets/php/form-process.php" method="post"
                        data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title">
                            <h2>Liên Hệ Với Chúng Tôi</h2>
                        </div>
                        <p>Địa chỉ email của bạn sẽ không được công khai. Các trường bắt buộc được đánh dấu *</p>
                        <div class="row mt-35">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Họ và Tên</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Họ và tên" value="" required
                                        data-error="Vui lòng nhập Họ và Tên">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Số Điện Thoại</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control"
                                        placeholder="Số điện thoại" value="" required
                                        data-error="Vui lòng nhập Số điện thoại">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Địa Chỉ Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Nhập email" value="" required
                                        data-error="Vui lòng nhập Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Tin Nhắn Của Bạn</label>
                                    <textarea name="message" id="message" class="form-control" rows="5" placeholder="Nội dung tin nhắn"
                                        required data-error="Vui lòng nhập tin nhắn"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">

                                    <button type="submit" class="theme-btn style-two">
                                        <span data-hover="Gửi Bình Luận">Gửi Bình Luận</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-images-part" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('clients/assets/images/contact/contact1.jpg') }}" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('clients/assets/images/contact/contact2.jpg') }}" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('clients/assets/images/contact/contact3.jpg') }}" alt="Contact">
                        </div>
                    </div>
                    <div class="circle-logo">
                        <img src="{{ asset('clients/assets/images/contact/icon.png') }}" alt="Logo">
                        <span class="title h2">GoVietTour</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Area end -->


<!-- Contact Map Start -->
<div class="contact-map">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.2878659858575!2d108.44162997576724!3d11.95456038827512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317112d959f88991%3A0x9c66baf1767356fa!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyDEkMOgIEzhuqF0!5e0!3m2!1svi!2s!4v1739975814251!5m2!1svi!2s"         style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Contact Map End -->

@include('clients.blocks.footer')
