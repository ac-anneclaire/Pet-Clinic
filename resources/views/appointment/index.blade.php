@extends('layout.master')

@section('content')

<div class="one">
	<div class="navbar">
		<div class="navlogo">
			<h3>Paws & Claws Pet Clinic</h3>
		</div>
			<div class="navmenu">
				<ul>
					<a href="appointments"><li>HOME</li></a>
					<a href="#servc"><li>SERVICES</li></a>
					<a href="#abtus"><li>ABOUT</li></a>
					<a href="/appointments/table"><li>APPOINTMENTS</li></a>
					<a href="/logout/"><li>LOGOUT</li></a>

					
				</ul>
			</div>
		</div>
		<br>
		<br>
		<br>
			<div class="banner-title">
				<h1>"Healthy paws, Healthy fur."</h1>
			</div>
<div class="visit">
	<a href="appointments/create"><button type="button" class="btn">BOOK NOW!</button></a>
		<br>
		<br>
		<h2 class="tri">Visit us today!<br>Located at Olongapo <br> City</h2>
	</div>
		<div class="lining">
		</div>
	</div>
</div>
	</div>
</div>

<section id="servc">
	<h1>OUR SERVICES</h1>
        <br>
		<div class="row">
			<div class="img">
				<img src="{{ asset('img/chup.jpg') }}" style="width: 190px; height: 150px" />
			<h2>Check-Up</h2>
			<p>Check-ups allow owners to monitor the animal's vital signs and treat any problems before they become severe.</p>
			</div>
			<br>
			<br>
			<div class="img">
				<img src="{{ asset('img/dworm.jpg') }}" style="width: 190px; height: 150px" />
			<h2>Deworming</h2>
				<p>Deworming is used to cure and prevent diseases and their symptoms such as hook and roundworm infections.</p>
			</div>
			<div class="img">
				<img src="{{ asset('img/vacc.jpg') }}" style="width: 190px; height: 150px" />
				<h2>Vaccination</h2>
					<p>Vaccines are products that increase protective immune responses in pets, preparing them to resist future illnesses caused by disease-causing substances.</p>
				</div>
				<div class="img">
					<img src="{{ asset('img/groom.jpg') }}" style="width: 190px; height: 150px" />
					<h2>Grooming</h2>
						<p>Grooming includes cleaning and maintaining bodily function and hygiene. Service includes bathing, brushing, clipping, or styling a pet, trimming a pet's nails, or providing anal gland expression.</p>
					</div>
		</div>
		<br>
			<br>
			<br>
			<br>
			<br>
			<br>
</section>
<section id="abtus">
	<h1>About Us</h1>
	<br>
	<p style="text-indent: 25px;"> At Paws and Claws Pet Clinic, we believe that every pet deserves exceptional care and attention. Our mission is to provide a safe, comfortable, and nurturing environment for your beloved furry companions. At Paws and Claws Pet Clinic, we strongly believe in the power of education. We take the time to listen to your concerns and answer all your questions, empowering you to make informed decisions about your pet's healthcare. Our team is dedicated to providing comprehensive and transparent information, enabling you to be an active participant in your pet's wellness journey.</p>
<br>
<p style="text-indent: 25px;"> Beyond our medical expertise, we also prioritize creating a warm and welcoming environment for both pets and their owners. We understand that a trip to the veterinarian can be stressful for some pets, which is why we strive to create a calm and fear-free atmosphere. Our compassionate staff members are skilled in handling anxious animals, and we take extra care to ensure their comfort and well-being throughout their visit. At Paws and Claws Pet Clinic, we consider each pet that walks through our doors as a part of our extended family. We are honored to be entrusted with the care of your cherished companions, and we promise to treat them with the same love and compassion as we would our own.</p>
<br>
<p style="text-indent: 25px;"> Come visit us at Paws and Claws Pet Clinic and experience the highest standard of veterinary care delivered with warmth, expertise, and a genuine love for animals. Together, we can give your pets the happy, healthy lives they deserve. </p>
	<br>
</section>
<button id="scrollButton">🔝</button>
<script>
    // JavaScript to handle button click and scroll to top
    var scrollButton = document.getElementById('scrollButton');
    scrollButton.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Show or hide the button based on scroll position
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 200) {
        scrollButton.style.display = 'block';
      } else {
        scrollButton.style.display = 'none';
      }
    });
  </script>
    
@endsection