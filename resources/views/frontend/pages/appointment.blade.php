@extends('frontend.layouts.base')

@section('content')
    <style>
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
                                    <button class="btn" type="submit">Submit Appointment Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection