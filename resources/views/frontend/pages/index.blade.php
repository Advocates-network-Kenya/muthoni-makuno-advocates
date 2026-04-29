@extends('frontend.layouts.base')

@section('content')
    @include('frontend.inc.slider')
    @include('frontend.inc.aboutsection')
    @include('frontend.inc.services')
    {{-- apointment --}}
    <div class="appointment">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Book an Appointment</h2>
                <p>Schedule a professional consultation with our legal experts at your convenience.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="appointment-form shadow-sm">
                        <form>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <select class="form-control">
                                        <option selected disabled>Select Practice Area</option>
                                        <option>Corporate Law</option>
                                        <option>Family Law</option>
                                        <option>Commercial Litigation</option>
                                        <option>Real Estate & Conveyancing</option>
                                        <option>Employment Law</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <input type="date" class="form-control" title="Preferred Date" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <input type="time" class="form-control" title="Preferred Time" required>
                                </div>
                                <div class="col-12 form-group mb-4">
                                    <textarea class="form-control" rows="4" placeholder="Brief description of your legal requirements" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="cta-button border-0" type="submit">Submit Appointment Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end apointment--}}
    @include('frontend.inc.topfeature')
    <div class="row">
        <div class="col-12 text-center mt-4">
            <a class="cta-button" href="{{ route('ourteam') }}">Meet Our Team</a>
        </div>
    </div>
@endsection
