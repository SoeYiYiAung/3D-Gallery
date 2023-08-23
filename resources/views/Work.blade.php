@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row work">
            <h4 class="">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit magni sequi maiores nulla.
            </h4>
        </div>
        
        <div class="row">
            <!-- <img src="photo/i2.jpg " height="700px" > -->
            <div class="" style="text-align: center; background-image: url('{{ asset('photo/i1.jpg') }}'); height: 600px; color: white;"  >
                <div style="height: 300px;"></div>
            <h1> COFFEE SHOP</h1><br>
            <h5>Yangon, Myanmar</h5><br>
            <a href="{{route('work-detail')}}" class="btn btn-secondary" style="color:white;">Learn More</a>
            </div>
        </div>

        <div class="row">
            <!-- <img src="photo/i2.jpg " height="700px" > -->
            <div class="" style="text-align: center; background-image: url('{{ asset('photo/i6.jpg') }}'); height: 600px; color: white;"  >
                <div style="height: 300px;"></div>
            <h1> COFFEE SHOP</h1><br>
            <h5>Yangon, Myanmar</h5><br>
            <div class="btn btn-secondary" style="color:white;">Learn More</div>
            </div>
        </div>

        <div class="row">
            <!-- <img src="photo/i2.jpg " height="700px" > -->
            <div class="" style="text-align: center; background-image: url('{{ asset('photo/i2.jpg') }}'); height: 600px; color: white;"  >
                <div style="height: 300px;"></div>
            <h1> COFFEE SHOP</h1><br>
            <h5>Yangon, Myanmar</h5><br>
            <div class="btn btn-secondary" style="color:white;">Learn More</div>
            </div>
        </div>

        <div class="row">
            <!-- <img src="photo/i2.jpg " height="700px" > -->
            <div class="" style="text-align: center; background-image: url('{{ asset('photo/i3.jpg') }}'); height: 600px; color: white;"  >
                <div style="height: 300px;"></div>
            <h1> COFFEE SHOP</h1><br>
            <h5>Yangon, Myanmar</h5><br>
            <div class="btn btn-secondary" style="color:white;">Learn More</div>
            </div>
        </div>

        <div class="row">
            <!-- <img src="photo/i2.jpg " height="700px" > -->
            <div class="" style="text-align: center; background-image: url(photo/i4.jpg); height: 600px; color: white;"  >
                <div style="height: 300px;"></div>
            <h1> COFFEE SHOP</h1><br>
            <h5>Yangon, Myanmar</h5><br>
            <div class="btn btn-secondary" style="color:white;">Learn More</div>
            </div>
        </div>
    </div> 

@endsection    