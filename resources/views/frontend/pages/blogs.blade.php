@extends('frontend.layouts.base')

@section('content')
 @include('frontend.inc.banner')

{{-- three column blog section cards --}}
<style>
    /* Blog Card Styles */
    .blog-section {
        padding: 90px 0;
        background: linear-gradient(135deg, #f8f9fc 0%, #eef2ff 40%, #f3f6ff 100%);
    }

    .blog-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .blog-card-image {
        position: relative;
        width: 100%;
        height: 220px;
        overflow: hidden;
    }

    .blog-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .blog-card:hover .blog-card-image img {
        transform: scale(1.05);
    }

    .blog-card-date {
        position: absolute;
        bottom: 12px;
        left: 12px;
        background: #880422;
        color: #ffffff;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 20px;
        z-index: 2;
    }

    .blog-card-date i {
        margin-right: 6px;
        color: #ffbd59;
    }

    .blog-card-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .blog-card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #880422;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .blog-card-subheading {
        font-size: 0.95rem;
        color: #555555;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .blog-card-content .cta-button-light {
        align-self: flex-start;
        padding: 10px 20px;
        font-size: 0.9rem;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .blog-card-content .cta-button-light i {
        margin-left: 6px;
        font-size: 0.8rem;
    }

    .blog-card-content .cta-button-light:hover {
        text-decoration: none;
    }
</style>

<section class="blog-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>News & Articles</h2>
            <p>Insights, updates and legal perspectives from the MMK Advocates LLP team.</p>
        </div>

        <div class="row">
            {{-- Blog Card 1 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <img src="https://picsum.photos/seed/mmkblog1/640/420" alt="Understanding Employment Contracts">
                        <span class="blog-card-date"><i class="fa fa-calendar-alt"></i>Mar 12, 2026</span>
                    </div>
                    <div class="blog-card-content">
                        <h3 class="blog-card-title">Understanding Employment Contracts in Kenya</h3>
                        <p class="blog-card-subheading">A practical guide to the key clauses every employment contract should include, and the rights employees and employers must know.</p>
                        <a href="#" class="cta-button-light">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- Blog Card 2 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <img src="https://picsum.photos/seed/mmkblog2/640/420" alt="Navigating Family Law Matters">
                        <span class="blog-card-date"><i class="fa fa-calendar-alt"></i>Feb 28, 2026</span>
                    </div>
                    <div class="blog-card-content">
                        <h3 class="blog-card-title">Navigating Family Law Matters with Confidence</h3>
                        <p class="blog-card-subheading">From custody disputes to succession planning, learn how a family lawyer can help you protect what matters most during difficult seasons.</p>
                        <a href="#" class="cta-button-light">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- Blog Card 3 --}}
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <img src="https://picsum.photos/seed/mmkblog3/640/420" alt="Starting a Business">
                        <span class="blog-card-date"><i class="fa fa-calendar-alt"></i>Feb 05, 2026</span>
                    </div>
                    <div class="blog-card-content">
                        <h3 class="blog-card-title">Starting a Business? The Legal Checklist You Need</h3>
                        <p class="blog-card-subheading">Registration, permits, compliance and contracts — the essential legal steps every entrepreneur in Kenya should complete before opening their doors.</p>
                        <a href="#" class="cta-button-light">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 @endsection