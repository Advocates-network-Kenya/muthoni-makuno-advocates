@extends('frontend.layouts.base')

@section('content')
    <style>
        .about-card {
            background: #ffffff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            height: 100%;
            border-top: 5px solid #880422;
            border-bottom: 5px solid #880422;
            transition: transform 0.3s ease;
        }
        .about-card:hover {
            transform: translateY(-5px);
        }
    </style>
    @include('frontend.inc.banner')

    <!-- Vision, Mission & Values Start -->
    <div class="about" style="padding-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="about-card">
                        <div class="section-header">
                            <h2>Our Vision</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                To become the leading providers of legal services by continually adapting to emerging trends and
                                making a positive impact on the communities we serve.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="about-card">
                        <div class="section-header">
                            <h2>Our Mission</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                We aspire to be a premier law firm providing excellent service efficiently and with integrity.
                                In pursuit of this mission, we are guided by our core values which are critical to our existence
                                as a law firm.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="about-card">
                        <div class="section-header">
                            <h2>Core Values</h2>
                        </div>
                        <div class="about-text">
                            <p><span class="text-primary"><b>Integrity:</b></span>
                                We stand for uncompromising integrity and high ethical conduct in our practice of law. We also
                                protect client information that is sensitive, private or confidential and guard it very
                                carefully. Further, we do not engage in corrupt practices, believing in the Rule of Law and
                                Administration of justice. </p>
                            <p><span class="text-primary"><b>Respect:</b></span>
                                We strive to treat all partners in our work with the respect and dignity they deserve; we value
                                their contributions and uphold professional values at all times.
                                .</p>
                            <p><span class="text-primary"><b>Service:</b></span>
                                By combining our commitment to excellence, service and quality with professional resources
                                available to us, we strive to be the very best in the delivery of our legal services to our
                                clients.</p>
                            <p><span class="text-primary"><b>Excellence:</b></span> 
                                We strive for excellence and uphold the philosophy of continuous improvement in all that we do.
                                To us, every day is a new learning experience through which we can improve ourselves and improve
                                the quality of what we offer our clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="about-card">
                        <div class="section-header">
                            <h2>Our Principles</h2>
                        </div>
                        <div class="about-text">
                            <p><i class="fas fa-check text-primary mr-2"></i>Providing consistent, quality, and prompt legal
                                services to all our clients.</p>
                            <p><i class="fas fa-check text-primary mr-2"></i>Maintaining the highest level of professionalism
                                and ethical standards in all engagements.</p>
                            <p><i class="fas fa-check text-primary mr-2"></i>Continually adapting to emerging legal trends to
                                provide innovative solutions.</p>
                            <p><i class="fas fa-check text-primary mr-2"></i>Building lasting relationships based on mutual
                                respect and value delivery.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a class="cta-button" href="{{ route('practiceareas') }}">Our Practice Areas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision, Mission & Values End -->
@endsection
