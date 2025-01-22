@extends('frontend.master')

@section('title', 'Home - Edukon')

@section('content')
    <!-- banner section start here -->
    <section class="banner-section style-6">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="banner-content text-center"> 
                            <h4 class="subtitle">Let’s Start</h4>
                            <h2 class="title">Driving Career</h2>
                            <p class="desc">Drive Your Car with Hapyness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section ending here -->


    <!-- Feature Section Start Here -->
    <section class="feature-section style-3 padding-tb">
        <div class="feature-shape one"><img src="assets/images/shape-img/icon/03.png" alt="education"></div>
        <div class="feature-shape two"><img src="assets/images/shape-img/09.png" alt="education"></div>
        <div class="container">
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="feature-items">
                            <div class="row g-4 row-cols-sm-2 row-cols-1">
                                <div class="col">
                                    <div class="feature-item">
                                        <div class="feature-inner text-center">
                                            <div class="feature-thumb">
                                                <img src="assets/images/feature/07.png" alt="feature">
                                            </div>
                                            <div class="feature-content">
                                                <h4>Learner Drivers</h4>
                                                <p>Dramatic myocardinate high quality through transparents.</p>
                                                <a href="#" class="lab-btn-text">View More <span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="feature-item">
                                        <div class="feature-inner text-center">
                                            <div class="feature-thumb">
                                                <img src="assets/images/feature/08.png" alt="feature">
                                            </div>
                                            <div class="feature-content">
                                                <h4>Get Driving License</h4>
                                                <p>Dramatic myocardinate high quality through transparents.</p>
                                                <a href="#" class="lab-btn-text">View More <span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="feature-item">
                                        <div class="feature-inner text-center">
                                            <div class="feature-thumb">
                                                <img src="assets/images/feature/09.png" alt="feature">
                                            </div>
                                            <div class="feature-content">
                                                <h4>Comfort Vehicles</h4>
                                                <p>Dramatic myocardinate high quality through transparents.</p>
                                                <a href="#" class="lab-btn-text">View More <span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="feature-item">
                                        <div class="feature-inner text-center">
                                            <div class="feature-thumb">
                                                <img src="assets/images/feature/08.png" alt="feature">
                                            </div>
                                            <div class="feature-content">
                                                <h4>Unlimited Car Support</h4>
                                                <p>Dramatic myocardinate high quality through transparents.</p>
                                                <a href="#" class="lab-btn-text">View More <span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="feature-register">
                            <h3>Find Your Course</h3>
                            <form>
                                <input type="text" name="name" placeholder="Your Name" class="reg-input">
                                <input type="email" name="email" placeholder="Your Email" class="reg-input">
                                <input type="text" name="phone" placeholder="Your Phone" class="reg-input">
                                <select class="reg-input">
                                    <option>Beginner</option>
                                    <option>Intermidiate</option>
                                    <option>Advance</option>
                                </select>
                                <select class="reg-input">
                                    <option>Car</option>
                                    <option>Motor Cycle</option>
                                    <option>Track</option>
                                </select>
                                <input type="text" name="date" placeholder="Date" class="reg-input">
                                <input type="text" name="time" placeholder="Time" class="reg-input">
                                <button class="lab-btn" type="submit"><span>Register Now</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature section Ending here -->


    <!-- Choose Section Start Here -->
    <div class="choose-section padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="section-header">
                        <span class="subtitle yellow-color">Smart & Relaxing Career</span>
                        <h2 class="title">Why You Should Start Driving</h2>
                        <p>Proactively enhance prospective resources for next generation convergence. Dramatically myocardinate high-quality vortals through transparent.</p>
                        <ul class="lab-ul">
                            <li><i class="icofont-circled-right"></i>Smart & Relaxing Career</li>
                            <li><i class="icofont-circled-right"></i>No Required Higher Education</li>
                            <li><i class="icofont-circled-right"></i>WorldWide Working Opportunity</li>
                            <li><i class="icofont-circled-right"></i>Lots of Working Opportunity</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="section-wrapper">
                        <div class="choose-thumb">
                            <img src="assets/images/choose/01.png" alt="education">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Section Ending Here -->


    <!-- Event Section Start Here -->
    <div class="event-section style-2 padding-tb section-bg-ash">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle yellow-color">Don’t Miss the Day</span>
                <h2 class="title">Upcomming Events</h2>
            </div>
            <div class="section-wrapper">
                <div class="event-navi-item event-slider-next"><i class="icofont-rounded-double-right"></i></div>
                <div class="event-navi-item event-slider-prev"><i class="icofont-rounded-double-left"></i></div>
                <div class="event-sliders overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="event-item style-2">
                                <div class="event-inner">
                                    <div class="event-thumb">
                                        <img src="assets/images/event/02.jpg" alt="education">
                                    </div>
                                    <div class="event-content">
                                        <h5>Private Car</h5>
                                        <h2>$329.00</h2>
                                        <span>4 Weeks</span>
                                        <ul class="lab-ul">
                                            <li>Driving License</li>
                                            <li>15 Classroom Lessons</li>
                                            <li>10 In-Car Lessons</li>
                                            <li>Medical Service</li>
                                            <li>FREE final exam</li>
                                            <li>With MTO Certification</li>
                                        </ul>
                                        <a href="#" class="lab-btn"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="event-item style-2">
                                <div class="event-inner">
                                    <div class="event-thumb">
                                        <img src="assets/images/event/03.jpg" alt="education">
                                    </div>
                                    <div class="event-content">
                                        <h5>Private Car</h5>
                                        <h2>$329.00</h2>
                                        <span>4 Weeks</span>
                                        <ul class="lab-ul">
                                            <li>Driving License</li>
                                            <li>15 Classroom Lessons</li>
                                            <li>10 In-Car Lessons</li>
                                            <li>Medical Service</li>
                                            <li>FREE final exam</li>
                                            <li>With MTO Certification</li>
                                        </ul>
                                        <a href="#" class="lab-btn"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="event-item style-2">
                                <div class="event-inner">
                                    <div class="event-thumb">
                                        <img src="assets/images/event/04.jpg" alt="education">
                                    </div>
                                    <div class="event-content">
                                        <h5>Private Car</h5>
                                        <h2>$329.00</h2>
                                        <span>4 Weeks</span>
                                        <ul class="lab-ul">
                                            <li>Driving License</li>
                                            <li>15 Classroom Lessons</li>
                                            <li>10 In-Car Lessons</li>
                                            <li>Medical Service</li>
                                            <li>FREE final exam</li>
                                            <li>With MTO Certification</li>
                                        </ul>
                                        <a href="#" class="lab-btn"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="event-item style-2">
                                <div class="event-inner">
                                    <div class="event-thumb">
                                        <img src="assets/images/event/05.jpg" alt="education">
                                    </div>
                                    <div class="event-content">
                                        <h5>Private Car</h5>
                                        <h2>$329.00</h2>
                                        <span>4 Weeks</span>
                                        <ul class="lab-ul">
                                            <li>Driving License</li>
                                            <li>15 Classroom Lessons</li>
                                            <li>10 In-Car Lessons</li>
                                            <li>Medical Service</li>
                                            <li>FREE final exam</li>
                                            <li>With MTO Certification</li>
                                        </ul>
                                        <a href="#" class="lab-btn"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Section Ending Here -->


    <!-- Video Section Ending Here -->
    <div class="video-section padding-tb">
        <div class="container">
            <div class="section-wrapper text-center">
                <h3>It’s High Time to Start Driving Career</h3>
                <div class="video-thumb">
                    <a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" class="video-button " data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Section Ending Here -->



    <!-- Clients Section Start Here -->
    <div class="clients-section style-3 padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle yellow-color">Testimonials</span>
                <h2 class="title">What People Say</h2>
                <h2 class="abs-title">Testimonials</h2>
            </div>
            <div class="section-wrapper">
                <div class="clients-slider2 overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="client-item">
                                <div class="client-inner">
                                    <div class="client-thumb">
                                        <img src="assets/images/clients/01.jpg" alt="education">
                                        <div class="quote">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                    </div>
                                    <div class="client-content">
                                        <p>Dynamically impact tactical methods of empowerment through ubiquitous methodologies. Global utilize robust services without integrated process improvements. Completely leverage existing niche markets via exceptional leadership skills.</p>
                                        <div class="client-info">
                                            <h6 class="client-name">Laurie R. Gallegos</h6>
                                            <span class="client-degi">Assistant principal</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-item">
                                <div class="client-inner">
                                    <div class="client-thumb">
                                        <img src="assets/images/clients/02.jpg" alt="education">
                                        <div class="quote">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                    </div>
                                    <div class="client-content">
                                        <p>Dynamically impact tactical methods of empowerment through ubiquitous methodologies. Global utilize robust services without integrated process improvements. Completely leverage existing niche markets via exceptional leadership skills.</p>
                                        <div class="client-info">
                                            <h6 class="client-name">Anthony McGuffog</h6>
                                            <span class="client-degi">Payroll bookkeeper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-item">
                                <div class="client-inner">
                                    <div class="client-thumb">
                                        <img src="assets/images/clients/03.jpg" alt="education">
                                        <div class="quote">
                                            <i class="icofont-quote-left"></i>
                                        </div>
                                    </div>
                                    <div class="client-content">
                                        <p>Dynamically impact tactical methods of empowerment through ubiquitous methodologies. Global utilize robust services without integrated process improvements. Completely leverage existing niche markets via exceptional leadership skills.</p>
                                        <div class="client-info">
                                            <h6 class="client-name">Isabel Blaubaum</h6>
                                            <span class="client-degi">College instructor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clients-slider-nav clients-slider2-next"><i class="icofont-double-left"></i></div>
                    <div class="clients-slider-nav clients-slider2-prev"><i class="icofont-double-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients Section Ending Here -->

    <!-- contact info section start here -->
    <div class="contact-info-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="title">Need Any <span>Help?</span></h2>
                <p>You can contact with us for anykinds of informations and help. We are ready to help you.</p>
            </div>
            <div class="section-wrapper">
                <div class="cinfo-or"><span>Or</span></div>
                <div class="cinfo-item">
                    <div class="cinfo-inner">
                        <div class="cinfo-thumb">
                            <img src="assets/images/contact/icon/01.png" alt="education">
                        </div>
                        <div class="cinfo-content">
                            <h6>Make a Call:</h6>
                            <h4>+880 1234 567890</h4>
                        </div>
                    </div>
                </div>
                <div class="cinfo-item">
                    <div class="cinfo-inner">
                        <div class="cinfo-thumb">
                            <img src="assets/images/contact/icon/02.png" alt="education">
                        </div>
                        <div class="cinfo-content">
                            <h6>Send Us Messege at:</h6>
                            <h4>contact@yourmail.com</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info section ending here -->



    @endsection