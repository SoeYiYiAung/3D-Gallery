@extends('layout.master')
@section('content')
    <!-- <div class="container">
        <video autoplay muted loop id="myVideo">
                <source src="rain.mp4" type="video/mp4">
        </video>
    </div> -->
    <span>{{$qualities}}</span>
    <span>{{$services}}</span>
    <span>{{$partners}}</span>

    <div class="carousel slide" data-bs-ride="carousel" id="myslider">
        <ol class="carousel-indicators">
            <li data-bs-target="#myslider" data-bs-slide="0" active></li>
            <li data-bs-target="#myslider" data-bs-slide="1"></li>
            <li data-bs-target="#myslider" data-bs-slide="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('photo/bg.jpg') }}" class="d-block w-100" height="700px">
                <div class="carousel-caption">
                    <h1>InnoViz</h1>
                    <p>Welcome from  our Architectural Studio </p>
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12 col-lg-12">
                            
                        </div>
                        </div>
                        </div>
                </div>
            </div>

            <div class="carousel-item ">
                <img src="{{ asset('photo/bg1.jpg') }}" class="d-block w-100" height="700px">
                <div class="carousel-caption">
                    <!-- <h2 style="color: slategray;">Second Slide</h2>
                    <p>This is a description for second slide. </p>
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12 col-lg-12">
                            
                        </div>
                        </div>
                        </div> -->
                </div>
            </div>

            <div class="carousel-item ">
                <img src="{{ asset('photo/bg2.jpg') }}" class="d-block w-100" height="700px">
                <div class="carousel-caption">
                    <!-- <h2 style="color: slategray;">Third Slide</h2>
                    <p>This is a description for third slide. </p>
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12 col-lg-12">
                            
                        </div>
                        </div>
                        </div> -->
                </div>
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#myslider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myslider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="mt-5">
        <br>
        <h1 style="text-align: center; font-weight: bold;font-style: normal">
            Who know exactly<br> how to do things good, if not great.
            <div style="width: 150px; margin: auto; ;"><br><hr></div>
        </h1>
    </div>
    

    <div class="container">
        <div class="row mt-4 mb-4"> 
            <div class="col-md-6">                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('photo/qa.png') }}" height="150px"  width="150px" title="QUALITY ASSURANCE">
                        </div>
                        <div class="col-md-6">
                            <h4>QUALITY ASSURANCE  </h4>
                            <p>Sleep tight, we’ll make sure you only receive best-in-class renders.</p>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-6 mt-4">                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('photo/cf.png') }}" height="150px"  width="150px" title="QUALITY ASSURANCE">
                        </div>
                        <div class="col-md-6">
                            <h4>CONFIDENTIALITY</h4>
                            <p>You get to choose who knows what. Privacy means business.</p>
                        </div>
                    </div>
                </div>                
            </div> 
            <div class="col-md-6 mt-4">                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('photo/wf.png') }}" height="150px"  width="150px" title="QUALITY ASSURANCE">
                        </div>
                        <div class="col-md-6">
                            <h4>WORRY-FREE</h4>
                            <p>Relax, you can count on us. Besides, being on-time is in our DNA. </p>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-md-6 mt-4">                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('photo/rs.png') }}" height="150px"  width="150px" title="QUALITY ASSURANCE">
                        </div>
                        <div class="col-md-6">
                            <h4>RESPONSIVE</h4>
                            <p>We are here, in standby mode, whenever you need a hand.</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 mt-4">                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="photo/qa.png" height="150px"  width="150px" title="QUALITY ASSURANCE">
                        </div>
                        <div class="col-md-6">
                            <h4>OWN RENDER FARMS</h4>
                            <p>Plant your work in our farm, it will grow into a 3D masterpiece.</p>
                        </div>
                    </div>
                </div>                
            </div>     
        </div> 
    </div>

    <div class="mb-5 bg-dark">
        <h1 class="like text-light mt-5 mb-5">
            <br>Like These.....
            <div class="hr-line"><hr></div>
        </h1>
        <div class="carousel slide" data-bs-ride="carousel" id="myslider1">
            <ol class="carousel-indicators">
                <li data-bs-target="#myslider1" data-bs-slide="0" active></li>
                <li data-bs-target="#myslider1" data-bs-slide="1"></li>
                <li data-bs-target="#myslider1" data-bs-slide="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="position: relative;">
                    <img src="{{ asset('photo/i8.jpg') }}" class="d-block w-100" height="700px">
                    <div class="carousel-caption inner-carousel" >
                        <h1>Hotel Name</h1>
                        <h5 class="mt-5">Architect - Ahn Hyo Seop<h5>
                        <h5 class="mt-5">Location - Tokyo, Japan</h5>
                        <a href="{{route('work-detail')}}" class="btn btn-secondary mt-5" style="color:white;">Learn More</a>
                    </div>
                </div>                                
        
                <div class="carousel-item" style="position: relative;">
                    <img src="{{ asset('photo/i9.jpg') }}" class="d-block w-100" height="700px">
                    <div class="carousel-caption inner-carousel" >
                        <h1>Hotel Name</h1>
                        <h5 class="mt-5">Architect - Ahn Hyo Seop<h5>
                        <h5 class="mt-5">Location - Tokyo, Japan</h5>
                        <a href="{{route('work-detail')}}" class="btn btn-secondary mt-5" style="color:white;">Learn More</a>
                    </div>
                </div>
        
                <div class="carousel-item" style="position: relative;">
                    <img src="{{ asset('photo/i10.jpg') }}" class="d-block w-100 mt-5" height="700px">
                    <div class="carousel-caption inner-carousel" >
                        <h1>Hotel Name</h1>
                        <h5 class="mt-5">Architect - Ahn Hyo Seop<h5>
                        <h5 class="mt-5">Location - Tokyo, Japan</h5>
                        <a href="{{route('work-detail')}}" class="btn btn-secondary" style="color:white;">Learn More</a>
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#myslider1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myslider1" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        

        <div class="container">
            <div class="row service">
                <h1 class="  mt-5">
                    Services
                    <div style="width: 75px; margin: auto; ;"><hr></div>
                </h1>
                <div class="col-md-4 mt-5">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <img src="photo/Still.png" height="100px"  width="100px">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row">
                        <h2 align="center">STILL </h2>
                        <p align="center">We got you covered with highest quality stills for both 3D interior and 3D exterior. </p>
                    </div>
                </div>
    
                <div class="col-md-4 mt-5">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <img src="photo/Animations.png" height="100px"  width="100px">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row">
                        <h2 align="center">ANIMATIONS </h2>
                        <p align="center">Everybody loves 3D animations. Make 3D. Animate it. You’ll get love. You’ll get love. </p>
                    </div>
                </div> 
    
                <div class="col-md-4 mt-5">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <img src="photo/VR.png" height="100px"  width="100px">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row">
                        <h2 align="center"> VR</h2>
                        <p align="center">You can’t get any more realistic experience with 360 panoramic images and Virtual Reality gadgets, virtually.  </p>
                    </div>
                </div> 
    
                <div class="col-sm-12">
                    <div class="mt-5 mb-5">
                        <h5 align="center" ><a href="{{ route('service') }}" class="btn btn-light">Find out more</a></h5>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1 class="partner mt-5 mb-5">
                Working with...
                <div class="hr-line"><hr></div>
            </h1>
        </div>
        <div class="row  mt-1 mb-2 partner">
            <div class="col-md-3 col-sm-3 mt-2">
                <img src="photo/qa.png" height="150px"  width="150px" title="QUALITY ASSURANCE">
            </div>
            <div class="col-md-3 col-sm-3 mt-2">
                <img src="photo/qa.png" height="150px"  width="150px" title="QUALITY ASSURANCE">   
            </div>
            <div class="col-md-3 col-sm-3 mt-2">
                <img src="photo/qa.png" height="150px"  width="150px" title="QUALITY ASSURANCE">
            </div>
            <div class="col-md-3 col-sm-3 mt-2">
                <img src="photo/qa.png" height="150px"  width="150px" title="QUALITY ASSURANCE">
            </div>
            <div class="col-md-3 col-sm-3 mt-2">
                <img src="photo/qa.png" height="150px"  width="150px" title="QUALITY ASSURANCE">   
            </div>
            <div class="col-md-3 col-sm-3 mt-2">
                <img src="photo/qa.png" height="150px"  width="150px" title="QUALITY ASSURANCE">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mt-5">
                <h6 class="partner-font">“Our architectural projects at Nikken Sekkei are quite complex, but with 2G Studio’s easy dialogue and no difficulties.
                    2G Studio make themselves 
                    always available so they were able to answer our questions with no time delay. All and all, a very smooth experience
                </h6>
                <h5>— Masaaki Yamada, General Manager/Art Director, <br> Nikken Sekkei</h5>
            </div>
            <div class="col-md-6 mt-5">
                <h6 class="partner-font">“Our architectural projects at Nikken Sekkei are quite complex, but with 2G Studio’s easy dialogue and no difficulties.
                    2G Studio make themselves 
                always available so they were able to answer our questions with no time delay. All and all, a very smooth experience
            </h6>
            <h5>— Masaaki Yamada, General Manager/Art Director, <br> Nikken Sekkei</h5>
            </div>
            <div class="col-md-6 mt-5">
                <h6 class="partner-font">“Our architectural projects at Nikken Sekkei are quite complex, but with 2G Studio’s easy dialogue and no difficulties.
                    2G Studio make themselves 
                    always available so they were able to answer our questions with no time delay. All and all, a very smooth experience
                </h6>
                <h5>— Masaaki Yamada, General Manager/Art Director, <br> Nikken Sekkei</h5>
            </div>
            <div class="col-md-6 mt-5">
                <h6 class="partner-font">“Our architectural projects at Nikken Sekkei are quite complex, but with 2G Studio’s easy dialogue and no difficulties.
                    2G Studio make themselves 
                always available so they were able to answer our questions with no time delay. All and all, a very smooth experience
            </h6>
            <h5>— Masaaki Yamada, General Manager/Art Director, <br> Nikken Sekkei</h5>
            </div>
        </div>
    </div>

@endsection