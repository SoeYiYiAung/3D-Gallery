@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row work">
            <h1>Virtual Reality Tours</h1>
        </div>

        <div class="row" style="background-image: url('{{ asset('photo/still4.jpg') }}');  height: 600px; color: white;">            
            <div class="inner-vr">
                <h2 class="mt-3">360 VR TOUR</h2>
                <div class="col-md-12 d-flex justify-content-center mt-3">
                    <a href="{{route('vr-view')}}" class="btn btn-secondary" style="color:white;">View Full Project</a>
                </div>
            </div>
        </div>
    </div>

@endsection