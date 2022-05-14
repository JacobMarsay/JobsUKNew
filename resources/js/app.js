require('./bootstrap');

const companySections = document.querySelectorAll('.company-reg-form .section');
const jobRegSections = document.querySelectorAll('.registration-form .section');

const jobSectionOne = document.querySelector('.jobseeker-section-one');
const jobSectionTwo = document.querySelector('.jobseeker-section-two');
const jobSectionThree = document.querySelector('.jobseeker-section-three');
const jobSectionFour = document.querySelector('.jobseeker-section-four');
const jobSectionFive = document.querySelector('.jobseeker-section-five');
const jobSectionSix = document.querySelector('.jobseeker-section-six');
const jobSectionSeven = document.querySelector('.jobseeker-section-seven');
const jobSectionEight = document.querySelector('.jobseeker-section-eight');
const jobSectionNine = document.querySelector('.jobseeker-section-nine');

const jobSectionOneNext = document.querySelector('.jobseeker-section-one-next');
const jobSectionTwoNext = document.querySelector('.jobseeker-section-two-next');
const jobSectionThreeNext = document.querySelector('.jobseeker-section-three-next');
const jobSectionFourNext = document.querySelector('.jobseeker-section-four-next');
const jobSectionFiveNext = document.querySelector('.jobseeker-section-five-next');
const jobSectionSixNext = document.querySelector('.jobseeker-section-six-next');
const jobSectionSevenNext = document.querySelector('.jobseeker-section-seven-next');
const jobSectionEightNext = document.querySelector('.jobseeker-section-eight-next');

const jobSectionTwoPrev = document.querySelector('.jobseeker-section-two-prev');
const jobSectionThreePrev = document.querySelector('.jobseeker-section-three-prev');
const jobSectionFourPrev = document.querySelector('.jobseeker-section-four-prev');
const jobSectionFivePrev = document.querySelector('.jobseeker-section-five-prev');
const jobSectionSixPrev = document.querySelector('.jobseeker-section-six-prev');
const jobSectionSevenPrev = document.querySelector('.jobseeker-section-seven-prev');
const jobSectionEightPrev = document.querySelector('.jobseeker-section-eight-prev');
const jobSectionNinePrev = document.querySelector('.jobseeker-section-nine-prev');

const companySectionOne = document.querySelector('.company-section-one');
const companySectionTwo = document.querySelector('.company-section-two');
const companySectionThree = document.querySelector('.company-section-three');
const companySectionOneNext = document.querySelector('.company-section-one-next');
const companySectionTwoNext = document.querySelector('.company-section-two-next');
const companySectionTwoPrev = document.querySelector('.company-section-two-prev');
const companySectionThreePrev = document.querySelector('.company-section-three-prev');

//Section numbers for registration forms
if (companySections) {
	companySections.forEach( function (value, i) {
		let total = companySections.length;
		let currentCompanySection = value.querySelector('.numberCompany');
		let totalCompanySections = value.querySelector('.totalCompany');
		currentCompanySection.innerHTML += i + 1;
		totalCompanySections.innerHTML += total;
	});
}

if (document.querySelector('body').classList.contains("jobseekerReg")) {
	jobRegSections.forEach( function (value, i) {
		let total = jobRegSections.length;
		let currentSection = value.querySelector('.currentJobSection');
		let totalSections = value.querySelector('.totalJobSections');
		currentSection.innerHTML += i + 1;
		totalSections.innerHTML += total;
	});
}

//Company form navigation
if(companySectionOne) {
	companySectionOneNext.addEventListener('click', (e) => {
		e.preventDefault();
		companySectionOne.style.display = "none";
		companySectionTwo.style.display = "block";
	});
}

if(companySectionTwo) {
	companySectionTwoNext.addEventListener('click', (e) => {
		e.preventDefault();
		companySectionTwo.style.display = "none";
		companySectionThree.style.display = "block";
	});

	companySectionTwoPrev.addEventListener('click', (e) => {
		e.preventDefault();
		companySectionTwo.style.display = "none";
		companySectionOne.style.display = "block";
	});
}

if(companySectionThree) {
	companySectionThreePrev.addEventListener('click', (e) => {
		e.preventDefault();
		companySectionThree.style.display = "none";
		companySectionTwo.style.display = "block";
	});
}

//JobSeeker form navigation
if(jobSectionOne) {
	jobSectionOneNext.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionOne.style.display = "none";
		jobSectionTwo.style.display = "block";
	});
}

if(jobSectionTwo) {
	jobSectionTwoNext.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionTwo.style.display = "none";
		jobSectionThree.style.display = "block";
	});

	jobSectionTwoPrev.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionTwo.style.display = "none";
		jobSectionOne.style.display = "block";
	});
}

if(jobSectionThree) {
	jobSectionThreeNext.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionThree.style.display = "none";
		jobSectionFour.style.display = "block";
	});

	jobSectionThreePrev.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionThree.style.display = "none";
		jobSectionTwo.style.display = "block";
	});
}

if(jobSectionFour) {
	jobSectionFourNext.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionFour.style.display = "none";
		jobSectionFive.style.display = "block";
	});

	jobSectionFourPrev.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionFour.style.display = "none";
		jobSectionThree.style.display = "block";
	});
}

if(jobSectionFive) {
	jobSectionFiveNext.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionFive.style.display = "none";
		jobSectionSix.style.display = "block";
	});

	jobSectionFivePrev.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionFive.style.display = "none";
		jobSectionFour.style.display = "block";
	});
}

if(jobSectionSix) {
	jobSectionSixNext.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionSix.style.display = "none";
		jobSectionSeven.style.display = "block";
	});

	jobSectionSixPrev.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionSix.style.display = "none";
		jobSectionFive.style.display = "block";
	});
}

if(jobSectionSeven) {
	jobSectionSevenNext.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionSeven.style.display = "none";
		jobSectionEight.style.display = "block";
	});

	jobSectionSevenPrev.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionSeven.style.display = "none";
		jobSectionSix.style.display = "block";
	});
}

if(jobSectionEight) {
	jobSectionEightNext.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionEight.style.display = "none";
		jobSectionNine.style.display = "block";
	});

	jobSectionEightPrev.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionEight.style.display = "none";
		jobSectionSeven.style.display = "block";
	});
}

if(jobSectionNine) {
	jobSectionNinePrev.addEventListener('click', (e) => {
		e.preventDefault();
		jobSectionNine.style.display = "none";
		jobSectionEight.style.display = "block";
	});
}

//Education - Allows multiple inputs to be appended to DOM
const educationWrapper = document.querySelector('.education-wrapper');
const addEducationBtn = document.querySelector('.add-education-input');

if (educationWrapper) {
	addEducationBtn.addEventListener('click', function(e) {
		e.preventDefault();

		let educationDiv = document.createElement('div');
		educationDiv.classList.add('education-row');

		let deleteBtn = document.createElement('button');
		deleteBtn.classList.add('delete-row');
		deleteBtn.innerText = '-'

		let inputInstitution = document.createElement('input');
		inputInstitution.id = 'place_of_institution';
		inputInstitution.setAttribute('name', 'education[]');
		inputInstitution.setAttribute('type', 'text');
		inputInstitution.setAttribute('placeholder', 'Institution');

		let courseType = document.createElement('input');
		courseType.id = 'course_type';
		courseType.setAttribute('name', 'education[]');
		courseType.setAttribute('type', 'text');
		courseType.setAttribute('placeholder', 'Course Type');

		let courseName = document.createElement('input');
		courseType.id = 'course_name';
		courseName.setAttribute('name', 'education[]');
		courseName.setAttribute('type', 'text');
		courseName.setAttribute('placeholder', 'Course Name');

		let result = document.createElement('input');
		result.id = 'result';
		result.setAttribute('name', 'education[]');
		result.setAttribute('type', 'text');
		result.setAttribute('placeholder', 'Result');

		educationDiv.appendChild(inputInstitution);
		educationDiv.appendChild(courseType);
		educationDiv.appendChild(courseName);
		educationDiv.appendChild(result);
		educationDiv.appendChild(deleteBtn);

		educationWrapper.appendChild(educationDiv);

		deleteBtn.addEventListener('click', function(e) {
			e.preventDefault();
			this.parentElement.remove();
		});
	});
}

//References - Allows multiple inputs to be appended to DOM
const referencesWrapper = document.querySelector('.references-wrapper');
const addReferenceBtn = document.querySelector('.add-reference-input');

if (referencesWrapper) {
	addReferenceBtn.addEventListener('click', function(e) {
		e.preventDefault();

		let referenceDiv = document.createElement('div');
		referenceDiv.classList.add('reference-row');

		let deleteBtn = document.createElement('button');
		deleteBtn.classList.add('delete-row');
		deleteBtn.innerText = '-'

		let previousEmployer = document.createElement('input');
		previousEmployer.id = 'previous_company_name';
		previousEmployer.setAttribute('name', 'reference[]');
		previousEmployer.setAttribute('type', 'text');
		previousEmployer.setAttribute('placeholder', 'Previous Company Name');

		let employerName = document.createElement('input');
		employerName.id = 'employer_name';
		employerName.setAttribute('name', 'reference[]');
		employerName.setAttribute('type', 'text');
		employerName.setAttribute('placeholder', 'Employer Name');

		let employerContact = document.createElement('input');
		employerContact.id = 'employer_contact';
		employerContact.setAttribute('name', 'reference[]');
		employerContact.setAttribute('type', 'text');
		employerContact.setAttribute('placeholder', 'Employer Contact');

		let durationWorked = document.createElement('input');
		durationWorked.id = 'duration_worked';
		durationWorked.setAttribute('name', 'reference[]');
		durationWorked.setAttribute('type', 'text');
		durationWorked.setAttribute('placeholder', 'Duration Worked');

		referenceDiv.appendChild(previousEmployer);
		referenceDiv.appendChild(employerName);
		referenceDiv.appendChild(employerContact);
		referenceDiv.appendChild(durationWorked);
		referenceDiv.appendChild(deleteBtn);

		referencesWrapper.appendChild(referenceDiv);

		deleteBtn.addEventListener('click', function(e) {
			e.preventDefault();
			this.parentElement.remove();
		});
	});
}


//Benefits - Allows multiple inputs to be appended to DOM
const benefitsWrapper = document.querySelector('.benefits-wrapper');
const addBenefitBtn = document.querySelector('.add-benefit-input');

if (benefitsWrapper) {
	addBenefitBtn.addEventListener('click', function(e) {
		e.preventDefault();
	
		console.log('helo')
	
		let benefitDiv = document.createElement('div');
		benefitDiv.classList.add('benefit-row');
	
		let benefit = document.createElement('input');
		benefit.id = 'benefits';
		benefit.classList.add('benefit');
		benefit.setAttribute('name', 'benefits[]');
		benefit.setAttribute('type', 'text');
		benefit.setAttribute('placeholder', 'Benefit');
	
		let deleteBtn = document.createElement('button');
		deleteBtn.classList.add('delete-row');
		deleteBtn.innerText = '-'
	
		benefitDiv.appendChild(benefit);
		benefitDiv.appendChild(deleteBtn);
	
		benefitsWrapper.appendChild(benefitDiv);
	
		deleteBtn.addEventListener('click', function(e) {
			e.preventDefault();
			this.parentElement.remove();
		});
	});
}