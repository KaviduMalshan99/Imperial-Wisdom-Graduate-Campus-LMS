<!-- header section start here --> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>

a {
    text-decoration: none !important;
}
    .header-top a {

}
.header-top a:hover {
    color: #ffa600; 
    text-decoration: underline; 
}
.signup {
    background-color: #ffa600;
    border: 1px solid #ffa600; 
    color: #003366 !important; 
    font-size: 14px; 
    padding: 8px 20px; 
    border-radius: 20px; 
    text-transform: uppercase;
}
.signup:hover {
    background-color:rgb(4, 40, 75);
    color: #ffa600 !important;  
    border: 1px solid #ffa600; 
}
.login {
    background-color: transparent; 
    border: 1px solid #ffa600; 
    color: #ffa600; 
    font-size: 14px;
    padding: 8px 20px; 
    border-radius: 20px; 
    text-transform: uppercase; 
}
.login:hover {
    background-color: #ffa600; 
    color: #003366 !important; 
}
.lab-ul li i{
    color: #ffa600 !important; 
}
</style>


    <header class="header-section">
        <div class="header-top" style=" background-color:rgb(4, 40, 75); 
    color: #fff; ">
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
                        <li><p></p></li>
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
                        <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"  style="width:250px; height:auto"></a>
                    </div> 
                    <div class="menu-area">
                        <div class="menu"  >
                            <ul class="lab-ul right" >
                                <li>

                                    <a href="{{ route('frontend.home') }}">Home</a>
                                   <!-- <ul class="lab-ul">
                                    <li><a href="{{ route('frontend.home') }}">Home One</a></li>
                                    <li><a href="{{ route('frontend.Home_Two') }}">Home Two</a></li>
                                    <li><a href="{{ route('frontend.Home_Three') }}">Home Three</a></li>
                                    <li><a href="{{ route('frontend.Home_Four') }}">Home Four</a></li>
                                    <li><a href="{{ route('frontend.Home_Five') }}">Home Five</a></li>
                                    <li><a href="{{ route('frontend.Home_Six') }}">Home Six</a></li>
                                    <li><a href="{{ route('frontend.Home_Seven') }}">Home Seven</a></li>
                                </ul>-->

                                    
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
                                    


                                <li><a href="{{ route('frontend.blog') }}">Blogs</a></li>
                                   
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


    