@extends('frontend.layouts.base')
@section('content')
    @include('frontend.inc.banner')

    <div class="practice-details-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="practice-details-wrapper bg-white p-4 p-md-5 shadow-sm rounded mb-4">
                        <div class="practice-details-image mb-4">
                            <img src="{{ asset('storage/' . $practicearea->image) }}" alt="{{ $practicearea->title }}" class="img-fluid rounded shadow-sm w-100" style="max-height: 450px; object-fit: cover;">
                        </div>
                        <h1 class="display-5 fw-bold mb-4 text-dark">{{ $practicearea->title }}</h1>
                       
                        <hr class="my-4">
                        <div class="practice-content text-muted lh-lg">
                            {!! nl2br(e($practicearea->content)) !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar sticky-top" style="top: 100px;">
                        <div class="bg-white p-4 rounded shadow-sm mb-4">
                            <h4 class="fw-bold mb-4 border-bottom pb-2">Our Expertise</h4>
                            <div class="list-group list-group-flush">
                                @foreach($otherareas as $area)
                                    <a href="{{ route('practicearea.details', ['slug' => $area->slug]) }}" 
                                       class="list-group-item list-group-item-action border-0 px-0 d-flex align-items-center {{ $practicearea->id === $area->id ? 'text-primary fw-bold' : 'text-secondary' }}">
                                        <i class="fa fa-angle-right me-3 {{ $practicearea->id === $area->id ? 'text-primary' : 'text-muted opacity-50' }}"></i>
                                        {{ $area->title }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="bg-primary p-4 rounded shadow-sm text-white">
                            <h5 class="fw-bold">Professional Consultation</h5>
                            <p class="small mb-4 opacity-75">Need expert legal advice? Our team is ready to assist you with your legal matters.</p>
                            <a href="{{ route('contact') }}" class="btn btn-outline-light w-100">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection