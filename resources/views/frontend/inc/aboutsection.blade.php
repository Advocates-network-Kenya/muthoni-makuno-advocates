{{-- <!-- About Start -->
        <div class="about" id="aboutus">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('media/home.png') }}" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header">
                            <h2>Supporting You In Every Step</h2>
                        </div>
                        <div class="about-text">
                            <p>
                              <b> <span class="text-primary">MMK Advocates LLP</span></b> is a forward-thinking and dynamic law firm based in Kenya,offering a comprehensive array of legal services to a diverse clientele.
                            </p>
                            <p>
                               Our clients include local and international corporations, government entities, multinational companies, non-governmental organizations (NGOs), and high-net-worth individuals. The firm is headquartered in Thika.
                            </p>
                           
                            <a class="cta-button" href="{{ route('aboutus') }}">Learn More</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End --> --}}


<style>
    .about {
        padding: 60px 0;
        background: linear-gradient(135deg, #880422 0%, #a31436 45%, #ffbd59 100%);
        position: relative;
        overflow: hidden;
    }

    .about::before {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
        top: -180px;
        right: -150px;
    }

    .about::after {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        bottom: -120px;
        left: -80px;
    }

    .about .container {
        position: relative;
        z-index: 2;
    }

    .about-img img {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, .25);
        transition: .4s;
    }

    .about-img img:hover {
        transform: translateY(-5px);
    }

    .about-content {
        padding-left: 25px;
    }

    .about-content h2 {
        color: #fff;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .about-content p {
        color: rgba(255, 255, 255, .92);
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .about-content strong {
        color: #ffbd59;
    }

    .about-points {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 25px;
        margin: 25px 0;
    }

    .about-points span {
        display: flex;
        align-items: center;
        color: #fff;
        font-size: 15px;
        font-weight: 500;
    }

    .about-points i {
        color: #ffbd59;
        margin-right: 8px;
    }

    .cta-button {
        display: inline-block;
        padding: 12px 28px;
        background: #fff;
        color: #880422;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        transition: .3s;
        box-shadow: 0 10px 25px rgba(0,0,0,.15);
    }

    .cta-button:hover {
        background: #ffbd59;
        color: #880422;
        transform: translateY(-2px);
    }

    @media (max-width:991px) {
        .about {
            padding: 50px 0;
        }

        .about-content {
            padding-left: 0;
            margin-top: 30px;
        }

        .about-content h2 {
            font-size: 1.8rem;
        }
    }
</style>

<div class="about" id="aboutus">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{ asset('media/home.png') }}" class="img-fluid" alt="MMK Advocates LLP">
                </div>
            </div>

            <div class="col-lg-7 col-md-6">

                <div class="about-content">

                    <h2>Supporting You Every Step of the Way</h2>

                    <p>
                        <strong>MMK Advocates LLP</strong> is a dynamic Kenyan law firm offering practical, strategic and results-oriented legal solutions to individuals, businesses, government institutions, NGOs and multinational organizations.
                    </p>

                    <p>
                        Headquartered in Thika, we combine legal expertise with a client-focused approach to provide timely, dependable and professional legal representation across a broad range of practice areas.
                    </p>

                    <div class="about-points">
                        <span><i class="fas fa-check-circle"></i> Corporate Law</span>
                        <span><i class="fas fa-check-circle"></i> Litigation</span>
                        <span><i class="fas fa-check-circle"></i> Conveyancing</span>
                        <span><i class="fas fa-check-circle"></i> Employment Law</span>
                    </div>

                    <a href="{{ route('aboutus') }}" class="cta-button">
                        Learn More
                    </a>

                </div>

            </div>

        </div>

    </div>
</div>

