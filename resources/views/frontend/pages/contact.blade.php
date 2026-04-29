@extends('frontend.layouts.base')

@section('content')
    <style>
        .contact-info .contact-item .contact-text p a {
            color: aliceblue;
            transition: 0.3s;
            text-decoration: none;
        }

        .contact-info .contact-item .contact-text p a:hover {
            color: #880411;
            text-decoration: underline;
        }
    </style>
    @include('frontend.inc.banner')
    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p>THIKA SECTION 9,
                                    YELLOW HOUSE NO. 45
                                    MUGO KIBIRU ROAD.
                                    P. O BOX 7449-01000
                                    THIKA.</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-phone-alt"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p><a href="tel:+254714038285">(+254)7140-382-85</a></p>
                                <p><a href="tel:+254722472228">(+254)7224-722-28</a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-envelope"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>mmklaw.advocates@gmail.com</p>
                                <p>info@mmk@advocates.or.ke</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" required="required" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2911684805428!2d37.07086710514947!3d-1.0371425289593252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4f07e22b6b3d%3A0x13adf2a04d711a0f!2sMakuno%20Gacoya%20%26%20Company%20Advocates!5e0!3m2!1sen!2ske!4v1774995186861!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
   
    
@endsection
