@extends('frontend.layouts.base')

@section('content')
    @include('frontend.inc.banner')
    @include('frontend.inc.services')
     <div class="row">
                <div class="col-12 text-center mt-4">
                    <a class="cta-button" href="{{ route('ourteam') }}">Our Team</a>
                </div>
            </div>
@endsection