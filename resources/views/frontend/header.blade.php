<!-- header section start here --> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    .header-top {
    background-color: #003366; 
    color: #fff; 
    padding: 10px 0; 
}
.header-top a {
    color: #FFD700; 
    font-size: 14px; 
    font-weight: bold; 
}
.header-top a:hover {
    color: #ff6600; 
    text-decoration: underline; 
}
.menu ul li a {
    color:rgb(3, 3, 3);
    font-size: 15px; 
    font-weight: bold; 
    padding: 8px 15px; 
    transition: all 0.3s ease;
}
.menu ul li ul li a:hover {
    color:rgb(255, 255, 255); 
    background-color: transparent; 
    border-bottom: 2px solid #FFD700; 
}
.signup {
    background-color: #ff6600;
    border: 1px solid #cc5200; 
    color: #fff; 
    font-size: 14px; 
    padding: 8px 20px; 
    border-radius: 20px; 
    text-transform: uppercase;
}
.signup:hover {
    background-color: #cc5200;
    color: #FFFFFF; 
}
.login {
    background-color: transparent; 
    border: 1px solid #FFD700; 
    color: #FFD700; 
    font-size: 14px;
    padding: 8px 20px; 
    border-radius: 20px; 
    text-transform: uppercase; 
}
.login:hover {
    background-color: #FFD700; 
    color: #003366; 
}
        .auth-buttons {
            margin-left: auto; 
        }

        .login,
        .signup {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 25px; 
            color: white; 
            background-color:rgb(237, 53, 50); 
            transition: all 0.3s ease; 
        }
        .login{
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            border: 1px solidrgb(248, 205, 188); 
            border-radius: 25px; 
            color: rgb(237, 53, 50); 
            background-color:rgb(27, 41, 84);
            transition: all 0.3s ease; 
        }
        .signup {
            border:rgb(254, 108, 18);
            background-color: rgb(237, 128, 30);;
        }
        .i:hover,
        .login:hover,
        .signup:hover {
            background-color: transparent; 
            color: #000; 
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
            display: flex; 
            justify-content: flex-end;
        }
        .menu ul {
            list-style: none; 
            margin: 0;
            padding: 0;
            display: flex;
        }
        .menu ul :hover {
            color:rgb(237, 53, 50); 
        }
        .menu ul li {
            position: relative; 
            margin-left: 20px; 
        }
        .menu ul li a {
            text-decoration: none; 
            padding: 10px 15px; 
            display: inline-block;
            color: #333; 
            font-weight: bold;
        }
        .menu ul li a:hover {
            color: rgb(237, 53, 50); 
        }
        .menu ul li ul {
            position: absolute; 
            top: 100%;
            left: 0;
            background: #f9f9f9; 
            border: 1px solid #ddd; 
            display: none; 
            padding: 10px 0;
            z-index: 1000;
        }
        .menu ul li:hover ul {
            display: block; 
        }
        .menu ul li ul li {
            margin: 0; 
        }
        .menu ul li ul li a {
            padding: 8px 20px; 
            display: block;
            color: #000;
        }
        .menu ul li ul li a:hover {
            background:rgb(7, 29, 77); 
            color: rgb(255, 255, 255); 
        }
        .menu-area ul li a:hover {
            transform: scale(1.2); 
            color:rgb(0, 0, 0); 
        }
        .menu ul > a:hover {
            transform: scale(1.2); 
            color:rgb(50, 184, 237); 
        }
        .menu ul li::before {
        content: ""; 
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
        i {
           color:rgb(237, 128, 30) !important;
        }   
        i :hover {
            transform: scale(1.2); 
            color:rgb(200, 81, 30); 
        }
    .header-top {
    background-color: rgb(27, 41, 84) ; 
    color: white; 
}
.header-top a {
    color: white; 
}
.header-top a:hover {
    color: #FFD700; 
}
.menu-reduce-btn {
    text-align: right; 
    margin-top: 10px; 
}
.reduce-btn {
    background-color: #f00; 
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}
.reduce-btn:hover {
    background-color: #c00; 
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
                        <li><a href="#" class="fb"><i1 class="icofont-facebook-messenger"></i></a></li>
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
                        <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"  style="width:250px; height:auto"></a>
                    </div> 
                    <div class="menu-area">
                        <div class="menu" >
                            <ul class="lab-ul right">
                                <li>
                                    <a href="{{ route('frontend.home') }}">Home</a>
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
                                    <a href="">About Us</a>
                                    
                                </li>
                                <li>
                                    <a href="{{ route('frontend.study') }}">Study Abroad</a>
                                    <ul class="lab-ul">
                                        <li><a href="#0">Transfer Pathway</a>
                                        <ul class="lab-ul">
                                            <li><a href="">Australia</a></li>
                                            <li><a href="">UK</a></li>
                                        </ul></li>
                                        </li>
                                        <li><a href="#0">Direct Placement</a>
                                        <ul class="lab-ul">
                                            <li><a href="">Australia</a></li>
                                            <li><a href="">UK</a></li>
                                        </ul></li>
                                        <li><a href="#0">UAE</a></li>
                                    </ul>
                                    
                                </li>
                                <li><a href="#0">Pay Online</a>
                                    <ul class="lab-ul">
                                        <li><a href="" >International Student</a></li>
                                        <li><a href="" >Local Student</a></li>
                                   </ul>

                                </li>        
                                    

                                <li><a href="#0">Blogs</a></li>
                                   
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>

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


    