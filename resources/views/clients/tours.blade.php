@include('clients.blocks.header')
@include('clients.blocks.banner')
<!-- Tour Grid Area start -->
<section class="tour-grid-page py-100 rel z-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                <div class="shop-sidebar">
                    <div class="widget widget-filter" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="widget-title">Filter by Price</h6>
                        <div class="price-filter-wrap">
                            <div class="price-slider-range"></div>
                            <div class="price">
                                <span>Price </span>
                                <input type="text" id="price" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="widget widget-activity" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="widget-title">By Activities</h6>
                        <ul class="radio-filter">
                            <li>
                                <input class="form-check-input" type="radio" checked name="ByActivities" id="activity1">
                                <label for="activity1">Sea Beach <span>18</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity2">
                                <label for="activity2">Car Parking <span>29</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity3">
                                <label for="activity3">Laundry Service <span>23</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity4">
                                <label for="activity4">Outdoor Seating <span>25</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity5">
                                <label for="activity5">Reservations <span>26</span></label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByActivities" id="activity6">
                                <label for="activity6">Smoking Allowed <span>28</span></label>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="widget widget-reviews" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="widget-title">By Reviews</h6>
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
                    
                    <div class="widget widget-languages" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="widget-title">By Languages</h6>
                        <ul class="radio-filter">
                            <li>
                                <input class="form-check-input" type="radio" checked name="ByLanguages" id="language1">
                                <label for="language1">American</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language2">
                                <label for="language2">English</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language3">
                                <label for="language3">German</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language4">
                                <label for="language4">Japanese</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language5">
                                <label for="language5">Vietnamese</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="ByLanguages" id="language6">
                                <label for="language6">French</label>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="widget widget-duration" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="widget-title">Duration</h6>
                        <ul class="radio-filter">
                            <li>
                                <input class="form-check-input" type="radio" checked name="Duration" id="duration1">
                                <label for="duration1">0 - 2 hours</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="Duration" id="duration2">
                                <label for="duration2">2 - 4 hours</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="Duration" id="duration3">
                                <label for="duration3">4 - 8 hours</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="Duration" id="duration4">
                                <label for="duration4">Fulda (+8 hours)</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="Duration" id="duration5">
                                <label for="duration5">Multi days</label>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="widget widget-tour" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="widget-title">Popular Tours</h6>
                        <div class="destination-item tour-grid style-three bgc-lighter">
                            <div class="image">
                                <span class="badge">10% Off</span>
                                <img src="assets/images/widgets/tour1.jpg" alt="Tour">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <span>(4.8)</span>
                                    </div>
                                </div>
                                <h6><a href="tour-details.html">Relinking Beach, Bali, Indonesia</a></h6>
                            </div>
                        </div>
                        <div class="destination-item tour-grid style-three bgc-lighter">
                            <div class="image">
                                <img src="assets/images/widgets/tour1.jpg" alt="Tour">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <span>(4.8)</span>
                                    </div>
                                </div>
                                <h6><a href="tour-details.html">Relinking Beach, Bali, Indonesia</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="widget widget-cta mt-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="content text-white">
                        <span class="h6">Explore The World</span>
                        <h3>Best Tourist Place</h3>
                        <a href="tour-list.html" class="theme-btn style-two bgc-secondary">
                            <span data-hover="Explore Now">Explore Now</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="image">
                        <img src="assets/images/widgets/cta-widget.png" alt="CTA">
                    </div>
                    <div class="cta-shape"><img src="assets/images/widgets/cta-shape2.png" alt="Shape"></div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-shorter rel z-3 mb-20">
                    <ul class="grid-list mb-15 me-2">
                        <li><a href="#"><i class="fal fa-border-all"></i></a></li>
                        <li><a href="#"><i class="far fa-list"></i></a></li>
                    </ul>
                    <div class="sort-text mb-15 me-4 me-xl-auto">
                        34 Tours found
                    </div>
                    <div class="sort-text mb-15 me-4">
                        Sort By
                    </div>
                    <select>
                        <option value="default" selected="">Short By</option>
                        <option value="new">Newness</option>
                        <option value="old">Oldest</option>
                        <option value="hight-to-low">High To Low</option>
                        <option value="low-to-high">Low To High</option>
                    </select>
                </div>
                
                <div class="tour-grid-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge bgc-pink">Featured</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list1.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise trip by Boat's in Bali, Indonesia</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list2.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list3.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise lake trip by Boat in Bali, Indonesia</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list4.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge bgc-pink">Featured</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list5.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge">10% Off</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list6.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise lake trip by Boat in Bali, Indonesia</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge">10% Off</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list7.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list8.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge bgc-pink">Featured</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list9.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise lake trip by Boat in Bali, Indonesia</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list10.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                                <div class="image">
                                    <span class="badge">10% Off</span>
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list11.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Buenos Aires, Calafate & Ushuaia, Rome, Italy</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                                <div class="image">
                                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                    <img src="assets/images/destinations/tour-list12.jpg" alt="Tour List">
                                </div>
                                <div class="content">
                                    <div class="destination-header">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                        <div class="ratting">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <h6><a href="tour-details.html">Bay Cruise lake trip by Boat in Bali, Indonesia</a></h6>
                                    <ul class="blog-meta">
                                        <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                        <li><i class="far fa-user"></i> 5-8 guest</li>
                                    </ul>
                                    <div class="destination-footer">
                                        <span class="price"><span>$58.00</span>/person</span>
                                        <a href="tour-details.html" class="theme-btn style-two style-three">
                                            <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <ul class="pagination justify-content-center pt-15 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
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
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"><div class="custom-loader"></div></div>

    <!-- main header -->
    <header class="main-header header-one">
        <!--Header-Upper-->
        <div class="header-upper bg-white py-30 rpy-0">
            <div class="container-fluid clearfix">

                <div class="header-inner rel d-flex align-items-center">
                    <div class="logo-outer">
                        <div class="logo"><a href="{{ route('home') }}"><img src="assets/images/logos/logo-two.png" alt="Logo" title="Logo"></a></div>
                    </div>

                    <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                               <div class="mobile-logo">
                                   <a href="{{ route('home') }}">
                                        <img src="assets/images/logos/logo-two.png" alt="Logo" title="Logo">
                                   </a>
                               </div>
                               
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="{{ route('home') }}">Travel Agency</a></li>
                                            <li><a href="index2.html">City Tou</a></li>
                                            <li><a href="index3.html">Tour Package</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown"><a href="#">Tours</a>
                                        <ul>
                                            <li><a href="tour-list.html">Tour List</a></li>
                                            <li><a href="tour-grid.html">Tour Grid</a></li>
                                            <li><a href="tour-sidebar.html">Tour Sidebar</a></li>
                                            <li><a href="tour-details.html">Tour Details</a></li>
                                            <li><a href="tour-guide.html">Tour Guide</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Destinations</a>
                                        <ul>
                                            <li><a href="destination1.html">Destination 01</a></li>
                                            <li><a href="destination2.html">Destination 01</a></li>
                                            <li><a href="destination-details.html">Destination Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="faqs.html">faqs</a></li>
                                            <li class="dropdown"><a href="#">Gallery</a>
                                                <ul>
                                                    <li><a href="gellery-grid.html">Gallery Grid</a></li>
                                                    <li><a href="gellery-slider.html">Gallery Slider</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">products</a>
                                                <ul>
                                                    <li><a href="shop.html">Our Products</a></li>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">blog</a>
                                        <ul>
                                            <li><a href="blog.html">blog List</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    
                    <!-- Menu Button -->
                    <div class="menu-btns py-10">
                        <a href="contact.html" class="theme-btn style-two bgc-secondary">
                            <span data-hover="Book Now">Book Now</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                        <!-- menu sidbar -->
                        <div class="menu-sidebar">
                            <button class="bg-transparent">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->
    </header>
   

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>
    
    <!-- Hidden Sidebar -->
    <section class="hidden-bar">
        <div class="inner-box text-center">
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title">
                <h4>Get Appointment</h4>
            </div>

            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="post" action="https://webtendtheme.net/html/2024/ravelo/contact.html">
                    <div class="form-group">
                        <input type="text" name="text" value="" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="theme-btn style-two">
                            <span data-hover="Submit now">Submit now</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!--Social Icons-->
            <div class="social-style-one">
                <a href="contact.html"><i class="fab fa-twitter"></i></a>
                <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                <a href="contact.html"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </section>
    <!--End Hidden Sidebar -->
   
    
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-50 pb-35 rel z-1 bgs-cover" style="background-image: url(assets/images/banner/banner.jpg);">
        <div class="container">
            <div class="banner-inner text-white mb-50">
                <h2 class="page-title mb-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">Tour Grid View</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Tour Grid</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <div class="container container-1400">
        <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
            <div class="filter-item clearfix">
                <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                <span class="title">Destinations</span>
                <select name="city" id="city">
                    <option value="value1">City or Region</option>
                    <option value="value2">City</option>
                    <option value="value2">Region</option>
                </select>
            </div>
            <div class="filter-item clearfix">
                <div class="icon"><i class="fal fa-flag"></i></div>
                <span class="title">All Activity</span>
                <select name="activity" id="activity">
                    <option value="value1">Choose Activity</option>
                    <option value="value2">Daily</option>
                    <option value="value2">Monthly</option>
                </select>
            </div>
            <div class="filter-item clearfix">
                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                <span class="title">Departure Date</span>
                <select name="date" id="date">
                    <option value="value1">Date from</option>
                    <option value="value2">10</option>
                    <option value="value2">20</option>
                </select>
            </div>
            <div class="filter-item clearfix">
                <div class="icon"><i class="fal fa-users"></i></div>
                <span class="title">Guests</span>
                <select name="cuests" id="cuests">
                    <option value="value1">0</option>
                    <option value="value2">1</option>
                    <option value="value2">2</option>
                </select>
            </div>
            <div class="search-button">
                <button class="theme-btn">
                    <span data-hover="Search">Search</span>
                    <i class="far fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Page Banner End -->
    
    
    
    

    <!-- Newsletter Area start -->
    <section class="newsletter-three bgc-primary py-100 rel z-1" style="background-image: url(assets/images/newsletter/newsletter-bg-lines.png);">
        <div class="container container-1500">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title counter-text-wrap mb-45">
                            <h2>Subscribe Our Newsletter to Get more offer & Tips</h2>
                            <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                        </div>
                        <form class="newsletter-form mb-15" action="#">
                            <input id="news-email" type="email" placeholder="Email Address" required>
                            <button type="submit" class="theme-btn bgc-secondary style-two">
                                <span data-hover="Subscribe">Subscribe</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                        </form>
                        <p>No credit card requirement. No commitments</p>
                    </div>
                    <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <img src="assets/images/newsletter/newsletter-bg-image.png" alt="Newsletter">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="newsletter-image-part bgs-cover" style="background-image: url(assets/images/newsletter/newsletter-two-right.jpg);" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Area end -->
        
       
  

</div>
<!--End pagewrapper-->
@include('clients.blocks.footer')