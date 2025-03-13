@include('clients.blocks.header')
<section class="page-banner-two rel z-1">
    <div class="container-fluid">
        <hr class="mt-0">
        <div class="container">
            <div class="banner-inner pt-15 pb-25">
                <h2 class="page-title mb-10 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">{{ $tourDetail->destination }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20 aos-init aos-animate" data-aos="fade-right"
                        data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
       <!-- Tour Gallery start -->
       <div class="tour-gallery">
        <div class="container-fluid">
            <div class="row gap-10 justify-content-center rel">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('clients/assets/images/gallery-tours/' .$tourDetail->images[0].'')}}" alt="Destination">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('clients/assets/images/gallery-tours/' .$tourDetail->images[1].'')}}" alt="Destination">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item gallery-between">
                        <img src="{{ asset('clients/assets/images/gallery-tours/' .$tourDetail->images[2].'')}}" alt="Destination">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="{{ asset('clients/assets/images/gallery-tours/' .$tourDetail->images[3].'')}}" alt="Destination">
                    </div>
                    <div class="gallery-item">
                        <img src="{{ asset('clients/assets/images/gallery-tours/' .$tourDetail->images[4].'')}}" alt="Destination">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Tour Gallery End -->
    
    
    <!-- Tour Header Area start -->
    <section class="tour-header-area pt-70 rel z-1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-7">
                    <div class="tour-header-content mb-15" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <span class="location d-inline-block mb-10"><i class="fal fa-map-marker-alt"></i> {{ $tourDetail-> destination }}</span>
                        <div class="section-title pb-5">
                            <h2>{{ $tourDetail->title }}</h2>
                        </div>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 text-lg-end" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="tour-header-social mb-10">
                        <a href="#"><i class="far fa-share-alt"></i>Chia sẻ</a>
                        <a href="#"><i class="fas fa-heart bgc-secondary"></i>Yêu thích</a>
                    </div>
                </div>
            </div>
            <hr class="mt-50 mb-70">
        </div>
    </section>
    <!-- Tour Header Area end -->
    
    
    <!-- Tour Details Area start -->
    <section class="tour-details-page pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-details-content">
                        <h3>Khám phá Tours</h3>
                        <p>{!! $tourDetail->description !!} </p>
                        <div class="row pb-55">
                            <div class="col-md-6">
                                <div class="tour-include-exclude mt-30">
                                    <h5>Bao gồm và không bao gồm</h5>
                                    <ul class="list-style-one check mt-25">
                                        <li><i class="far fa-check"></i> Dịch vụ đón và trả khách</li>
                                        <li><i class="far fa-check"></i> 1 bữa ăn mỗi ngày</li>
                                        <li><i class="far fa-check"></i> Bữa tối trên du thuyền & Sự kiện âm nhạc</li>
                                        <li><i class="far fa-check"></i> Tham quan 7 địa điểm tuyệt vời nhất trong thành phố</li>
                                        <li><i class="far fa-check"></i> Nước đóng chai trên xe</li>
                                        <li><i class="far fa-check"></i> Phương tiện di chuyển Limousine</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tour-include-exclude mt-30">
                                    <h5>Không bao gồm</h5>
                                    <ul class="list-style-one mt-25">
                                        <li><i class="far fa-times"></i> Tiền boa</li>
                                        <li><i class="far fa-times"></i> Đón và trả khách tại khách sạn</li>
                                        <li><i class="far fa-times"></i> Bữa trưa, đồ ăn & đồ uống</li>
                                        <li><i class="far fa-times"></i> Nâng cấp tùy chọn lên một ly</li>
                                        <li><i class="far fa-times"></i> Dịch vụ bổ sung</li>
                                        <li><i class="far fa-times"></i> Bảo hiểm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Lịch trình</h3>
                    <div class="accordion-two mt-25 mb-60" id="faq-accordion-two">
                        @php
                        $day = 1;
                        @endphp
                        @foreach ($tourDetail->timeline as $timeline)
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo{{ $timeline->timeLineId }}">
                                    Ngày {{ $day++ }} - {{ $timeline->title }}
                                </button>
                            </h5>
                            <div id="collapseTwo{{ $timeline->timeLineId }}" class="accordion-collapse collapse"
                                data-bs-parent="#faq-accordion-two">
                                <div class="accordion-body">
                                    <p>{!! $timeline->description !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <h3>Bản đồ</h3>
                    <div class="tour-map mt-30 mb-50">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.2878659858575!2d108.44162997576724!3d11.95456038827512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317112d959f88991%3A0x9c66baf1767356fa!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyDEkMOgIEzhuqF0!5e0!3m2!1svi!2s!4v1739975814251!5m2!1svi!2s" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <h3>Nhận xét của khách hàng</h3>
                    <div class="clients-reviews bgc-black mt-30 mb-60">
                        <div class="left">
                            <b>4.8</b>
                            <span>(586 đánh giá)</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="right">
                            <div class="ratting-item">
                                <span class="title">Dịch vụ</span>
                                <span class="line"><span style="width: 80%;"></span></span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="ratting-item">
                                <span class="title">Hướng dẫn</span>
                                <span class="line"><span style="width: 70%;"></span></span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="ratting-item">
                                <span class="title">Giá</span>
                                <span class="line"><span style="width: 80%;"></span></span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="ratting-item">
                                <span class="title">Sự an toàn</span>
                                <span class="line"><span style="width: 80%;"></span></span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="ratting-item">
                                <span class="title">Đồ ăn</span>
                                <span class="line"><span style="width: 80%;"></span></span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="ratting-item">
                                <span class="title">Khách sạn</span>
                                <span class="line"><span style="width: 80%;"></span></span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Ý kiến ​​khách hàng</h3>
                    <div class="comments mt-30 mb-60">
                        <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="author-thumb">
                                <img src="assets/images/blog/comment-author1.jpg" alt="Author">
                            </div>
                            <div class="content">
                                <h6>Van A</h6>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="time">PHÚ QUỐC 3 ngày 2 đêm</span>
                                <p>Các chuyến tham quan và du lịch đóng vai trò quan trọng trong việc làm phong phú thêm cuộc sống bằng cách mang đến những trải nghiệm độc đáo, giao lưu văn hóa và niềm vui khám phá.</p>
                                <a class="read-more" href="#">Phản hồi <i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="comment-body comment-child" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="author-thumb">
                                <img src="assets/images/blog/comment-author2.jpg" alt="Author">
                            </div>
                            <div class="content">
                                <h6>Van B</h6>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="time">PHÚ QUỐC 3 ngày 2 đêm</span>
                                <p>Các chuyến tham quan và du lịch đóng vai trò quan trọng trong việc làm phong phú thêm cuộc sống bằng cách mang đến những trải nghiệm độc đáo, giao lưu văn hóa và niềm vui khám phá.</p>
                                <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="author-thumb">
                                <img src="assets/images/blog/comment-author3.jpg" alt="Author">
                            </div>
                            <div class="content">
                                <h6>Van C</h6>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="time">PHÚ QUỐC 3 ngày 2 đêm</span>
                                <p>Các chuyến tham quan và du lịch đóng vai trò quan trọng trong việc làm phong phú thêm cuộc sống bằng cách mang đến những trải nghiệm độc đáo, giao lưu văn hóa và niềm vui khám phá.</p>
                                <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Thêm đánh giá</h3>
                    <form id="comment-form" class="comment-form bgc-lighter z-1 rel mt-30" name="review-form" action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                       <div class="comment-review-wrap">
                           <div class="comment-ratting-item">
                                <span class="title">Dịch vụ</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                           <div class="comment-ratting-item">
                                <span class="title">Hướng dẫn</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                           <div class="comment-ratting-item">
                                <span class="title">Giá</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                           <div class="comment-ratting-item">
                                <span class="title">Sự an toàn</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                           <div class="comment-ratting-item">
                                <span class="title">Đồ ăn</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                           <div class="comment-ratting-item">
                                <span class="title">Khách sạn</span>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-30 mb-40">
                        <h5>Để lại phản hồi</h5>
                        <div class="row gap-20 mt-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full-name">Tên</label>
                                    <input type="text" id="full-name" name="full-name" class="form-control" value="" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email-address">Email</label>
                                    <input type="email" id="email-address" name="email" class="form-control" value="" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Bình luận</label>
                                    <textarea name="message" id="message" class="form-control" rows="5" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="submit" class="theme-btn bgc-secondary style-two">
                                        <span data-hover="Submit reviews">Gửi đánh giá</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                    <div class="blog-sidebar tour-sidebar">
                       
                        <div class="widget widget-booking" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title">Đặt ngay</h5>
                            <form action="#">
                                <div class="date mb-25">
                                    <b>Ngày bắt đầu</b>
                                    <input type="text" value="{{ date('d-m-Y', strtotime($tourDetail->startDate))  }}"disabled>
                                </div>
                                <hr>
                                <div class="date mb-25">
                                    <b>Ngày kết thúc</b>
                                    <input type="text"value="{{ date('d-m-Y', strtotime($tourDetail->endDate))  }}" disabled>
                                </div>
                                <hr>
                                <div class="time py-5">
                                    <b>Thời gian :</b>
                                    <p>{{ $tourDetail->time }}</p>
                                </div>
                                <hr class="mb-25">
                                <h6>Vé:</h6>
                                <ul class="tickets clearfix">
                                    <li>
                                        Trẻ em  <span class="price">{{ number_format($tourDetail->priceChild,0, ',','.') }} VNĐ</span>
                                    </li>
                                    <li>
                                        Người lớn <span class="price">{{ number_format($tourDetail->priceAdult,0, ',','.') }} VNĐ</span>
                                    </li>
                                </ul>
                                <hr class="mb-25">
                                <h6>Tổng tiền: <span class="price">1.000.000</span></h6>
                                <button type="submit" class="theme-btn style-two w-100 mt-15 mb-5">
                                    <span data-hover="Book Now">Đặt ngay</span>
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                                <div class="text-center">
                                    <a href="{{ route('contact') }}">Bạn cần trợ giúp không?</a>
                                </div>
                            </form>
                        </div>
                        
                        <div class="widget widget-contact" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title">Cần trợ giúp?</h5>
                            <ul class="list-style-one">
                                <li><i class="far fa-envelope"></i> <a href="emilto:goviettour@gmail.com">goviettour@gmail.com</a></li>
                                <li><i class="far fa-phone-volume"></i> <a href="callto:+000(123)45688">+84 123 456 789</a></li>
                            </ul>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour Details Area end -->
    
    
@include('clients.blocks.new_letter')
@include('clients.blocks.footer')