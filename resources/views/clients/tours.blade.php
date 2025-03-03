 @include('clients.blocks.header')
 @include('clients.blocks.banner')

 <!-- Tour Grid Area start -->
 <section class="tour-grid-page py-100 rel z-1">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                 <div class="shop-sidebar">
                     <div class="widget widget-filter" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                         data-aos-offset="50">
                         <h6 class="widget-title">Lọc theo giá</h6>
                         <div class="price-filter-wrap">
                             <div class="price-slider-range"></div>
                             <div class="price">
                                 <span>Giá </span>
                                 <input type="text" id="price" readonly>
                             </div>
                         </div>
                     </div>

                     <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500"
                         data-aos-offset="50">
                         <h6 class="widget-title">Điểm đến</h6>
                         <ul class="radio-filter">
                             <li>
                                 <input class="form-check-input" type="radio" checked name="ByActivities"
                                     id="activity1">
                                 <label for="activity1">Bãi biển <span>18</span></label>
                             </li>

                         </ul>
                     </div>


                     <div class="widget widget-reviews" data-aos="fade-up" data-aos-duration="1500"
                         data-aos-offset="50">
                         <h6 class="widget-title">Đánh giá</h6>
                         <ul class="radio-filter">
                             <li>
                                 <input class="form-check-input" type="radio" checked name="ByReviews" id="review1">
                                 <label for="review1">
                                     <span class="ratting">
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                     </span>
                                 </label>
                             </li>
                             <li>
                                 <input class="form-check-input" type="radio" name="ByReviews" id="review2">
                                 <label for="review2">
                                     <span class="ratting">
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star-half-alt white"></i>
                                     </span>
                                 </label>
                             </li>
                             <li>
                                 <input class="form-check-input" type="radio" name="ByReviews" id="review3">
                                 <label for="review3">
                                     <span class="ratting">
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star white"></i>
                                         <i class="fas fa-star-half-alt white"></i>
                                     </span>
                                 </label>
                             </li>
                             <li>
                                 <input class="form-check-input" type="radio" name="ByReviews" id="review4">
                                 <label for="review4">
                                     <span class="ratting">
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star white"></i>
                                         <i class="fas fa-star white"></i>
                                         <i class="fas fa-star-half-alt white"></i>
                                     </span>
                                 </label>
                             </li>
                             <li>
                                 <input class="form-check-input" type="radio" name="ByReviews" id="review5">
                                 <label for="review5">
                                     <span class="ratting">
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star white"></i>
                                         <i class="fas fa-star white"></i>
                                         <i class="fas fa-star white"></i>
                                         <i class="fas fa-star-half-alt white"></i>
                                     </span>
                                 </label>
                             </li>
                         </ul>
                     </div>
                     <div class="widget widget-tour" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                         <h6 class="widget-title">Tours phổ biến</h6>
                         <div class="destination-item tour-grid style-three bgc-lighter">
                             <div class="image">
                                 <span class="badge">10% Off</span>
                                 <img src="{{ asset('clients/assets/images/widgets/tour1.jpg') }}" alt="Tour">
                             </div>
                             <div class="content">
                                 <div class="destination-header">
                                     <span class="location"><i class="fal fa-map-marker-alt"></i> Phú Quốc, Kiên Giang</span>
                                     <div class="ratting">
                                         <i class="fas fa-star"></i>
                                         <span>(4.8)</span>
                                     </div>
                                 </div>
                                 <h6><a href="tour-details.html">Phú Quốc</a></h6>
                             </div>
                         </div>
                        
                     </div>
                 </div>

                 <div class="widget widget-cta mt-30" data-aos="fade-up" data-aos-duration="1500"
                     data-aos-offset="50">
                     <div class="content text-white">
                         <span class="h6">Khám phá Việt Nam</span>
                         <h3>Địa điểm du lịch tốt nhất</h3>
                         <a href="tour-list.html" class="theme-btn style-two bgc-secondary">
                             <span data-hover="Explore Now">Khám phá ngay</span>
                             <i class="fal fa-arrow-right"></i>
                         </a>
                     </div>
                     <div class="image">
                         <img src="{{ asset('clients/assets/images/widgets/cta-widget.png') }}" alt="CTA">
                     </div>
                     <div class="cta-shape"><img src="{{ asset('clients/assets/images/widgets/cta-shape2.png') }}"
                             alt="Shape"></div>
                 </div>
             </div>
             <div class="col-lg-9">
                 <div class="shop-shorter rel z-3 mb-20">

                     <div class="sort-text mb-15 me-4 me-xl-auto">
                         34 Tours tìm thấy
                     </div>
                     <div class="sort-text mb-15 me-4">
                         Sắp xếp theo
                     </div>
                     <select>
                         <option value="default" selected="">Sắp xếp theo</option>
                         <option value="new">Mới nhất</option>
                         <option value="old">Cũ nhất</option>
                         <option value="hight-to-low">Cao đến thấp</option>
                         <option value="low-to-high">Thấp đến cao</option>
                     </select>
                 </div>

                 <div class="tour-grid-wrap">
                     <div class="row">
                         <div class="col-xl-4 col-md-6">
                             <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                 data-aos-duration="1500" data-aos-offset="50">
                                 <div class="image">
                                     <span class="badge bgc-pink">Nổi bật</span>
                                     <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                     <img src="{{ asset('clients/assets/images/destinations/tour-list1.jpg') }}"
                                         alt="Tour List">
                                 </div>
                                 <div class="content">
                                     <div class="destination-header">
                                         <span class="location"><i class="fal fa-map-marker-alt"></i> Miền Trung</span>
                                         <div class="ratting">
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                         </div>
                                     </div>
                                     <h6><a href="tour-details.html">Quy Nhơn</a></h6>
                                     <ul class="blog-meta">
                                         <li><i class="far fa-clock"></i> 3 ngày 2 đêm</li>
                                         <li><i class="far fa-user"></i> 5-8 khách</li>
                                     </ul>
                                     <div class="destination-footer">
                                         <span class="price"><span>2,999,999 VND</span>/khách</span>
                                         <a href="tour-details.html" class="theme-btn style-two style-three">
                                             <i class="fal fa-arrow-right"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-12">
                             <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up"
                                 data-aos-duration="1500" data-aos-offset="50">
                                 <li class="page-item disabled">
                                     <span class="page-link"><i class="far fa-chevron-left"></i></span>
                                 </li>
                                 <li class="page-item active">
                                     <span class="page-link">
                                         1
                                         <span class="sr-only">(current)</span>
                                     </span>
                                 </li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item"><a class="page-link" href="#">...</a></li>
                                 <li class="page-item">
                                     <a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </section>
 <!-- Tour Grid Area end -->

 @include('clients.blocks.newsletter')
 @include('clients.blocks.footer')
