<!-- =========================================================
     MMK CLIENTS & TESTIMONIALS
========================================================= -->

<style>

    /* =====================================================
       MAIN SECTION
    ===================================================== */

    .mmk-clients-section {
        position: relative;
        overflow: hidden;
        padding: 85px 0 95px;

        background:
            radial-gradient(
                circle at 90% 0%,
                rgba(255, 189, 89, 0.12),
                transparent 28%
            ),
            linear-gradient(
                135deg,
                #880422 0%,
                #70031c 50%,
                #430b16 100%
            );

        color: #fff;
    }


    /* Decorative background */

    .mmk-clients-section::before {
        content: "";
        position: absolute;

        width: 500px;
        height: 500px;

        right: -240px;
        top: -300px;

        border-radius: 50%;

        background: rgba(255, 189, 89, 0.08);

        pointer-events: none;
    }

    .mmk-clients-section::after {
        content: "";
        position: absolute;

        width: 350px;
        height: 350px;

        left: -200px;
        bottom: -230px;

        border-radius: 50%;

        background: rgba(255, 255, 255, 0.035);

        pointer-events: none;
    }


    /* =====================================================
       CONTAINER
    ===================================================== */

    .mmk-clients-container {
        position: relative;
        z-index: 2;

        width: 90%;
        max-width: 1400px;

        margin: 0 auto;
    }


    /* =====================================================
       DIVIDER
    ===================================================== */

    .mmk-divider {
        width: 100%;
        height: 1px;

        margin-bottom: 65px;

        background: rgba(255, 189, 89, 0.35);
    }


    /* =====================================================
       MAIN HEADING
    ===================================================== */

    .mmk-heading {
        max-width: 850px;

        margin-bottom: 38px;
    }

    .mmk-heading h2 {
        margin: 0 0 22px;

        color: #ffffff !important;

        font-size: clamp(
            2.8rem,
            5vw,
            5rem
        );

        line-height: 1.05;

        font-weight: 800;

        letter-spacing: -2px;
    }

    .mmk-heading h2 span {
        color: #ffbd59 !important;
    }

    .mmk-heading h2::after {
        content: "";

        display: block;

        width: 90px;
        height: 5px;

        margin-top: 22px;

        border-radius: 10px;

        background: #ffbd59;
    }

    .mmk-heading p {
        max-width: 720px;

        margin: 0;

        color: rgba(255, 255, 255, 0.82) !important;

        font-size: 18px;

        line-height: 1.75;
    }


    /* =====================================================
       CLIENT LINKS
    ===================================================== */

    .mmk-client-links {
        display: flex;

        flex-wrap: wrap;

        align-items: center;

        gap: 14px;

        margin-bottom: 60px;
    }


    .mmk-client-link {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        min-height: 52px;

        padding: 12px 25px;

        border-radius: 50px;

        text-decoration: none !important;

        color: #ffbd59 !important;

        background: rgba(255, 255, 255, 0.10);

        border: 1px solid rgba(255, 255, 255, 0.15);

        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);

        font-size: 17px;

        font-weight: 700;

        transition:
            all 0.35s ease;
    }


    .mmk-client-link:hover {
        transform: translateY(-5px);

        background: #ffbd59;

        color: #880422 !important;

        border-color: #ffbd59;

        box-shadow:
            0 10px 25px rgba(0, 0, 0, 0.22);
    }


    /* Small arrow */

    .mmk-client-link i {
        margin-left: 9px;

        font-size: 12px;

        transition: transform 0.3s ease;
    }

    .mmk-client-link:hover i {
        transform: translateX(4px);
    }


    /* =====================================================
       TESTIMONIAL GRID
    ===================================================== */

    .mmk-testimonials-grid {
        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 28px;
    }


    /* =====================================================
       TESTIMONIAL CARD
    ===================================================== */

    .mmk-testimonial-card {
        position: relative;

        min-height: 350px;

        padding: 36px 32px 30px;

        background:
            linear-gradient(
                145deg,
                rgba(255, 255, 255, 0.10),
                rgba(255, 255, 255, 0.035)
            );

        border: 1px solid rgba(255, 255, 255, 0.14);

        border-top: 4px solid #ffbd59;

        border-radius: 20px;

        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);

        overflow: hidden;

        transition: all 0.4s ease;
    }


    .mmk-testimonial-card:hover {
        transform: translateY(-9px);

        border-color:
            rgba(255, 189, 89, 0.45);

        box-shadow:
            0 25px 50px rgba(0, 0, 0, 0.28);
    }


    /* =====================================================
       QUOTE
    ===================================================== */

    .mmk-quote {
        position: absolute;

        top: 12px;
        right: 25px;

        font-family: Georgia, serif;

        font-size: 70px;

        line-height: 1;

        color: rgba(255, 189, 89, 0.13);
    }


    /* =====================================================
       TESTIMONIAL TEXT
    ===================================================== */

    .mmk-testimonial-text {
        position: relative;
        z-index: 2;

        margin: 0;

        color: #ffffff !important;

        font-size: 19px;

        line-height: 1.75;
    }


    /* =====================================================
       CLIENT DETAILS
    ===================================================== */

    .mmk-client-info {
        position: relative;
        z-index: 2;

        margin-top: 30px;
    }


    .mmk-client-line {
        display: block;

        width: 38px;
        height: 3px;

        margin-bottom: 13px;

        border-radius: 5px;
    }

    .mmk-client-line.green {
        background: #72d8d0;
    }

    .mmk-client-line.blue {
        background: #8fb9ff;
    }

    .mmk-client-line.pink {
        background: #ef8da5;
    }


    .mmk-client-name {
        display: block;

        margin-bottom: 5px;

        color: #ffbd59 !important;

        font-size: 18px;

        font-weight: 700;
    }


    .mmk-client-type {
        display: block;

        color: rgba(255, 255, 255, 0.68) !important;

        font-size: 15px;
    }


    /* =====================================================
       TABLET
    ===================================================== */

    @media (max-width: 1050px) {

        .mmk-testimonials-grid {
            grid-template-columns:
                repeat(2, minmax(0, 1fr));
        }

        .mmk-testimonial-card:last-child {
            grid-column: span 2;
        }

        .mmk-heading h2 {
            font-size: 3.7rem;
        }
    }


    /* =====================================================
       MOBILE
    ===================================================== */

    @media (max-width: 700px) {

        .mmk-clients-section {
            padding: 65px 0 70px;
        }

        .mmk-clients-container {
            width: 92%;
        }


        /* Heading */

        .mmk-heading {
            margin-bottom: 30px;
        }

        .mmk-heading h2 {
            font-size: 2.7rem;

            letter-spacing: -1px;
        }

        .mmk-heading p {
            font-size: 16px;

            line-height: 1.65;
        }


        /* Client links */

        .mmk-client-links {
            gap: 10px;

            margin-bottom: 45px;
        }

        .mmk-client-link {
            flex: 1 1 auto;

            min-height: 48px;

            padding: 10px 17px;

            font-size: 15px;
        }


        /* Cards */

        .mmk-testimonials-grid {
            grid-template-columns: 1fr;

            gap: 20px;
        }

        .mmk-testimonial-card:last-child {
            grid-column: auto;
        }

        .mmk-testimonial-card {
            min-height: auto;

            padding: 32px 26px;
        }

        .mmk-testimonial-text {
            font-size: 17px;

            line-height: 1.7;
        }
    }


    /* =====================================================
       SMALL PHONES
    ===================================================== */

    @media (max-width: 430px) {

        .mmk-heading h2 {
            font-size: 2.3rem;
        }

        .mmk-heading h2::after {
            width: 65px;
            height: 4px;
        }

        .mmk-client-links {
            display: grid;

            grid-template-columns: 1fr 1fr;
        }

        .mmk-client-link {
            width: 100%;

            padding: 10px 8px;

            font-size: 14px;

            text-align: center;
        }

        .mmk-testimonial-card {
            padding: 28px 22px;
        }

        .mmk-testimonial-text {
            font-size: 16px;
        }
    }

</style>


<section class="mmk-clients-section">

    <div class="mmk-clients-container">


        <!-- =================================================
             DIVIDER
        ================================================== -->

        <div class="mmk-divider"></div>


        <!-- =================================================
             MAIN HEADING
        ================================================== -->

        <div class="mmk-heading">

            <h2>
                Trusted by <span>clients</span>,
                built on <span>results</span>
            </h2>

            <p>
                We work with organisations, businesses and
                individuals across different sectors, providing
                practical legal solutions with professionalism,
                integrity and commitment.
            </p>

        </div>


        <!-- =================================================
             CLIENT LINKS
             NOW BELOW THE HEADING
        ================================================== -->

        <div class="mmk-client-links">

            <a href="#" class="mmk-client-link">
                Banks and lenders
                <i>→</i>
            </a>

            <a href="#" class="mmk-client-link">
                NGOs and government
                <i>→</i>
            </a>

            <a href="#" class="mmk-client-link">
                Insurance
                <i>→</i>
            </a>

            <a href="#" class="mmk-client-link">
                Companies
                <i>→</i>
            </a>

        </div>


        <!-- =================================================
             TESTIMONIALS
        ================================================== -->

        <div class="mmk-testimonials-grid">


            <!-- TESTIMONIAL 1 -->

            <article class="mmk-testimonial-card">

                <div class="mmk-quote">
                    “
                </div>

                <p class="mmk-testimonial-text">
                    From start to finish the process was seamless.
                    The team listened to our needs, delivered exactly
                    what we wanted, and supported us at every step.
                </p>

                <div class="mmk-client-info">

                    <span class="mmk-client-line green"></span>

                    <span class="mmk-client-name">
                        Ruaraka Auto Garage
                    </span>

                    <span class="mmk-client-type">
                        Motor Industry
                    </span>

                </div>

            </article>


            <!-- TESTIMONIAL 2 -->

            <article class="mmk-testimonial-card">

                <div class="mmk-quote">
                    “
                </div>

                <p class="mmk-testimonial-text">
                    Their commitment goes beyond legal representation.
                    They are true partners in our mission, and their
                    work has helped us create a greater impact in the
                    communities we serve.
                </p>

                <div class="mmk-client-info">

                    <span class="mmk-client-line blue"></span>

                    <span class="mmk-client-name">
                        Action for Children in Conflict
                    </span>

                    <span class="mmk-client-type">
                        Child Protection NGO
                    </span>

                </div>

            </article>


            <!-- TESTIMONIAL 3 -->

            <article class="mmk-testimonial-card">

                <div class="mmk-quote">
                    “
                </div>

                <p class="mmk-testimonial-text">
                    We have worked alongside this firm on several
                    matters and have been consistently impressed by
                    their professionalism, expertise and commitment
                    to outstanding results.
                </p>

                <div class="mmk-client-info">

                    <span class="mmk-client-line pink"></span>

                    <span class="mmk-client-name">
                        Corporate Client
                    </span>

                    <span class="mmk-client-type">
                        Commercial Litigation
                    </span>

                </div>

            </article>


        </div>

    </div>

</section>