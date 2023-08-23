@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row work">
            <h4 class="">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit magni sequi maiores nulla.
            </h4>
        </div>
    </div>

    <div class="mb-5 bg-dark">
        <div class="container">
            <div class="row service">

                <div class="col-md-6 mt-5 mb-5  d-flex justify-content-center align-items-center">
                    <img src="{{ asset('photo/Still.png') }}" height="70%"  width="40%">
                </div>
                <div class="col-md-6 mt-5 mb-5">
                    <h2 align="center">STILL</h2>
                    <p align="center">
                        We got you covered with the highest quality stills for both 3D interior and 3D exterior.
                        We got you covered with the highest quality stills for both 3D interior and 3D exterior.
                        We got you covered with the highest quality stills for both 3D interior and 3D exterior.
                    </p>
                    <div class="mt-5 mb-5">
                        <h5 align="center"><a href="findoutmore.php" class="btn btn-light btn-block">View Work</a></h5>
                    </div>
                </div>
                
                <div class="col-md-6 mt-5 mb-5">
                    <h2 align="center">ANIMATIONS</h2>
                    <p align="center">
                        Everybody loves 3D animations. Make 3D. Animate it. You’ll get love. You’ll get love.
                        Everybody loves 3D animations. Make 3D. Animate it. You’ll get love. You’ll get love.
                        Everybody loves 3D animations. Make 3D. Animate it. You’ll get love. You’ll get love.
                    </p>
                    <div class="mt-5 mb-5">
                        <h5 align="center"><a href="findoutmore.php" class="btn btn-light btn-block">View Animation</a></h5>
                    </div>
                </div>
                
                <div class="col-md-6 mt-5 mb-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('photo/Animations.png') }}" height="70%" width="40%">
                </div>
                
                <div class="col-md-6 mt-5 mb-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('photo/VR.png') }}" height="70%" width="40%">
                </div>
                
                <div class="col-md-6 mt-5 mb-5">
                    <h2 align="center">VR</h2>
                    <p align="center">
                        You can’t get any more realistic experience with 360 panoramic images and Virtual Reality gadgets, virtually.
                        You can’t get any more realistic experience with 360 panoramic images and Virtual Reality gadgets, virtually.
                        You can’t get any more realistic experience with 360 panoramic images and Virtual Reality gadgets, virtually.
                    </p>
                    <div class="mt-5 mb-5">
                        <h5 align="center"><a href="findoutmore.php" class="btn btn-light btn-block">View VR</a></h5>
                    </div>
                </div>                

            </div>
        </div>    
    </div>

@endsection   