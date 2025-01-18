<!-- header section start here -->
<!--<header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> Beverley, New York 224 USA
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">
                        <li><p>Find us on : </p></li>
                        <li><a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                        <li><a href="#" class="skype"><i class="icofont-skype"></i></a></li>
                        <li><a href="#" class="rss"><i class="icofont-rss-feed"></i></a></li>
                    </ul>
                </div> 
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="logo"
                         style="width:250px; height:auto"></a>
                    </div> 
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="lab-ul">
                                <li>
                                    <a href="#0">Home</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{route('frontend.home')}}" class="active">Home One</a></li>
                                        <li><a href="{{route('frontend.Home_Two')}}">Home Two</a></li>
                                        <li><a href="{{route('frontend.Home_Three')}}">Home Three</a></li>
                                        <li><a href="{{route('frontend.Home_Four')}}">Home Four</a></li>
                                        <li><a href="{{route('frontend.Home_Five')}}">Home Five</a></li>
                                        <li><a href="{{route('frontend.Home_Six')}}">Home Six</a></li>
                                        <li><a href="{{route('frontend.Home_Seven')}}">Home Seven</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#0">Courses</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{route('frontend.Course')}}">Course</a></li>
                                        <li><a href="{{route('frontend.Course_Details')}}">Course Details</a></li>
    
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Blog</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{route('frontend.blog')}}">Blog Grid</a></li>
                                        <li><a href="{{route('frontend.blog_style2')}}">Blog Style 2</a></li>
                                        <li><a href="{{route('frontend.blog_style3')}}">Blog Style 3</a></li>
                                        <li><a href="{{route('frontend.blog_single')}}">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#0">Pages</a>
                                    <ul class="lab-ul">
                                        <li><a href="{{route('frontend.about')}}">About</a></li>
                                        <li><a href="{{route('frontend.team')}}">Team</a></li>
                                        <li><a href="{{route('frontend.instructor')}}">Instructor</a></li>
                                        <li>
                                            <a href="#0">Shop Pages</a>
                                            <ul class="lab-ul">
                                                <li><a href="{{route('frontend.shop')}}">Shop Page</a></li>
                                                <li><a href="{{route('frontend.shop_single')}}">Shop Details Page</a></li>
                                                <li><a href="{{route('frontend.cart_page')}}">Shop Cart Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('frontend.search_page')}}">Search Page</a></li>
                                        <li><a href="{{route('frontend.search_none')}}">Search None</a></li>
                                        <li><a href="{{route('frontend.404')}}">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                            </ul>
                        </div>
                        
                        <a href="{{route('frontend.login')}}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                        <a href="{{route('frontend.signup')}}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>

                         toggle icons -->
                       <!-- <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
     header section ending here -->
<!-- header section start here -->


<!-- header section start here -->
<header class="header-section">
    <style>
        
        .menu ul li ul li a:hover{
            background:rgb(23,20,90);
            color:#fff;
        }
        .menu-area ul.lab-ul>li>a:hover{
            transform:scale(1.2);
            color:#f9f9f9;
        }
        .header-bottom .menu-area .menu ul li a {
            color:rgb(0, 0, 0); 
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
            position: relative;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;

             
        }

        .header-bottom .menu-area .menu ul li ul li a:hover {
            color:rgb(255, 255, 255); 
        }

        .header-bottom .menu-area .menu ul li a::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -5px;
            width: 0%;
            height: 2px;
            background-color: #ffcc00; 
            transition: all 0.3s ease-in-out;
            transform: translateX(-50%);
        }

        .header-bottom .menu-area .menu ul li a:hover::after {
            width: 100%;
            background-color:rgb(255, 145, 0);
            

        }

        .header-bottom .menu-area .menu ul li a.active {
            color:rgb(255, 255, 255);
            font-weight: bold;
        }

    </style>

    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="lab-ul left">
                    <li>
                        <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                    </li>
                    <li>
                        <i class="icofont-location-pin"></i> Beverley, New York 224 USA
                    </li>
                </ul>
                <ul class="lab-ul social-icons d-flex align-items-center">
                    <li><p>Find us on : </p></li>
                    <li><a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a></li>
                    <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                    <li><a href="#" class="skype"><i class="icofont-skype"></i></a></li>
                    <li><a href="#" class="rss"><i class="icofont-rss-feed"></i></a></li>
                </ul>
            </div> 
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"
                    style="width:250px; height:auto"></a>
                </div> 
                <div class="menu-area">
                    <div class="menu">
                        <ul class="lab-ul">
                            <li>
                                <a href="#0">Home</a>
                                <ul class="lab-ul">
                                    <li><a href="{{ route('frontend.home') }}">Home One</a></li>
                                    <li><a href="{{ route('frontend.Home_Two') }}">Home Two</a></li>
                                    <li><a href="{{ route('frontend.Home_Three') }}">Home Three</a></li>
                                    <li><a href="{{ route('frontend.Home_Four') }}">Home Four</a></li>
                                    <li><a href="{{ route('frontend.Home_Five') }}">Home Five</a></li>
                                    <li><a href="{{ route('frontend.Home_Six') }}">Home Six</a></li>
                                    <li><a href="{{ route('frontend.Home_Seven') }}">Home Seven</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Courses</a>
                                <ul class="lab-ul">
                                    <li><a href="{{ route('frontend.Course') }}">Course</a></li>
                                    <li><a href="{{ route('frontend.Course_Details') }}">Course Details</a></li>
                                </ul>
                            </li>
                            <li>
                            <li class="{{ Request::is('blog*') ? 'active' : '' }}">
                                <a href="#0" class="curved">Blog</a>
                                <ul class="lab-ul">
                                    <li class="{{ Request::is('blog*') ? 'active' : '' }}"><a href="{{ route('frontend.blog') }}"  class="curved">Blog Grid</a></li>
                                    <li><a href="{{ route('frontend.blog_style2') }}">Blog Style 2</a></li>
                                    <li><a href="{{ route('frontend.blog_style3') }}">Blog Style 3</a></li>
                                    <li><a href="{{ route('frontend.blog_single') }}">Blog Single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul class="lab-ul">
                                    <li><a href="{{ route('frontend.about') }}">About</a></li>
                                    <li><a href="{{ route('frontend.team') }}">Team</a></li>
                                    <li><a href="{{ route('frontend.instructor') }}">Instructor</a></li>
                                    <li>
                                        <a href="#0">Shop Pages</a>
                                        <ul class="lab-ul">
                                            <li><a href="{{ route('frontend.shop') }}">Shop Page</a></li>
                                            <li><a href="{{ route('frontend.shop_single') }}">Shop Details Page</a></li>
                                            <li><a href="{{ route('frontend.cart_page') }}">Shop Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('frontend.search_page') }}">Search Page</a></li>
                                    <li><a href="{{ route('frontend.search_none') }}">Search None</a></li>
                                    <li><a href="{{ route('frontend.404') }}">404</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('frontend.login') }}" class="login"><i class="icofont-user"></i> <span>LOG IN</span></a>
                    <a href="{{ route('frontend.signup') }}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span></a>

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="icofont-info-square"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header section ending here -->


