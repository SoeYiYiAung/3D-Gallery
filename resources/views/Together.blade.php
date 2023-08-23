@extends('layout.master')
@section('content')

    <div class="container">
        <div class="row mt-5">
            <h1 class="letter">
                Book your FREE Consultation
                <hr class="hr-line">
            </h1>
            <p class="about mt-5">
                Discuss with us about your project so we can help you to reach your goal.<br>
                We also welcome you with coconut water in case you’re travelling in Bali.
            </p>
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
                            <label for="form-label">Mobile Phone</label>
                        </div>
                        <div class="col-md-6 mt-3">
                            <select class="form-select" name="ountry_code" id="country_code">
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-3">
                            <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="col-md-12 mt-5">
                            <input type="text" class="form-control justify-content-center" placeholder="Email" required>
                        </div>
                        <div class="col-md-12 mt-5">
                            <input type="text" class="form-control justify-content-center" placeholder="Subject" required>
                        </div>
                        <div class="col-md-12 mt-5">
                            <textarea rows="5" class="form-control justify-content-center" placeholder="Tell Us About Your Project" required></textarea>
                        </div> 
                        
                        <div class="col-md-12 mt-5">
                            <small class="mx-3">If you are already use 3D Visualization services before, please let us know the budget for your 3D Visualization services</small>
                            <select class="form-select mt-3" name="ountry_code" id="country_code">
                                <option value="">1-10</option>
                                <option value="">10-100</option>
                                <option value="">100-1000</option>
                                <option value="">1000-10000</option>
                                <option value="">10000-100000</option>
                                <option value="">100000-1000000</option>
                            </select>
                        </div>

                        <div class="col-md-12 mt-5">
                            <small class="mx-3">Please provide your availability time with the world time area, and we will confirm the date</small>
                            <textarea rows="5" class="form-control justify-content-center mt-3" placeholder="Consultation Date and Time" required></textarea>
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

@endsection