<!-- header section start here -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
        .auth-buttons {
            margin-left: auto; /* Move buttons to the right */
        }
        .login,
        .signup {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            border: 1px solidrgb(248, 205, 188); /* Border color */
            border-radius: 0px; /* Rounded corners */
            color: white; /* Text color */
            background-color:rgb(254, 108, 18); /* Button background */
            transition: all 0.3s ease; /* Smooth hover effect */
        }
        .login{
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            border: 1px solidrgb(248, 205, 188); /* Border color */
            border-radius: 25px; /* Rounded corners */
            color: rgb(254, 108, 18); /* Text color */
            background-color: #f9f9f9; /* Button background */
            transition: all 0.3s ease; /* Smooth hover effect */
        }
        .signup {
            border:rgb(254, 108, 18);;
            background-color:rgb(254, 108, 18);;
        }
        .login:hover,
        .signup:hover {
            background-color: transparent; /* Transparent on hover */
            color: #000; /* Change text color on hover */
        }
        .signup:hover {
            border-color:rgb(254, 108, 18);
        }
        .header-top {
            background-color: #f9f9f9;
            padding: 0px 0;
        }

        /* General Menu Styling */
        .menu {
            display: flex; /* Use flexbox for alignment */
            justify-content: flex-end; /* Align items to the right */
        }
        .menu ul {
            list-style: none; /* Remove bullets */
            margin: 0;
            padding: 0;
            display: flex; /* Align items in a row */
        }
        .menu ul :hover {
            color: rgb(254, 108, 18);; /* Change text color on hover */
        }
        .menu ul li {
            position: relative; /* For dropdown positioning */
            margin-left: 20px; /* Add spacing between menu items */
        }
        .menu ul li a {
            text-decoration: none; /* Remove underline */
            padding: 10px 15px; /* Add padding for clickable area */
            display: inline-block;
            color: #333; /* Menu text color */
            font-weight: bold;
        }
        .menu ul li a:hover {
            color: rgb(254, 108, 18);; /* Change text color on hover */
        }
        .menu ul li ul {
            position: absolute; /* Position dropdown below parent */
            top: 100%;
            left: 0;
            background: #f9f9f9; /* Dropdown background */
            border: 1px solid #ddd; /* Border for dropdown */
            display: none; /* Initially hide dropdown */
            padding: 10px 0;
            z-index: 1000;
        }
        .menu ul li:hover ul {
            display: block; /* Show dropdown on hover */
        }
        .menu ul li ul li {
            margin: 0; /* Remove spacing for dropdown items */
        }
        .menu ul li ul li a {
            padding: 8px 20px; /* Adjust padding for dropdown items */
            display: block; /* Full-width links for dropdown */
            color: #000;
        }
        .menu ul li ul li a:hover {
            background:rgb(23, 20, 90); /* Highlight background on hover */
            color: #fff; /* Text color on hover */
        }
        .menu-area ul.lab-ul > li > a:hover {
            transform: scale(1.2); 
            color: #f9f9f9; 
        }
        .menu ul > a:hover {
            transform: scale(1.2); 
            color:rgb(200, 81, 30); 
        }
        
        .menu ul li::before {
            content: ""; /* "+" එක ඉවත් කර ඇත */
        }

        .header-bottom .menu-area .menu ul li a::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -5px; /* Adjust spacing below text */
            width: 0%;
            height: 2px;
            background-color: #ffcc00; /* Underline color */
            transition: all 0.3s ease-in-out;
            transform: translateX(-50%);
        }

    </style>

    <header class="header-section">

        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="lab-ul left">
                        <li>
                            <i class="fa fa-envelope"></i> <span>info@impwis.com</span>
                        </li>
                        <li>
                            <i class="icofont-ui-call"></i> <span>+94766888184</span>
                        </li>
                    </ul>
                    <ul class="lab-ul social-icons d-flex align-items-center">      
                        <li></li>              
                        <li><a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                        <li><a href="#" class="skype"><i class="icofont-skype"></i></a></li>
                        <li><a href="#" class="rss"><i class="icofont-rss-feed"></i></a></li>
                    </ul>


                    <ul class="lab-ul right">
                        <a href="login.html" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                        <a href="signup.html" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>
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
                        <div class="menu" >
                            <ul class="lab-ul right">
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
                                <a href="{{ route('frontend.about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="#0">Study Abroad</a>
                            </li>
                            <li>
                                <a href="#0">Pay Online</a>
                            </li>
                           <!-- <li>
                                <a href="#0">Courses</a>
                                <ul class="lab-ul">
                                    <li><a href="{{ route('frontend.Course') }}">Course</a></li>
                                    <li><a href="{{ route('frontend.Course_Details') }}">Course Details</a></li>
                                </ul>
                            </li> -->
                            <li>
                            <li class="{{ Request::is('blog*') ? 'active' : '' }}">
                                <a href="#0" class="curved">Blogs</a>
                                <ul class="lab-ul">
                                    <li class="{{ Request::is('blog*') ? 'active' : '' }}"><a href="{{ route('frontend.blog') }}"  class="curved">Blog</a></li>
                                    <li><a href="{{ route('frontend.blog_style2') }}">Blog Style 2</a></li>
                                    <li><a href="{{ route('frontend.blog_style3') }}">Blog Style 3</a></li>
                                    <li><a href="{{ route('frontend.blog_single') }}">Blog Single</a></li>
                                </ul>
                            </li>
                            <li>
                            <!--    <a href="#0">Pages</a>
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
                            </li> -->
                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <!--<a href="{{ route('frontend.login') }}" class="login"><i class="icofont-user"></i> <span>LOG IN</span></a>
                    <a href="{{ route('frontend.signup') }}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span></a> -->

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


