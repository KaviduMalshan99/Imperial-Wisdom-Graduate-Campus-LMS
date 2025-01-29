@extends('frontend.master')

@section('title', 'Home - Edukon')

@section('content')


    <!-- Banner Section Start Here -->
    <div class="banner-section style-4">
        <div class="container">
            <div class="banner-content">
                <h2>Search Your One From <span>150+</span> Online Courses</h2>
                <form>
                    <select>
                        <option>Categories</option>
                        <option>Web Development</option>
                        <option>Graphic Design</option>
                        <option>Python Proramming</option>
                        <option>JavaScript</option>
                        <option>PHP</option>
                    </select>
                    <input type="text" name="search" placeholder="Search your theme">
                    <button type="submit"><i class="icofont-search"></i></button>
                </form>
                <p>We Have The Largest Collection of Courses</p>
                <ul class="lab-ul">
                    <li><i class="icofont-users-alt-4"></i> 1.5 Million Students</li>
                    <li><i class="icofont-notification"></i> More then 2000 Courses</li>
                    <li><i class="icofont-globe"></i> Learn Anything Online</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Banner Section Ending Here -->


    <!-- category section start here -->
    <div class="category-section style-4 padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Choose Any One Course</span>
                <h2 class="title">Learn Everything with Professor</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="category-item">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/01.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <div class="cate-icon">
                                        <i class="icofont-brand-windows"></i>
                                    </div>
                                    <a href="course.html"><h6>Software</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/02.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <div class="cate-icon">
                                        <i class="icofont-cube"></i>
                                    </div>
                                    <a href="course.html"><h6>Design & Art</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/03.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <div class="cate-icon">
                                        <i class="icofont-camera"></i>
                                    </div>
                                    <a href="course.html"><h6>Photography</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/04.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <div class="cate-icon">
                                        <i class="icofont-globe"></i>
                                    </div>
                                    <a href="course.html"><h6>Language</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/05.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <div class="cate-icon">
                                        <i class="icofont-chart-growth"></i>
                                    </div>
                                    <a href="course.html"><h6>Marketing</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-item">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="assets/images/category/06.jpg" alt="category">
                                </div>
                                <div class="category-content">
                                    <div class="cate-icon">
                                        <i class="icofont-music-disk"></i>
                                    </div>
                                    <a href="course.html"><h6>Music</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="course.html" class="lab-btn"><span>Get Started Now</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- category section start here -->


    <!-- course section start here -->
    <div class="course-section style-3 padding-tb">
        <div class="course-shape one"><img src="assets/images/shape-img/icon/01.png" alt="education"></div>
        <div class="course-shape two"><img src="assets/images/shape-img/icon/02.png" alt="education"></div>
        <div class="container">
            <div class="section-header">
                <h2 class="title">Our Courses</h2>
                <div class="course-filter-group">
                    <ul class="lab-ul">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".english">English</li>
                        <li data-filter=".software">Software</li>
                        <li data-filter=".design">Design</li>
                        <li data-filter=".photography">Photography</li>
                        <li data-filter=".music">Music</li>
                        <li data-filter=".marketing">Marketing</li>
                    </ul>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 course-filter">
                    <div class="col english">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/16.jpg" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">English</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="course-single.html"><h5>Basic English Spoken and Writing</h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/01.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">William Smith</a>
                                        </div>
                                        <div class="course-price">$19.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col software">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/17.jpg" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Software</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="course-single.html"><h5>Learn Advance with PHP Language</h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/02.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Zarina Bobro</a>
                                        </div>
                                        <div class="course-price">$19.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col design">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/18.jpg" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Design</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="course-single.html"><h5>Logo Design in Adobe Illustrator</h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/03.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Nestor Maslov</a>
                                        </div>
                                        <div class="course-price">$19.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col photography">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/19.jpg" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Photography</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="course-single.html"><h5>Digital Photography for Beginner</h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/04.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Rose Repina</a>
                                        </div>
                                        <div class="course-price">$19.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col marketing">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/20.jpg" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Marketing</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="course-single.html"><h5>Advance Social  Media Marketing</h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/05.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Muslim Voronk</a>
                                        </div>
                                        <div class="course-price">$19.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col music">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/21.jpg" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Music</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="course-single.html"><h5>A Guidelines Complete Guitar System</h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/06.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Zoe Muravyova</a>
                                        </div>
                                        <div class="course-price">$19.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col design">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/22.jpg" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Design</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="course-single.html"><h5>Learn Piano Guidelines System A to Z</h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/01.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">William Smith</a>
                                        </div>
                                        <div class="course-price">$19.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col software">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="assets/images/course/23.jpg" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">Software</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="course-single.html"><h5>Advance Professional Graphic Design</h5></a>
                                    <div class="course-footer">
                                        <div class="course-author">
                                            <img src="assets/images/course/author/02.jpg" alt="course author">
                                            <a href="team-single.html" class="ca-name">Nora Yurieva</a>
                                        </div>
                                        <div class="course-price">$19.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course section ending here -->


    <!-- Register Start Here -->
    <section class="register-section padding-tb pb-0">
        <div class="container">
            <div class="row g-4 row-cols-lg-2 row-cols-1 align-items-center">
                <div class="col">
                    <div class="section-header">
                        <span class="subtitle">Save The Day</span>
                        <h2 class="title">Join on Day Long Free Workshop for <b>Advance</b> <span>PHP</span> <b>Language</b></h2>
                        <p>Limited Time Offer! Hurry Up</p>
                    </div>
                </div>
                <div class="col">
                    <div class="section-wrapper">
                        <h4>Register Now</h4>
                        <form class="register-form">
                            <input type="text" name="username" placeholder="Username" class="reg-input">
                            <input type="email" name="email" placeholder="Email" class="reg-input">
                            <input type="text" name="phone" placeholder="Phone" class="reg-input">
                            <button type="submit" class="lab-btn"><span>Register Now</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register End Here -->


    <!-- Clients Section Start Here -->
    <div class="clients-section style-2 padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="title">More Then <span class="yellow-color">60,000</span> Students</h2>
                <p>Take courses on your any device with our app & learn all time what you want. Just download & install & start to learn</p>
            </div>
            <div class="section-wrapper">
                <div class="clients">
                    <div class="client-list">
                        <div class="client-content">
                            <span>American</span>
                            <p class="mb-0">1200 Students</p>
                        </div>
                        <div class="client-thumb">
                            <img src="assets/images/clients/avater.jpg" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <span>Arabic</span>
                            <p class="mb-0">1300 Students</p>
                        </div>
                        <div class="client-thumb">
                            <img src="assets/images/clients/avater.jpg" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <span>Australian</span>
                            <p class="mb-0">1800 Students</p>
                        </div>
                        <div class="client-thumb">
                            <img src="assets/images/clients/avater.jpg" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <span>Croatian</span>
                            <p class="mb-0">1800 Students</p>
                        </div>
                        <div class="client-thumb">
                            <img src="assets/images/clients/avater.jpg" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <span>Danish</span>
                            <p class="mb-0">1243 Students</p>
                        </div>
                        <div class="client-thumb">
                            <img src="assets/images/clients/avater.jpg" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <span>Finnish</span>
                            <p class="mb-0">325 Students</p>
                        </div>
                        <div class="client-thumb">
                            <img src="assets/images/clients/avater.jpg" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <span>Slovenian</span>
                            <p class="mb-0">200 Students</p>
                        </div>
                        <div class="client-thumb">
                            <img src="assets/images/clients/avater.jpg" alt="lab-clients">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients Section Ending Here -->


    <!-- Instructors Section Start Here -->
    <div class="instructor-section style-2 padding-tb section-bg-ash">
        <div class="container">
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-md-2 row-cols-xl-3 align-items-center">
                    <div class="col">
                        <div class="count-item">
                            <div class="count-inner">
                                <div class="count-icon">
                                    <i class="icofont-users-alt-4"></i>
                                </div>
                                <div class="count-content">
                                    <h2><span class="count" data-to="12600" data-speed="1500">12,600</span><span>+</span></h2>
                                    <p>Students Enrolled</p>
                                </div>
                            </div>
                        </div>
                        <div class="count-item">
                            <div class="count-inner">
                                <div class="count-icon">
                                    <i class="icofont-graduate-alt"></i>
                                </div>
                                <div class="count-content">
                                    <h2><span class="count" data-to="50" data-speed="1500">50</span><span>+</span></h2>
                                    <p>Certified Trainer</p>
                                </div>
                            </div>
                        </div>
                        <div class="count-item">
                            <div class="count-inner">
                                <div class="count-icon">
                                    <i class="icofont-notification"></i>
                                </div>
                                <div class="count-content">
                                    <h2><span class="count" data-to="350" data-speed="1500">350</span><span>+</span></h2>
                                    <p>Professional Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-content">
                            <span class="subtitle">Why Choose Us</span>
                            <h2 class="title">Become Online Instructor</h2>
                            <p>Take courses on your any device with our app & learn all time what you want. Just download & install & start to learn</p>
                            <a href="#" class="lab-btn"><span>Apply  Now</span></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-thumb">
                            <img src="assets/images/instructor/01.png" alt="education">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructors Section Ending Here -->


    <!-- App Section Start Here -->
    <div class="app-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <a href="#" class="lab-btn mb-4"><span>Sign up for Free</span></a>
                <h2 class="title">Learn Anytime, Anywhere</h2>
                <p>Take courses on your any device with our app & learn all time what you want. Just download & install & start to learn</p>
            </div>
            <div class="section-wrapper">
                <ul class="lab-ul">
                    <li><a href="#"><img src="assets/images/app/01.jpg" alt="education"></a></li>
                    <li><a href="#"><img src="assets/images/app/02.jpg" alt="education"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- App Section Ending Here -->


    <!-- sponsor section start here -->
    <div class="sponsor-section section-bg-ash">
        <div class="container">
            <div class="section-wrapper">
                <div class="sponsor-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/01.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/02.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/03.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/04.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/05.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-iten">
                                <div class="sponsor-thumb">
                                    <img src="assets/images/sponsor/06.png" alt="sponsor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sponsor section ending here -->

    @endsection
    