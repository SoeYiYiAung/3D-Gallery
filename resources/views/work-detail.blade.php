@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row mt-5">
                    <h1 class="text-center">Coffee Shop</h1>
                    <img src="{{ asset('photo/i6.jpg') }}" width="100%" height="350px" class="mt-5">
                    <p class="about mt-5">
                        De teras was a project built with careful approach. We wanted to be able to perform and present all the emotions the client wanted in the render. The design was meant for it to be more than just a typical dinner date spot. In the render, we wanted to showcase the experience you will get in de teras. 
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="about mt-5">
                            Outdoor cafe’s offer outstanding views of the city from a higher perspective and we wanted to showcase and highlight the view. The view being one of the most attractive points of the design, we try to pay attention to that aspect too.
                        </p>
                        <p class="about mt-5">
                            This render was made through many approaches to obtain the mood we wanted to present. The separated blocks of dinner table, providing a sense of privacy and personalization. Water and spaces between dinner tables serves as a divider. 
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('photo/i6.jpg') }}" width="100%" height="350px" class="mt-5">
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('photo/i6.jpg') }}" width="100%" height="350px" class="mt-5">
                    <p class="about mt-5">
                        De teras was a project built with careful approach. We wanted to be able to perform and present all the emotions the client wanted in the render. The design was meant for it to be more than just a typical dinner date spot. In the render, we wanted to showcase the experience you will get in de teras. 
                    </p>
                </div>
                <div class="row mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="www.facebook/innoviz.com"><i class="fab fa-facebook">  Facebook</i></a> 
                        <a href="www.instragram.com"><i class="fab fa-instagram">  Instragram</i></a>
                        <a href="www.twiter.com"><i class="fab fa-twitter">  Twitter</i></a>
                    </div>
                </div>
                
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection