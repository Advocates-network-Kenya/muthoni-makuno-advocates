@extends('frontend.layouts.base')

@section('content')
    @include('frontend.inc.banner')
   <style>
        .bg-maroon {
            background-color: #800000;
        }

        .text-maroon {
            color: #800000;
        }
        .bg-maroon:hover {
            background-color: #138419;
        }
   </style>
    <div class="team-details-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- Profile Sidebar -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm rounded overflow-hidden">
                        <div class="team-image">
                            <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="img-fluid w-100" style="height: 450px; object-fit: cover; object-position: top;">
                        </div>
                        <div class="card-body p-4 text-center">
                            <h2 class="h4 fw-bold mb-1 text-dark">{{ $team->name }}</h2>
                            <p class="text-primary text-uppercase small fw-bold mb-4">{{ $team->role }}</p>
                            
                            <div class="d-flex justify-content-center">
                                <div class="social-links">
                                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle mx-1"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle mx-1"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle mx-1"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-primary p-4 rounded shadow-sm text-white mt-4">
                        <h5 class="fw-bold mb-3 border-bottom pb-2 border-white border-opacity-25">Professional Contact</h5>
                        <div class="contact-details small">
                            <p class="mb-2 d-flex align-items-center">
                                <i class="fa fa-envelope me-3 opacity-75"></i> 
                                <span>{{ $team->email }}</span>
                            </p>
                            <p class="mb-0 d-flex align-items-center">
                                <i class="fa fa-phone-alt me-3 opacity-75"></i> 
                                <span>{{ $team->phone }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Biography and Experience -->
                <div class="col-lg-8">
                    <div class="bg-white p-4 p-md-5 shadow-sm rounded mb-4">
                        <h3 class="display-6 fw-bold mb-4 text-dark">About {{ $team->name }}</h3>
                        <hr class="my-4">
                        <div class="team-bio text-muted lh-lg">
                           <div class="bg-maroon rounded-pill text-center text-white p-3 mb-3"> {{ $team->qualifications }}</div>
                            {!! nl2br(e($team->content)) !!}
                        </div>
                        
                        <div class="mt-5 pt-4 border-top">
                            <a href="{{ route('ourteam') }}" class="btn btn-outline-primary px-4">
                                <i class="fa fa-chevron-left me-2 small"></i> View All Team Members
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection