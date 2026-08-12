<style>
/* =========================================================
   OUR CLIENTS SECTION
   ========================================================= */

.our-clients-section {
    position: relative;
    overflow: hidden;
    padding: 70px 20px;
    background:
        linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.94),
            rgba(255, 226, 232, 0.82)
        );
}

.our-clients-section::before {
    content: "";
    position: absolute;
    width: 650px;
    height: 650px;
    border-radius: 50%;
    right: -250px;
    top: 80px;

    background: linear-gradient(
        135deg,
        rgba(136, 4, 34, 0.08),
        rgba(255, 189, 89, 0.14)
    );

    transform: rotate(25deg);
}

.our-clients-section::after {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    left: -280px;
    bottom: -250px;

    background: rgba(136, 4, 34, 0.04);
}

.clients-container {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 1050px;
    margin: auto;
}


/* =========================================================
   OUR CLIENTS HEADING
   ========================================================= */

.clients-heading {
    text-align: left;
    margin-bottom: 45px;
}

.clients-heading h2 {
    position: relative;
    display: inline-block;

    margin: 0;
    padding: 0;

    color: #880422;

    font-family: Georgia, "Times New Roman", serif;
    font-size: clamp(42px, 5vw, 68px);
    font-weight: 700;
    line-height: 1;
}

.clients-heading h2 span {
    position: relative;
    display: inline-block;

    margin-left: 8px;
    color: #880422;
}

.clients-heading h2 span::before {
    content: "";

    position: absolute;
    z-index: -1;

    left: -12px;
    right: -22px;
    top: 42%;

    height: 48%;

    background: #ffbd59;

    border-radius: 55% 35% 50% 30%;

    transform: rotate(-2deg) skewX(-12deg);
}


/* =========================================================
   CLIENT CATEGORIES
   ========================================================= */

.clients-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;

    column-gap: 55px;
    row-gap: 35px;
}

.client-category {
    position: relative;
    min-height: 150px;
}

.category-title {
    display: flex;
    align-items: center;

    width: 90%;
    min-height: 42px;

    padding: 8px 20px;
    margin-bottom: 14px;

    border-radius: 30px;

    background: #a9001c;
    color: #ffbd59;

    font-family: Georgia, "Times New Roman", serif;
    font-size: 17px;
    font-weight: 700;
}

.client-category ul {
    list-style: none;
    padding: 0 5px;
    margin: 0;
}

.client-category li {
    position: relative;

    padding-left: 4px;
    margin-bottom: 4px;

    color: #111;

    font-family: Georgia, "Times New Roman", serif;
    font-size: 13px;
    line-height: 1.45;
}

.client-category ul::after {
    content: "";

    display: block;

    width: 85%;
    height: 45px;

    margin-top: -30px;

    background:
        repeating-linear-gradient(
            -15deg,
            rgba(136, 4, 34, 0.03) 0px,
            rgba(136, 4, 34, 0.03) 1px,
            transparent 1px,
            transparent 4px
        );

    pointer-events: none;
}


/* =========================================================
   TESTIMONIALS HEADING
   ========================================================= */

.testimonials-heading {
    text-align: center;

    margin-top: 65px;
    margin-bottom: 35px;
}

.testimonials-heading span {
    display: block;

    margin-bottom: 8px;

    color: #a9001c;

    font-family: Georgia, "Times New Roman", serif;

    font-size: 18px;
    font-weight: 700;

    text-transform: uppercase;
    letter-spacing: 2px;
}

.testimonials-heading h3 {
    margin: 0;

    color: #880422;

    font-family: Georgia, "Times New Roman", serif;

    font-size: 34px;
    font-weight: 700;

    line-height: 1.2;
}


/* =========================================================
   TESTIMONIAL CARDS
   ========================================================= */

.client-testimonials {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 25px;

    margin-top: 0;
}

.testimonial-card {
    position: relative;

    padding: 22px 20px 16px;

    min-height: 165px;

    background: rgba(255, 255, 255, 0.55);

    border: 1px solid rgba(136, 4, 34, 0.15);

    border-radius: 7px;

    box-shadow:
        0 5px 18px rgba(0, 0, 0, 0.06);

    font-family: Georgia, "Times New Roman", serif;

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);

    box-shadow:
        0 10px 25px rgba(136, 4, 34, 0.12);
}

.testimonial-card p {
    margin: 0 0 18px;

    color: #222;

    font-size: 14px;
    line-height: 1.6;

    font-style: italic;
}

.testimonial-name {
    display: inline-block;

    padding: 7px 14px;

    margin-left: -8px;

    background: #4a9f94;

    color: #fff;

    border-radius: 14px;

    font-family: Arial, sans-serif;

    font-size: 11px;
    font-weight: 700;
}

.testimonial-name.blue {
    background: #2674df;
}

.testimonial-card:nth-child(3) .testimonial-name {
    background: #880422;
}


/* =========================================================
   LARGE DESKTOP
   ========================================================= */

@media (min-width: 1200px) {

    .clients-container {
        max-width: 1150px;
    }

    .clients-heading h2 {
        font-size: 68px;
    }

    .category-title {
        min-height: 46px;
        font-size: 19px;
    }

    .client-category li {
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 5px;
    }

    .testimonials-heading span {
        font-size: 19px;
    }

    .testimonials-heading h3 {
        font-size: 38px;
    }

    .testimonial-card {
        min-height: 180px;
        padding: 24px 22px 18px;
    }

    .testimonial-card p {
        font-size: 15px;
        line-height: 1.65;
    }

    .testimonial-name {
        font-size: 12px;
    }
}


