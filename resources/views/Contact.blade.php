@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row mt-5">
            <h1 class="letter">
                Get In Touch
                <hr class="hr-line">
            </h1>
            <p class="about mt-5">Hire us or ask us questions about our services.<br> We also welcome you with coconut water in case you’re travelling in Bali.</p>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 col-md-12">
                <form class="p-2 bg-light justify-content-center h-100">

                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 mt-5">
                            <input type="tel" name="lastname" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="col-md-12 mt-5">
                            <input type="text" class="form-control justify-content-center" placeholder="Company Name" required>
                        </div>
                        <div class="col-md-12 mt-5">
                            <input type="text" class="form-control justify-content-center" placeholder="Email" required>
                        </div>
                        <div class="col-md-12 mt-5">
                            <input type="text" class="form-control justify-content-center" placeholder="Subject" required>
                        </div>
                        <div class="col-md-12 mt-5">
                            <textarea rows="5" class="form-control justify-content-center" placeholder="Message" required></textarea>
                        </div>                    
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 d-flex justify-content-center">
                            <a class="btn btn-dark">Submit</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 d-flex justify-content-center">
                            <p style="text-align: center;">We respect your policity !</p>
                        </div>
                    </div>
                </form> 
            </div> 
        </div>

        <div class="row footer"> 
            <h1 class="letter mt-5"><i class="fa fa-map-marker-alt mx-2 fahome icon"></i>Location</h1>
            <hr class="hr-line">
            <div class="col-lg-12 col-md-12">
                <div class="iframe-container mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3819.4690928373498!2d96.2079551!3d16.8030691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193fc173675e5%3A0x45d1f10d578883a7!2sINNO%20VIZ!5e0!3m2!1sen!2smm!4v1692256436050!5m2!1sen!2smm" 
                        width="100%" height="500px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-md-12 mt-5 about">
                <i class="fa fa-map-marker-alt mx-2 fahome icon"></i>
                INNO VIZ Architectural Visualication Studio
                InnoViz Building, 4th Floor
                Aung Chan Thar St.1 ,
                Yangon Myanmar
                <br><br>
                <i class="fa fa-phone"></i>+95943136759 , +959421084894
            </div>  

            <div class="col-md-12 mt-1 mb-5 social">
                <div style="text-align: center; padding: 20px;">
                    <a href="https://www.facebook.com/innoviz.com" target="_blank" style="margin: 0 10px;">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" style="margin: 0 10px;">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com" target="_blank" style="margin: 0 10px;">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>                
            </div>
        </div>
    </div>

@endsection    