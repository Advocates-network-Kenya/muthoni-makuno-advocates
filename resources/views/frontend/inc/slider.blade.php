 <!-- Carousel Start -->
        <style>
            html, 
            body {
                overflow-x: hidden;
                width: 100%;
            }

            #carousel,
            .carousel-inner, 
            .carousel-item {
                overflow: hidden;
            }
        </style>

        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/slider1.png')}}" class="d-block w-100" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">Where Justice, Integrity, and Professionalism Meet.</h1>
                        <p class="animated fadeInRight">MMK Advocates LLP is a forward-thinking and dynamic law firm based in Kenya, offering a comprehensive array of legal services to a diverse clientele.</p>
                        <a class="btn animated fadeInUp" href="#aboutus">About Us</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/slider1.png')}}" class="d-block w-100" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We prepared to Advocate for you</h1>
                        <p class="animated fadeInRight">We are committed to defending your rights with precision, strategy, and dedication</p>
                        <a class="btn animated fadeInUp" href="{{ route('appointment') }}">Get free consultation</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('img/slider1.png')}}" class="d-block w-100" alt="Carousel Image">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                        <p class="animated fadeInRight">We are dedicated to safeguarding your rights, interests, and opportunities. With strategic advocacy and unwavering commitment, we ensure your voice is heard and your position is protected.</p>
                        <a class="btn animated fadeInUp" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->