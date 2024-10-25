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
        <title>Doctors</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!-- Responsive -->
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
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Add Navbar Items here if needed -->
                    </div>
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
        </div>
        <!-- header section end -->

        <!-- doctors section start -->
        <div class="doctors_section margim_90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="doctors_taital">Our Doctors</h1>
                    </div>
                </div>
                <div class="doctors_section_2">
                    <div id="my_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="doctors_box">
                                            <div class="image_1"><img src="{{ asset('images/doctor1.jpeg') }}"></div>
                                            <h4 class="humour_text">Dr Waqas Khan<br><span class="mbbs_text">Cardiologist at Lancashire</span></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="doctors_box">
                                            <div class="image_1"><img src="{{ asset('images/doctor2.jpeg') }}"></div>
                                            <h4 class="humour_text">Dr. Leonardo Petrus<br><span class="mbbs_text">Specialist at Cardiac</span></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="doctors_box">
                                            <div class="image_1"><img src="{{ asset('images/doctor3.jpeg') }}"></div>
                                            <h4 class="humour_text">Dr. Kautsarrahman<br><span class="mbbs_text">Dokter Umum</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- More carousel items as needed -->
                        </div>
                        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- doctors section end -->

        <!-- footer section start -->
        <div class="footer_section">
            <div class="container">
                <div class="input_bt">
                    <input type="text" class="mail_bt" placeholder="Enter Your Email">
                    <span class="subscribe_bt"><a href="#">Subscribe</a></span>
                </div>
                <div class="footer_section_2">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <h3 class="footer_taital">Address</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="padding_15">Making this the first true</span></a></li>
                                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <span class="padding_15">Call: +01 1234567890</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span class="padding_15">Email: demo@gmail.com</span></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <h3 class="footer_taital">Useful Link</h3>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About</a></li>
                                <li class="active"><a href="{{ url('/doctors') }}">Doctors</a></li>
                                <li><a href="{{ url('/news') }}">News</a></li>
                                <li><a href="{{ url('/treatment') }}">Treatment</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <h3 class="footer_taital">Help & Support</h3>
                            <p class="ipsum_text">Opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <h3 class="footer_taital">News</h3>
                            <div class="dryfood_text"><img src="{{ asset('images/img-4.png') }}"><span class="padding_15">Normal distribution</span></div>
                            <div class="dryfood_text"><img src="{{ asset('images/img-5.png') }}"><span class="padding_15">Normal distribution</span></div>
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
