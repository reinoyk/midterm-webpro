<!DOCTYPE html>
<html>
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Aeon Medical Center</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- header top section start -->
    <div class="header_top_section">
        <div class="header_top_container">
            <div class="header_top_main">
                <div class="call_text">
                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call: +62 83478293023</a>
                </div>
                <div class="call_text_2">
                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> aeonmed@gmail.com</a>
                </div>
            </div>
            <div class="header_top_right">
                <!-- Login button -->
                <a href="{{ route('login') }}" class="btn btn-primary">
                    <i class="fa fa-user" aria-hidden="true"></i> <span class="signup_text">Login</span>
                </a>
                <!-- Register button -->
                <a href="{{ route('register') }}" class="btn btn-secondary">
                    <i class="fa fa-user" aria-hidden="true"></i> <span class="signup_text">Register</span>
                </a>
            </div>
        </div>
    </div>
    <!-- header top section end -->

    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="logo-text">Aeon Medical Center</div>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            </nav>
            <div class="custom_bg">
                <div class="custom_menu">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/treatment') }}">Treatment</a></li>
                        <li><a href="{{ url('/doctors') }}">Doctors</a></li>
                        <li><a href="{{ url('/appointment') }}">Appointment</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="banner_taital">We care Of You</h1>
                        <p class="banner_text">At Aeon Medical Center, we combine expert care with cutting-edge technology to ensure you receive the personalized treatment you deserve for a healthier tomorrow</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->

    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="testimonial_taital">Our Testimonial</h1>
                </div>
            </div>
            <div class="customer_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box_main">
                            <div id="main_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="customer_main">
                                            <div class="customer_right">
                                                <h3 class="customer_name">Irgy Ardian <span class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></span></h3>
                                                <p class="default_text">Dear Aeon,</p>
                                                <p class="enim_text">I had an exceptional experience at Aeon Medical Center. The facility was modern, clean, and equipped with the latest technology. I truly felt like I was in good hands, and my recovery was smooth thanks to their outstanding medical attention.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- More testimonials -->
                                </div>
                                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->

    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container-fluid">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="contact_taital">Get In Touch</h1>
                        <form action="">
                            <div class="mail_section_1">
                                <input type="text" class="mail_text" placeholder="Name" name="Name">
                                <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                                <input type="text" class="mail_text" placeholder="Email" name="Email">
                                <textarea class="massage-bt" placeholder="Description" rows="5" id="comment" name="Description"></textarea>
                                <div class="send_bt"><a href="#">SEND</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 padding_left_15">
                        <div class="map_main">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=Eiffel+Tower+Paris+France" width="600" height="600" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

    <!-- footer section start -->
    <div class="footer_section">
        <div class="container">
            <div class="input_bt">
                <input type="text" class="mail_bt" placeholder="Enter Your Email" name="Enter your email">
                <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Address</h3>
                        <div class="location_main">
                            <ul>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_15">Making this the first true</span></a></li>
                                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_15">Call : +62 83478293023</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_15">Email : aeon@gmail.com</span></a></li>
                            </ul>
                        </div>
                        <div class="footer_social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Help & Support</h3>
                        <p class="ipsum_text">Our dedicated team is here to assist you with any questions or concerns. Feel free to reach out. We're here to support you every step of the way.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Our Services</h3>
                        <ul class="footer_menu">
                            <li>Comprehensive Checkups</li>
                            <li>Specialist Consultations</li>
                            <li>Diagnostic Services</li>
                            <li>Emergency Care</li>
                            <li>Inpatient & Outpatient Care</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Opening Hours</h3>
                        <ul class="footer_menu">
                            <li>Monday - Friday: 8:00 AM - 8:00 PM</li>
                            <li>Saturday: 9:00 AM - 5:00 PM</li>
                            <li>Sunday: Closed</li>
                            <li>24/7 Emergency Service Available</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->

    <!-- Javascript files -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>
    <script>
        $('#timepicker').timepicker({
            uiLibrary: 'bootstrap'
        });
    </script>
</body>
</html>
