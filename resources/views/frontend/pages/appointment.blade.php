@extends('frontend.layouts.base')

@section('content')
    {{-- <style>
        .appointment {
            padding: 90px 0;
        }
        .appointment-form {
            padding: 45px;
            background: #f3f6ff;
            border-radius: 10px;
        }
        .appointment-form .form-control {
            height: 45px;
            padding: 10px 15px;
            font-size: 14px;
            border: 1px solid #ddd;
        }
        .appointment-form textarea.form-control {
            height: auto;
        }
        .appointment-form .btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            color: #ffffff;
            background: #880411;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .appointment-form .btn:hover {
            background: #6d030d;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

    @include('frontend.inc.banner')
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
                                        <option value="corporate-law">Corporate Law</option>
                                        <option value="family-law">Family Law</option>
                                        <option value="commercial-litigation">Commercial Litigation</option>
                                        <option value="real-estate-conveyancing">Real Estate & Conveyancing</option>
                                        <option value="employment-law">Employment Law</option>
                                        <option value="intellectual-property">Intellectual Property</option>
                                        <option value="criminal-defense">Criminal Defense</option>
                                        <option value="civil-rights">Civil Rights</option>
                                        <option value="immigration-law">Immigration Law</option>
                                        <option value="tax-law">Tax Law</option>    
                                        <option value="other">Other</option>
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
                                    <button class="btn" type="submit">Submit Appointment Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

<style>
    .appointment {
        padding: 100px 0;
        background: linear-gradient(135deg, #f8f9fc 0%, #eef2ff 40%, #f3f6ff 100%);
        position: relative;
        overflow: hidden;
    }

    .appointment::before,
    .appointment::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        z-index: 0;
    }

    .appointment::before {
        width: 320px;
        height: 320px;
        background: rgba(136, 4, 17, 0.08);
        top: -140px;
        left: -120px;
    }

    .appointment::after {
        width: 260px;
        height: 260px;
        background: rgba(136, 4, 17, 0.05);
        bottom: -100px;
        right: -80px;
    }

    .appointment .container {
        position: relative;
        z-index: 2;
    }

    .section-header h2 {
        font-weight: 700;
        color: #222;
    }

    .section-header p {
        color: #666;
        max-width: 650px;
        margin: 0 auto;
    }

    .appointment-form {
        background: #fff;
        padding: 45px;
        border-radius: 18px;
        border: 1px solid rgba(0,0,0,.05);
        box-shadow: 0 20px 50px rgba(0,0,0,.08);
    }

    .appointment-form .form-control {
        height: 52px;
        border-radius: 8px;
        border: 1px solid #d8dee9;
        padding: 12px 15px;
        font-size: 15px;
        transition: all .3s ease;
    }

    .appointment-form textarea.form-control {
        height: 150px;
        resize: vertical;
    }

    .appointment-form .form-control:focus {
        border-color: #880411;
        box-shadow: 0 0 0 .2rem rgba(136,4,17,.15);
    }

    .appointment-form .btn {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        letter-spacing: .5px;
        color: #fff;
        background: linear-gradient(135deg, #880411, #b80b1f);
        transition: .3s ease;
    }

    .appointment-form .btn:hover {
        background: linear-gradient(135deg, #6d030d, #980919);
        transform: translateY(-2px);
        box-shadow: 0 12px 25px rgba(136,4,17,.25);
    }

    @media (max-width:768px){
        .appointment{
            padding:70px 0;
        }

        .appointment-form{
            padding:30px;
        }
    }
</style>

@include('frontend.inc.banner')

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



@endsection