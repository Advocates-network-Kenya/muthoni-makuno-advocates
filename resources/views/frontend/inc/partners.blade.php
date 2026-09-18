<style>

/* =========================================
   OUR ADVOCATES
========================================= */

.partners-section {
    position: relative;
    padding: 70px 0 75px;
    background: #f8f9fb;
}


/* =========================================
   SECTION HEADER
========================================= */

.section-header {
    max-width: 720px;
    margin: 0 auto 45px;
}

.section-kicker {
    display: inline-block;
    color: #880422;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 8px;
}

.section-header h2 {
    color: #880422;
    font-size: 38px;
    font-weight: 800;
    margin-bottom: 12px;
}

.section-header p {
    color: #6c757d;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 0;
}


/* =========================================
   PARTNER CARD
========================================= */

.partner-card {
    height: 100%;
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;

    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.07);

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
}

.partner-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}


/* =========================================
   IMAGE
   NO MAROON OVERLAY
========================================= */

.partner-image-wrapper {
    position: relative;
    height: 310px;
    overflow: hidden;
    background: #eeeeee;
}

.partner-image {
    width: 100%;
    height: 100%;

    object-fit: cover;
    object-position: center top;

    display: block;

    transition: transform 0.45s ease;
}

.partner-card:hover .partner-image {
    transform: scale(1.04);
}


/* =========================================
   CARD CONTENT
========================================= */

.partner-content {
    padding: 24px 22px 27px;
}

.partner-content h4 {
    color: #2f3033;
    font-size: 20px;
    font-weight: 700;

    margin: 0 0 10px;
}


/* =========================================
   PARTNER ROLE
========================================= */

.partner-role {
    display: inline-block;

    color: #880422;
    background: #f9e9ed;

    border: 1px solid #efd0d8;

    padding: 6px 15px;

    border-radius: 30px;

    font-size: 12px;
    font-weight: 700;

    line-height: 1.3;

    text-transform: uppercase;
    letter-spacing: 0.5px;

    margin-bottom: 15px;

    /* Make sure text stays visible */
    opacity: 1;
    visibility: visible;
}


/* =========================================
   DESCRIPTION
========================================= */

.partner-content p {
    color: #727b87;

    font-size: 14px;
    line-height: 1.65;

    margin-bottom: 18px;

    min-height: 46px;
}


/* =========================================
   READ MORE
========================================= */

.partner-link {
    display: inline-flex;

    align-items: center;
    gap: 7px;

    color: #880422;

    font-size: 14px;
    font-weight: 700;

    text-decoration: none;

    transition: all 0.3s ease;
}

.partner-link:hover {
    color: #ff9f1c;
    gap: 11px;
    text-decoration: none;
}


/* =========================================
   MAIN BUTTON
========================================= */

.team-button-wrapper {
    margin-top: 25px;
}

.cta-button {
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

    text-decoration: none !important;

    box-shadow: 0 7px 18px rgba(136, 4, 34, 0.18);

    transition: all 0.3s ease;
}

.cta-button:hover {
    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(136, 4, 34, 0.25);
}


/* =========================================
   EMPTY STATE
========================================= */

.empty-team {
    padding: 40px 20px;
}

.empty-team i {
    font-size: 40px;
    color: #880422;
    margin-bottom: 15px;
}

.empty-team p {
    color: #727b87;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 991px) {

    .partners-section {
        padding: 60px 0;
    }

    .section-header h2 {
        font-size: 32px;
    }

    .partner-image-wrapper {
        height: 300px;
    }
}


@media (max-width: 767px) {

    .partners-section {
        padding: 50px 0;
    }

    .section-header {
        margin-bottom: 30px;
    }

    .section-header h2 {
        font-size: 28px;
    }

    .section-header p {
        font-size: 14px;
    }

    .partner-card {
        max-width: 420px;
        margin-left: auto;
        margin-right: auto;
    }

    .partner-image-wrapper {
        height: 330px;
    }
}


@media (max-width: 480px) {

    .section-header h2 {
        font-size: 25px;
    }

    .partner-image-wrapper {
        height: 300px;
    }

    .partner-content {
        padding: 22px 18px 25px;
    }

}

</style>
<!-- ================= OUR ADVOCATES ================= -->
<section class="team partners-section">
    <div class="container">

        <!-- Section Header -->
        <div class="section-header text-center">
            <span class="section-kicker">OUR LEGAL TEAM</span>

            <h2>Meet Our Advocates</h2>

            <p>
                Meet the experienced advocates behind MMK Advocates LLP,
                committed to providing trusted and professional legal solutions.
            </p>
        </div>

        <!-- Advocates -->
        <div class="row justify-content-center">

            @forelse ($partners as $partner)

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">

                    <div class="partner-card">

                        <!-- Image -->
                        <div class="partner-image-wrapper">

                            <img src="{{ asset('storage/' . $partner->image) }}"
                                 class="partner-image"
                                 alt="{{ $partner->name }}">

                        </div>

                        <!-- Content -->
                        <div class="partner-content text-center">

                            <h4>{{ $partner->name }}</h4>

                            <!-- Partner Role -->
                            <div class="partner-role">
                                {{ ucfirst($partner->role) }}
                            </div>

                            <p>
                                {{ Str::limit($partner->content, 100) }}
                            </p>

                            <a href="{{ route('team.details', $partner->slug) }}"
                               class="partner-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">
                    <div class="empty-team">
                        <i class="fas fa-users"></i>
                        <p>Partner profiles coming soon.</p>
                    </div>
                </div>

            @endforelse

        </div>

        <!-- View All -->
        <div class="text-center team-button-wrapper">
            <a class="cta-button" href="{{ route('ourteam') }}">
                Meet All Our Advocates
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>


