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

                <div class="appointment-form">

                    <form action="" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <input type="text"
                                       name="name"
                                       class="form-control"
                                       placeholder="Full Name"
                                       required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="email"
                                       name="email"
                                       class="form-control"
                                       placeholder="Email Address"
                                       required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="tel"
                                       name="phone"
                                       class="form-control"
                                       placeholder="Phone Number"
                                       required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <select name="practice_area"
                                        class="form-control"
                                        required>

                                    <option value="">Select Practice Area</option>
                                    <option>Corporate Law</option>
                                    <option>Family Law</option>
                                    <option>Commercial Litigation</option>
                                    <option>Real Estate & Conveyancing</option>
                                    <option>Employment Law</option>
                                    <option>Intellectual Property</option>
                                    <option>Criminal Defense</option>
                                    <option>Civil Rights</option>
                                    <option>Immigration Law</option>
                                    <option>Tax Law</option>
                                    <option>Other</option>

                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <select name="day"
                                        class="form-control"
                                        required>
                                    <option value="">Preferred Day</option>
                                    @for($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <select name="month"
                                        class="form-control"
                                        required>
                                    <option value="">Preferred Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="time"
                                       name="appointment_time"
                                       class="form-control"
                                       required>
                            </div>

                            <div class="col-12 mb-4">
                                <textarea name="message"
                                          class="form-control"
                                          placeholder="Brief description of your legal matter..."
                                          required></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn">
                                    <i class="fas fa-calendar-check me-2"></i>
                                    Submit Appointment Request
                                </button>
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
    @include('frontend.inc.partners')
@endsection
