@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('photo/i17.jpg') }}" width="100%" height="350px" class="mt-5">
            </div>
            <div class="col-md-8 mt-5">
                <h3 class="about">3D Architectural Visualization Services: Animation Costs and Team Dynamics</h3>
                <h6 class="about mt-5">August 23 , 2023</h6>
                <p class="about mt-5">
                    Embark on a journey through the multifaceted realm of 3D architectural visualization rendering services. Discover how the iterative preparation process goes beyond the initial blueprint, constantly refining every element. Uncover the art of patience as rendering times stretch into hours, producing mesmerizing visuals that capture light's dance. Amidst this, a small team of talented individuals collaborates, orchestrating a symphony of creativity and technology to bring design visions to life.
                </p>
                <div class="text-center">
                    <a href="{{ route('blog-section') }}" class="btn btn-light">Read More</a></li>
                </div>                
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('photo/i18.jpg') }}" width="100%" height="350px" class="mt-5">
            </div>
            <div class="col-md-8 mt-5">
                <h3 class="about">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam sed, adipisci maiores libero voluptatum aperiam.</h3>
                <h6 class="about mt-5">August 23 , 2023</h6>
                <p class="about mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quia molestias, consequatur, vel obcaecati qui adipisci quisquam veritatis, non quod praesentium nesciunt consectetur quidem libero pariatur recusandae sed sint nobis?</p>
                <!-- <button class="btn btn-light">Read More</button> -->
                <div class="text-center">
                    <button class="btn btn-light">Read More</button>
                </div>                
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('photo/i20.jpg') }}" width="100%" height="350px" class="mt-5">
            </div>
            <div class="col-md-8 mt-5">
                <h3 class="about">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam sed, adipisci maiores libero voluptatum aperiam.</h3>
                <h6 class="about mt-5">August 23 , 2023</h6>
                <p class="about mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quia molestias, consequatur, vel obcaecati qui adipisci quisquam veritatis, non quod praesentium nesciunt consectetur quidem libero pariatur recusandae sed sint nobis?</p>
                <!-- <button class="btn btn-light">Read More</button> -->
                <div class="text-center">
                    <button class="btn btn-light">Read More</button>
                </div>                
            </div>
        </div>
    </div>
@endsection    