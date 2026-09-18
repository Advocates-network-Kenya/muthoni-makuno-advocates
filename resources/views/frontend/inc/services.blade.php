
<style>

/* =========================================================
   PRACTICE AREAS SECTION
========================================================= */

.practice-section {
    position: relative;
    padding: 75px 0 80px;
    overflow: hidden;

    background:
        radial-gradient(
            circle at 0% 0%,
            rgba(136, 4, 34, 0.07),
            transparent 35%
        ),
        radial-gradient(
            circle at 100% 100%,
            rgba(255, 189, 89, 0.09),
            transparent 35%
        ),
        linear-gradient(
            135deg,
            #ffffff 0%,
            #fffafb 50%,
            #f9f7f8 100%
        );
}


/* =========================================================
   SECTION HEADER
========================================================= */

.practice-section .section-header {
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
}

.practice-kicker {
    display: inline-block;
    color: #880422;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 8px;
}

.practice-section .section-header h2 {
    color: #880422;
    font-size: 38px;
    font-weight: 800;
    margin-bottom: 12px;
}

.practice-section .section-header p {
    color: #6f7379;
    font-size: 16px;
    line-height: 1.7;
    max-width: 650px;
    margin: 0 auto;
}


/* =========================================================
   PRACTICE CARD
========================================================= */

.practice-card {
    height: 100%;
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;

    border: 1px solid rgba(136, 4, 34, 0.06);

    box-shadow:
        0 8px 25px rgba(0, 0, 0, 0.06);

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease,
        border-color 0.35s ease;
}

.practice-card:hover {
    transform: translateY(-8px);

    border-color: rgba(136, 4, 34, 0.15);

    box-shadow:
        0 18px 40px rgba(136, 4, 34, 0.13);
}


/* =========================================================
   IMAGE
========================================================= */

.practice-card-image {
    position: relative;
    height: 235px;
    overflow: hidden;
    background: #eeeeee;
}

.practice-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;

    transition: transform 0.5s ease;
}

.practice-card:hover .practice-card-image img {
    transform: scale(1.05);
}


/* =========================================================
   IMAGE BOTTOM FADE
========================================================= */

.practice-image-overlay {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 60px;

    background: linear-gradient(
        to top,
        rgba(0, 0, 0, 0.12),
        transparent
    );

    pointer-events: none;
}


/* =========================================================
   CARD CONTENT
========================================================= */

.practice-card-content {
    padding: 25px 24px 27px;
}

.practice-card-content h3 {
    color: #880422;
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 12px;

    transition: color 0.3s ease;
}

.practice-card:hover .practice-card-content h3 {
    color: #570013;
}

.practice-card-content p {
    color: #727b87;
    font-size: 14px;
    line-height: 1.7;

    min-height: 48px;
    margin-bottom: 20px;
}


/* =========================================================
   LEARN MORE BUTTON
========================================================= */

.cta-button-light {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    color: #880422;

    background: #fff7f9;

    border: 1px solid rgba(136, 4, 34, 0.15);

    padding: 9px 17px;
    border-radius: 30px;

    font-size: 13px;
    font-weight: 700;

    text-decoration: none;

    transition: all 0.3s ease;
}

.cta-button-light i {
    transition: transform 0.3s ease;
}

.cta-button-light:hover {
    color: #ffffff;
    background: #880422;
    border-color: #880422;

    text-decoration: none;
    transform: translateY(-2px);
}

.cta-button-light:hover i {
    transform: translateX(4px);
}


/* =========================================================
   VIEW ALL BUTTON
========================================================= */

.practice-all-button {
    margin-top: 18px;
}

.practice-section .cta-button {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    padding: 13px 27px;

    color: #ffffff !important;

    background: linear-gradient(
        135deg,
        #880422,
        #570013
    );

    border-radius: 30px;

    font-size: 14px;
    font-weight: 700;

    text-decoration: none;

    box-shadow:
        0 8px 20px rgba(136, 4, 34, 0.18);

    transition: all 0.3s ease;
}

.practice-section .cta-button:hover {
    transform: translateY(-3px);

    box-shadow:
        0 12px 28px rgba(136, 4, 34, 0.25);
}


/* =========================================================
   COMING SOON
========================================================= */

.coming-soon {
    color: #880422;
    font-weight: 700;
    text-transform: capitalize;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .practice-section {
        padding: 60px 0 65px;
    }

    .practice-section .section-header h2 {
        font-size: 32px;
    }

    .practice-card-image {
        height: 220px;
    }
}


@media (max-width: 767px) {

    .practice-section {
        padding: 50px 0 55px;
    }

    .practice-section .section-header {
        margin-bottom: 35px !important;
    }

    .practice-section .section-header h2 {
        font-size: 29px;
    }

    .practice-section .section-header p {
        font-size: 14px;
    }

    .practice-card {
        max-width: 450px;
        margin-left: auto;
        margin-right: auto;
    }

    .practice-card-image {
        height: 240px;
    }
}


@media (max-width: 480px) {

    .practice-section .section-header h2 {
        font-size: 26px;
    }

    .practice-card-image {
        height: 220px;
    }

    .practice-card-content {
        padding: 22px 20px 24px;
    }

}

</style>


<!-- =========================================================
     PRACTICE AREAS
========================================================= -->

<div class="service practice-section">

    <div class="container">

        <!-- Section Header -->
        <div class="section-header text-center mb-5">

            <span class="practice-kicker">
                OUR EXPERTISE
            </span>

            <h2>
                Our Practice Areas
            </h2>

            <p>
                Comprehensive legal services delivered with experience,
                professionalism and a client-focused approach.
            </p>

        </div>


        <div class="row">

            @if($practiceareas->count() > 0)

                @foreach ($practiceareas as $area)

                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="practice-card">

                            <!-- Image -->
                            <div class="practice-card-image">

                                <img
                                    src="{{ asset('storage/'.$area->image) }}"
                                    alt="{{ $area->title }}"
                                >

                                <div class="practice-image-overlay"></div>

                            </div>


                            <!-- Content -->
                            <div class="practice-card-content">

                                <h3>
                                    {{ $area->title }}
                                </h3>

                                <p>
                                    {{ Str::limit($area->description, 120) }}
                                </p>

                                <a
                                    class="cta-button-light"
                                    href="{{ route('practicearea.details', ['slug' => $area->slug]) }}"
                                >
                                    Learn More
                                    <i class="fas fa-arrow-right"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            @else

                <div class="col-12 text-center">

                    <p class="text-muted mb-0">
                        Loading Our Practice Areas...
                        <span class="coming-soon">
                            Coming Soon
                        </span>
                    </p>

                </div>

            @endif


            <!-- View All -->
            <div class="col-12 text-center practice-all-button">

                <a
                    href="{{ route('practiceareas') }}"
                    class="cta-button"
                >
                    View All Practice Areas
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </div>

</div>