/* =========================================================
   TABLET
   ========================================================= */

@media (max-width: 991px) {

    .our-clients-section {
        padding: 60px 20px;
    }

    .clients-grid {
        column-gap: 30px;
    }

    .category-title {
        width: 100%;
    }

    .client-category li {
        font-size: 12px;
    }

    .testimonials-heading h3 {
        font-size: 29px;
    }

    .client-testimonials {
        gap: 18px;
    }

    .testimonial-card {
        padding: 18px 15px;
    }

    .testimonial-card p {
        font-size: 13px;
    }
}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 576px) {

    .our-clients-section {
        padding: 45px 18px;
    }

    .clients-heading {
        text-align: center;
        margin-bottom: 35px;
    }

    .clients-heading h2 {
        font-size: 45px;
    }

    .clients-grid {
        grid-template-columns: 1fr;
        gap: 28px;
    }

    .client-category {
        min-height: auto;
    }

    .category-title {
        width: 100%;
        min-height: 40px;

        font-size: 15px;
    }

    .client-category li {
        font-size: 11px;
        line-height: 1.4;
    }

    .testimonials-heading {
        margin-top: 45px;
        margin-bottom: 25px;
    }

    .testimonials-heading span {
        font-size: 14px;
        letter-spacing: 1.5px;
    }

    .testimonials-heading h3 {
        font-size: 25px;
        line-height: 1.25;
    }

    .client-testimonials {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .testimonial-card {
        min-height: auto;
        padding: 18px 15px 14px;
    }

    .testimonial-card p {
        font-size: 12px;
        line-height: 1.5;
    }

    .testimonial-name {
        font-size: 10px;
    }
}
</style>


<!-- =========================================================
     OUR CLIENTS SECTION HTML
     ========================================================= -->

<section class="our-clients-section">

    <div class="clients-container">

        <!-- Our Clients Heading -->
        <div class="clients-heading">
            <h2>
                Our <span>Clients</span>
            </h2>
        </div>


        <!-- Client Categories -->
        <div class="clients-grid">

            <!-- Banks -->
            <div class="client-category">

                <div class="category-title">
                    Banks
                </div>

                <ul>
                    <li>NCBA Bank</li>
                    <li>ABSA Bank</li>
                    <li>National Bank of Kenya</li>
                    <li>Commercial International Bank</li>
                    <li>Mayfair Bank</li>
                    <li>My Credit Limited</li>
                    <li>Incio Finance</li>
                    <li>Meru Sacco</li>
                    <li>Tiba Sacco</li>
                    <li>Agricultural Finance Corporation</li>
                </ul>

            </div>


            <!-- NGOs & GOs -->
            <div class="client-category">

                <div class="category-title">
                    NGO's and G.O's
                </div>

                <ul>
                    <li>Action for Children in Conflict</li>
                    <li>Girl Child Network</li>
                    <li>Kenya Alliance Against Malaria</li>
                    <li>Alliance for Protection of Children</li>
                    <li>Street Families Rehabilitation Trust Fund</li>
                    <li>Ministry of Labour and Social Protection</li>
                </ul>

            </div>


            <!-- Insurance Companies -->
            <div class="client-category">

                <div class="category-title">
                    Insurance Companies
                </div>

                <ul>
                    <li>Monarch Insurance Company</li>
                    <li>Definite Insurance Company</li>
                    <li>Directline Insurance Company</li>
                    <li>CIC Insurance Company</li>
                    <li>Pioneer Insurance Company</li>
                    <li>Madison Insurance Company</li>
                </ul>

            </div>


            <!-- Companies -->
            <div class="client-category">

                <div class="category-title">
                    Companies
                </div>

                <ul>
                    <li>Njuca Consolidated Limited</li>
                    <li>Company</li>
                    <li>Ruaraka Auto Garage</li>
                </ul>

            </div>

        </div>


        <!-- =================================================
             TESTIMONIALS
             ================================================= -->

        <div class="testimonials-heading">

            <span>What Our Clients Say</span>

            <h3>
                Trusted by Clients, Built on Results
            </h3>

        </div>


        <div class="client-testimonials">

            <!-- Testimonial 1 -->
            <div class="testimonial-card">

                <p>
                    “From start to finish, the process was seamless.
                    The team listened to our needs, delivered exactly
                    what we wanted, and provided exceptional support
                    every step of the way.”
                </p>

                <div class="testimonial-name">
                    Ruaraka Auto Garage
                </div>

            </div>


            <!-- Testimonial 2 -->
            <div class="testimonial-card">

                <p>
                    “This law firm's commitment goes beyond legal
                    representation—they are true partners in our mission.
                    Their legal services have empowered our organization
                    to create a greater impact in the communities we serve.”
                </p>

                <div class="testimonial-name blue">
                    Action for Children in Conflict
                </div>

            </div>


            <!-- Testimonial 3 -->
            <div class="testimonial-card">

                <p>
                    “We have had the privilege of working alongside this
                    firm in several matters and have consistently been
                    impressed by their professionalism, legal expertise,
                    and commitment to achieving outstanding results
                    for their clients.”
                </p>

                <div class="testimonial-name">
                    Corporate Client
                </div>

            </div>

        </div>

    </div>

</section>