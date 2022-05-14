<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Job Seeker Registration</title>
</head>
<body class="registration jobseekerReg">
    @include('parts.background')
    <form class="registration-form" action="{{ route('storeJobSeekerAccount') }}" method="POST">
        @csrf
        <div class="section jobseeker-section-one">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>Personal Details</h1>
            <p>Please enter your personal details.</p>

            <div class="flex">
                <label class="half-width" for="first_name">
                    <input placeholder="First Name" type="text" id="first_name" name="first_name">
                </label>
    
                <label class="half-width" for="last_name">
                    <input placeholder="Last Name" type="text" id="last_name" name="last_name">
                </label>
            </div>

            <label for="contact_number">
                <input placeholder="Contact Number" type="tel" id="contact_number" name="contact_number">
            </label>

            <label for="email">
                <input placeholder="Email Address" type="email" id="email" name="email">
            </label>

            <label for="password">
                <input placeholder="Password" type="password" id="password" name="password">
            </label>

            <div class="section_navigation">
                <a href="/users/registration-index" class="btn btn-blue prev">Back</a>
                <button class="btn btn-blue next jobseeker-section-one-next">Next</button>
            </div>
        </div>

        <div class="section jobseeker-section-two">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>Address Details</h1>
            <p>Please enter your address details.</p>

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
                <button class="btn btn-blue back jobseeker-section-two-prev">Back</button>
                <button class="btn btn-blue next jobseeker-section-two-next">Next</button>
            </div>
        </div>

        <div class="section jobseeker-section-three">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>Career Type</h1>
            <p>Please enter the type of Job you would like to apply for.</p>

            <label for="career_type">
                <input type="text" id="career_type" name="career_type">
            </label>

            <div class="section_navigation">
                <button class="btn btn-blue back jobseeker-section-three-prev">Back</button>
                <button class="btn btn-blue next jobseeker-section-three-next">Next</button>
            </div>
        </div>

        <div class="section jobseeker-section-four">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>Skill Set</h1>
            <p>Please select your soft and technical skills.</p>

            
            <div class="skills-wrapper">
                @foreach($skills as $skill)
                    <div class="skill-list">
                        <label for="skillCheck{{$skill->skill_name}}">
                            <input class="skill-input" id="skillCheck{{$skill->id}}" type="checkbox" value="{{$skill->id}}" name='skill[]'/>
                            <p class="skill-name">{{$skill->skill_name}}</p>
                        </label>
                    </div>
                @endforeach
            </div>

            <div class="section_navigation">
                <button class="btn btn-blue back jobseeker-section-four-prev">Back</button>
                <button class="btn btn-blue next jobseeker-section-four-next">Next</button>
            </div>
        </div>

        <div class="section jobseeker-section-five">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>Years of Experience</h1>
            <p>How many years of experience have you worked in your profession?</p>

            <label for="years_of_experience">
                <input placeholder="Years of Experience" type="number" id="years_of_experience" name="years_of_experience">
            </label>

            <div class="section_navigation">
                <button class="btn btn-blue back jobseeker-section-five-prev">Back</button>
                <button class="btn btn-blue next jobseeker-section-five-next">Next</button>
            </div>
        </div>

        <div class="section education jobseeker-section-six">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>Education</h1>
            <p>Please your past education information.</p>

            <div class="education-wrapper">
                <div class="education-row">
                    <input id="place_of_institution" placeholder="Institution" type="text" name="place_of_institution">
                    <input id="education_type" placeholder="Course Type" type="text" name="education_type">
                    <input id="course_name" placeholder="Course Name" type="text" name="course_name">
                    <input id="results" placeholder="Result" type="text" name="results">

                    <div class="add-button-wrapper">
                        <button class="add-education-input">+</button>
                    </div>
                </div>
            </div>

            <div class="section_navigation">
                <button class="btn btn-blue back jobseeker-section-six-prev">Back</button>
                <button class="btn btn-blue next jobseeker-section-six-next">Next</button>
            </div>
        </div>

        <div class="section jobseeker-section-seven">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>Biography</h1>
            <p>Please write your biography here. NOTE: This is the main part of your application form so please be descriptive. Think about past achievements and why you are great at what you do.</p>
            <label for="biography">
                <textarea placeholder="Biography" id="biography" name="biography"></textarea>
            </label>

            <div class="section_navigation">
                <button class="btn btn-blue back jobseeker-section-seven-prev">Back</button>
                <button class="btn btn-blue next jobseeker-section-seven-next">Next</button>
            </div>
        </div>

        <div class="section jobseeker-section-eight">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>Hobbies & Activities</h1>
            <p>Do you have any hobbies, or participate in any regular activities? Please be descriptive as this will help the employer to get to know you.</p>
            <label for="hobby_description">
                <textarea placeholder="Hobbies & Activities" id="hobby_description" name="hobby_description"></textarea>
            </label>

            <div class="section_navigation">
                <button class="btn btn-blue back jobseeker-section-eight-prev">Back</button>
                <button class="btn btn-blue next jobseeker-section-eight-next">Next</button>
            </div>
        </div>
        
        <div class="section jobseeker-section-nine references">
            <div class="section-number">Section <span class="currentJobSection"></span>/<span class="totalJobSections"></div>
            <h1>References</h1>
            <p>Please enter past employment information</p>

            <div class="references-wrapper">
                <div class="reference-row">
                    <input id="previous_company_name" placeholder="Previous Company Name" type="text" name="previous_company_name">
                    <input id="employer_name" placeholder="Employer Name" type="text" name="employer_name">
                    <input id="employer_contact" placeholder="Employer Contact" type="text" name="employer_contact">
                    <input id="duration_worked" placeholder="Duration Worked" type="text" name="duration_worked">

                    <div class="add-button-wrapper">
                        <button class="add-reference-input">+</button>
                    </div>
                </div>
            </div>

            <div class="section_navigation">
                <button class="btn btn-blue back jobseeker-section-nine-prev">Back</button>
                <button type="submit" class="btn btn-blue">Register</button>
            </div>
        </div>
    </form>

</body>
<script src="{{ asset('js/app.js')}}"></script>
</html>