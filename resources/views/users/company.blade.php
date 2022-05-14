<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Company Registration</title>
</head>
<body class="registration">
    @include('parts.background')
        <form class="registration-form company-reg-form" action="{{ route('storeCompanyAccount') }}" method="POST">
            @csrf
            <div class="section company-section-one">
                <div class="section-number">Section <span class="numberCompany"></span>/<span class="totalCompany"></div>
                <h1>Account Details</h1>
                <label for="email">
                    <input placeholder="Email Address" type="email" id="email" name="email">    
                </label>
                
                <label for="password">
                    <input placeholder="Password" type="password" id="password" name="password">
                </label>

                <div class="section_navigation">
                    <a class="btn btn-blue" href="/users/registration-index">Back</a>
                    <button class="btn btn-blue next company-section-one-next">Next</button>
                </div>
            </div>
    
            <div class="section company-section-two">
                <div class="section-number">Section <span class="numberCompany"></span>/<span class="totalCompany"></div>
                <h1>Company Information</h1>
                <p>Please enter your company information.</p>

                <label for="company_name">
                    <input placeholder="Company Name" type="text" id="company_name" name="company_name">
                </label>

                <label for="founded">
                    <input placeholder="Founded" type="text" id="founded" name="founded">
                </label>
          
                <label for="staff_capacity">
                    <input placeholder="Staff Number" type="number" id="staff_capacity" name="staff_capacity">
                </label>

                <div class="section_navigation">
                    <button class="btn btn-blue back company-section-two-prev">Back</button>
                    <button class="btn btn-blue next company-section-two-next">Next</button>
                </div>
            </div>
    
            <div class="section company-section-three">
                <div class="section-number">Section <span class="numberCompany"></span>/<span class="totalCompany"></div>
                <h1>Address Details</h1>
                <p>Please enter your company address information.</p>

                <label for="street_name">
                    <input placeholder="Street Name" type="text" id="street_name" name="street_name">
                </label>

                <label for="house_number">
                    <input placeholder="House Number" type="text" id="house_number" name="house_number">
                </label>

                <label for="postcode">
                    <input placeholder="Postcode" type="text" id="postcode" name="postcode">
                </label>

                <label for="city">
                    <input placeholder="City" type="text" id="city" name="city">
                </label>

                <label for="county">
                    <input placeholder="County" type="text" id="county" name="county">
                </label>

                <div class="section_navigation">
                    <button class="btn btn-blue back company-section-three-prev">Back</button>
                    <button type="submit" class="btn btn-blue">Register</button>
                </div>
            </div>  
        </form>
</body>
<script src="{{ asset('js/app.js')}}"></script>
</html>