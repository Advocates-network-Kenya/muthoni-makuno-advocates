<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Search Engine Indexing -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="MMK Advocates LLP">
    <link rel="canonical" href="https://www.mmklaw.advocates.or.ke/">
    <meta
        content="MMK Advocates LLP, Law Firm, Thika, Kenya, Legal Services, Civil Law, Family Law, Business Law, Education Law, Immigration Law,muthoni makuno,thika section 9 ,"
        name="keywords">
    <meta
        content=" MMK Advocates LLP is a dynamic law firm in Thika, Kenya, delivering expert, timely, and client-focused legal services to corporations, NGOs, and individuals. "
        name="description">


    <!-- Favicon are in public folder -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" sizes="any">

    <!-- PNG Favicons for Modern Browsers -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <meta name="theme-color" content="#880422">
    <meta name="msapplication-navbutton-color" content="#880422">
   
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">


    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('theme/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
    {{-- css overwrite --}}
    {{-- button --}}
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #a2cbf5;
        }

        .cta-button {
            display: inline-block;
            background-color: #880422;
            color: #ffffff;
            padding: 14px 28px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background-color: #fb3000;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
        }

        .top-bar {
            background: #880422 !important;
        }

        .top-bar .text h2,
        .top-bar .text p,
        .top-bar .social a i {
            color: #ffffff !important;
        }



        .footer {
            background: #880422 !important;
        }

        .footer .footer-contact p i {
            display: inline-block;
            color: #ffbd59;
            margin-right: 10px;
            width: 25px;
            text-align: center;
        }

        .footer .footer-social {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            padding-left: 35px;
        }

        .footer .footer-social a {
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            margin: 0 !important;
            padding: 0 !important;
            border-radius: 50%;
            background: rgba(255, 255, 255, .12);
            color: #fff;
            transition: .3s;
            text-decoration: none;
            flex-shrink: 0;
        }

        .footer .footer-social a i {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 !important;
            padding: 0 !important;
            width: 1em !important;
            height: 1em !important;
            font-size: 18px;
            line-height: 1;
            color: inherit !important;
        }

        .footer .footer-social a i::before {
            line-height: 1;
        }

        .footer .footer-social a:hover {
            padding-left: 0 !important;
            background: #fff;
            color: #880422;
            transform: translateY(-3px);
        }

        .footer .footer-social a:hover i {
            color: inherit !important;
        }

        .logo img {
            max-height: 60px;
            width: auto;
        }

        /* apointment form styles */
        .appointment {
            padding: 90px 0;
        }

        .appointment-form {
            padding: 45px;
            background: #f3f6ff;
            border-radius: 10px;
        }

        .appointment-form .form-control {
            height: 45px;
            padding: 10px 15px;
            font-size: 14px;
            border: 1px solid #ddd;
        }

        .appointment-form textarea.form-control {
            height: auto;
        }

        .appointment-form .btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            color: #ffffff;
            background: #880411;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .appointment-form .btn:hover {
            background: #6d030d;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Service Item UI Improvements */
        .bg-brand {
            background-color: #880422 !important;
        }

        .cta-button-light {
            display: inline-block;
            background-color: #ffffff;
            color: #880422;
            padding: 10px 24px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .cta-button-light:hover {
            background-color: #ffbd59;
            color: #880422;
            text-decoration: none;
        }

        .service-item {
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-10px);
        }

        .service-icon i {
            color: #ffbd59 !important;
        }

        /* Carousel Overlay for better text contrast */
        .carousel-item::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
        }

        .carousel-caption {
            z-index: 2;
            /* Ensures text stays above the overlay */
        }

        /* New Practice Card UI Styles */
        .practice-card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            /* Ensures image corners are rounded */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            /* Ensure cards in a row have equal height */
            display: flex;
            flex-direction: column;
        }

        .practice-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .practice-card-image {
            width: 100%;
            height: 200px;
            /* Fixed height for images */
            overflow: hidden;
        }

        .practice-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Cover the area without distortion */
            transition: transform 0.3s ease;
        }

        .practice-card:hover .practice-card-image img {
            transform: scale(1.05);
            /* Subtle zoom on hover */
        }

        .practice-card-content {
            padding: 25px;
            flex-grow: 1;
            /* Allows content to take up remaining space */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Pushes button to bottom */
        }

        .practice-card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #880422;
            /* Brand color for headings */
        }

        .practice-card-content p {
            font-size: 0.95rem;
            color: #555555;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .practice-card-content .cta-button-light {
            align-self: flex-start;
            /* Align button to the left */
            padding: 10px 20px;
            font-size: 0.9rem;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .partners-section .partner-card {
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .partners-section .partner-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15) !important;
        }

        .partners-section .partner-card img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            object-position: top;
            transition: transform 0.5s ease;
        }

        .partners-section .partner-card:hover img {
            transform: scale(1.05);
        }

        .partners-section .partner-card .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .partners-section .partner-card .card-text {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #555;
            text-align: center;
            margin-bottom: 1.25rem;
        }

        .partners-section .partner-badge {
            background-color: #880422;
        }

        .partners-section .partner-card .cta-button {
            margin-top: auto;
            padding: 8px 20px;
            font-size: 0.9rem;
        }

        /* apointment Overwrite */

        .appointment {
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fc 0%, #eef2ff 40%, #f3f6ff 100%);
            position: relative;
            overflow: hidden;
        }

        .appointment::before,
        .appointment::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            z-index: 0;
        }

        .appointment::before {
            width: 320px;
            height: 320px;
            background: rgba(136, 4, 17, 0.08);
            top: -140px;
            left: -120px;
        }

        .appointment::after {
            width: 260px;
            height: 260px;
            background: rgba(136, 4, 17, 0.05);
            bottom: -100px;
            right: -80px;
        }

        .appointment .container {
            position: relative;
            z-index: 2;
        }

        .section-header h2 {
            font-weight: 700;
            color: #222;
        }

        .section-header p {
            color: #666;
            max-width: 650px;
            margin: 0 auto;
        }

        .appointment-form {
            background: #fff;
            padding: 45px;
            border-radius: 18px;
            border: 1px solid rgba(0, 0, 0, .05);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .08);
        }

        .appointment-form .form-control {
            height: 52px;
            border-radius: 8px;
            border: 1px solid #d8dee9;
            padding: 12px 15px;
            font-size: 15px;
            transition: all .3s ease;
        }

        .appointment-form textarea.form-control {
            height: 150px;
            resize: vertical;
        }

        .appointment-form .form-control:focus {
            border-color: #880411;
            box-shadow: 0 0 0 .2rem rgba(136, 4, 17, .15);
        }

        .appointment-form .btn {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: .5px;
            color: #fff;
            background: linear-gradient(135deg, #880411, #b80b1f);
            transition: .3s ease;
        }

        .appointment-form .btn:hover {
            background: linear-gradient(135deg, #6d030d, #980919);
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(136, 4, 17, .25);
        }

        @media (max-width:768px) {
            .appointment {
                padding: 70px 0;
            }

            .appointment-form {
                padding: 30px;
            }
        }


        /* end apointment form styles*/
    </style>
    {{-- end css overwrite --}}
</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('media/logo.jpg') }}" alt="MMK Advocates Logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>8:00 - 5:00</h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>+254799461975</h2>
                                <p>Call Us For a Consultation</p>
                            </div>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('aboutus') }}" class="nav-item nav-link">About</a>
                            <a href="{{ route('practiceareas') }}" class="nav-item nav-link">Practice</a>
                            <a href="{{ route('ourteam') }}" class="nav-item nav-link">Attorneys</a>
                            <a href="{{ route('appointment') }}" class="nav-item nav-link">Consultation</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Resources</a>
                                <div class="dropdown-menu">
                                    <a href="/" class="dropdown-item">News and Articles</a>
                                    <a href="/" class="dropdown-item">Case Studies</a>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="{{ route('appointment') }}">Get Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        {{-- content --}}

        @yield('content')


        {{-- content    ENDS --}}

        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container">
                <div class="section-header">
                    <h2>Subscribe Our Newsletter</h2>
                </div>
                <div class="form">
                    <input class="form-control" placeholder="Email here">
                    <button class="btn">Submit</button>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Footer Start -->
        <style>
            /* Main Footer */
            .footer {
                background: linear-gradient(135deg, #880422 0%, #a31436 45%, #ffbd59 100%);
                color: rgba(255, 255, 255, 0.9);
                position: relative;
                overflow: hidden;
            }

            /* Decorative Background */
            .footer::before {
                content: "";
                position: absolute;
                width: 420px;
                height: 420px;
                background: rgba(255, 255, 255, .06);
                border-radius: 50%;
                top: -180px;
                right: -120px;
            }

            .footer::after {
                content: "";
                position: absolute;
                width: 280px;
                height: 280px;
                background: rgba(255, 255, 255, .04);
                border-radius: 50%;
                bottom: -120px;
                left: -80px;
            }

            .footer .container {
                position: relative;
                z-index: 2;
            }

            /* Headings */
            .footer h2 {
                color: #fff;
                font-weight: 700;
                margin-bottom: 20px;
            }

            /* Paragraphs */
            .footer p {
                color: rgba(255, 255, 255, .9);
                line-height: 1.8;
            }

            /* Links */
            .footer a {
                color: rgba(255, 255, 255, .9);
                transition: .3s;
            }

            .footer a:hover {
                color: #ffbd59;
                text-decoration: none;
                padding-left: 5px;
            }

            /* Footer Menu */
            .footer-menu,
            .footer-menu .f-menu {
                background: rgba(0, 0, 0, .15) !important;
                border-top: 1px solid rgba(255, 255, 255, .15);
                border-bottom: 1px solid rgba(255, 255, 255, .15);
            }

            .footer-menu a {
                color: #fff;
            }

            .footer-menu a:hover {
                color: #ffbd59;
            }

            /* Copyright */
            .copyright {
                background: rgba(0, 0, 0, .2);
                border-top: 1px solid rgba(255, 255, 255, .15);
            }

            .copyright p,
            .copyright a {
                color: #fff;
            }

            .copyright a:hover {
                color: #ffbd59;
            }
        </style>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-about">
                            <h2>About Us</h2>
                            <p>
                                MMK Advocates LLP is a forward-thinking and dynamic law firm based in Kenya, offering a
                                comprehensive array of legal services to a diverse clientele. Our clients include local
                                and international corporations, government entities, multinational companies,
                                non-governmental organizations (NGOs), and high-net-worth individuals. The firm is
                                headquartered in Thika.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h2>Services Areas</h2>
                                    <a href="">Civil Law</a>
                                    <a href="">Family Law</a>
                                    <a href="">Business Law</a>
                                    <a href="">Education Law</a>
                                    <a href="">Immigration Law</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h2>Useful Pages</h2>
                                    <a href="{{ route('home') }}">Home</a>
                                    <a href="{{ route('aboutus') }}">About Us</a>
                                    <a href="{{ route('practiceareas') }}">Practices</a>
                                    <a href="{{ route('ourteam') }}">Attorneys</a>
                                    <a href="{{ route('appointment') }}">Apointment</a>
                                    <a href="{{ route('contact') }}">FAQs</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-contact">
                                    <h2>Get In Touch</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>THIKA SECTION 9,
                                        YELLOW HOUSE NO. 45
                                        MUGO KIBIRU ROAD.
                                        P. O BOX 7449-01000
                                        THIKA.</p>                                    <p><i class="fa fa-phone-alt"></i><a href="tel:+254799461975">+254 799 461 975</a></p>
                                    <p><i class="fa fa-envelope"></i>mmklaw.advocates@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu" style="background-color: #6d030d !important;">
                <div class="f-menu" style="background-color: #6d030d !important;">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="{{ route('appointment') }}">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy;{{ date('Y') }} <a href="#">mmk.advocates.or.ke</a>, All Right Reserved.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <p>Designed By <a href="">Murimicodes</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('theme/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('theme/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/lib/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('theme/js/main.js') }}"></script>
</body>

</html>
