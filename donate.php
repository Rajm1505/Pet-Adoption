<!Doctype html>
<html lang="en">
<head>
    <title>Little Pawsitive Steps!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" type="text/css" href="css/Adopt.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
    <a class="navbar-brand" href="index.php">LITTLE PAWSITIVE STEPS!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span  class=" sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="Adoption info.php">Adoption info</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="Adopt.php">Adopt</a>
		</li>
</ul>

<ul class="navbar-nav ml-auto">
      
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Breeds</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Beagles</a>
               <a class="dropdown-item" href="#">Boxer</a>
               <a class="dropdown-item" href="#">Bulldogs Dogs</a>
               <a class="dropdown-item" href="#">Cocker Spaniel</a>
               <a class="dropdown-item" href="#">Dachshund</a> 
               <a class="dropdown-item" href="#">Dalmatian</a>
               <a class="dropdown-item" href="#">German Shepherd</a>
               <a class="dropdown-item" href="#">Great Dane</a>
               <a class="dropdown-item" href="#">Pomeranian</a> 
               <a class="dropdown-item" href="#">Pug</a>
               <a class="dropdown-item" href="#">Retrievers (Golden)</a>
               <a class="dropdown-item" href="#">Retrievers (Labrador)</a>
               <a class="dropdown-item" href="#">Rottweilers</a>
               <a class="dropdown-item" href="#">Siberian Husky</a>
               <a class="dropdown-item" href="#">Tibetan Mastiff</a>
       
        </div>
		</li>
		<li class="nav-item ">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="signup.php">Signup</a>
        </li>
             
    </ul>
        <form class="form-inline my-2 my-lg-0">
            
            <input class="form-control mr-sm-2 "type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button> 
        </form>
      
      </div>
    </nav>
    <!-- header -->

<header >
	<h1 id="title">Dog Donation Form</h1>

	<img id="top-pic" class="img-fluid" src="https://www.starpng.com/public/uploads/preview/dog-png-image-transparent-101576600613tbqmpcenz3.png" alt="Cute Dog Stare">
</header>

<!-- form -->

<main class="pb-5">
	<form id="survey-form">

		<p id="description"><em>Thank you for wishing to offer a rescue dog a home! Please could you complete the form below and submit it to us. </em></p>
		</div>

		<!-- todays date -->

		<div id="todays-date">
			<label class="main-label" for="todays-date">Today's Date: </label>
			<select name="day">
				<option value="day">Day</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<select name="month">
				<option value="month">Month</option>
				<option value="january">January</option>
				<option value="february">February</option>
				<option value="march">March</option>
				<option value="april">April</option>
				<option value="may">May</option>
				<option value="june">June</option>
				<option value="july">July</option>
				<option value="august">August</option>
				<option value="september">September</option>
				<option value="october">October</option>
				<option value="november">November</option>
				<option value="december">December</option>
			</select>
			<select name="year">
				<option value="" e="year">Year</option>
				<option value="2012">2020</option>
				<option value="2013">2021</option>
				<option value="2014">2022</option>
				<option value="2015">2023</option>
				<option value="2016">2024</option>
				<option value="2017">2025</option>
				<option value="2018">2026</option>
				<option value="2019">2027</option>
				<option value="2020">2028</option>
				<option value="2021">2029</option>
				<option value="2022">2030</option>
				
			</select>
		</div>

		<!-- dog name -->

		<div id="dogName">
			<label class="main-label" for="dogNameLabel">Name of the dog you wish to adopt: </label>
			<input type="text" id="dogNameLabel" placeholder="Dog Name" required>
		</div>


		<!-- name -->

		<div id="first-last-name">
			<label class="main-label" id="name-label">First Name: </label>
			<input type="text" id="name" placeholder="Rohan" required>

			<label class="main-label">Last Name: </label>
			<input type="text" id="lastName" placeholder="Sharma" required>
		</div>

		<!--  gender 
		<div id="gender">
			<input type="radio" id="male" name="gender" value="1" required>
			<label class="main-label" for="male">Male</label>

			<input type="radio" id="female" name="gender" value="2" required>
			<label class="main-label" for="female">Female</label>
		</div> -->

		<!-- address  -->

		<div id="address">
			<label class="main-label" for="address1">Address: </label>
			<input type="text" id="address1" size="30" placeholder="Enter your address here">


			<label class="main-label" for="town">Town: </label>
			<input type="text" id="town" size="15" placeholder="Your town">

			<label class="main-label" for="postcode">Postcode: </label>
			<input type="text" id="postcode" size="10" placeholder="Postcode">

		</div>

		<!-- email / phone / age -->

		<div id="email-phone">
			<label class="main-label" id="phone-label" for="phone">Phone: </label>
			<input type="tel" id="phone" placeholder="e.g. +91 971234568">

			<label class="main-label" id="email-label" for="email">Email: </label>
			<input type="email" id="email" placeholder="e.g. youremail@example.co.in" required size="35">

		</div>

		<!-- age -->

		<div id="age">
			<ul><label class="main-label" for="age">Age of applicant:</label></ul>

			<li><input type="radio" id="u18" name="age" value="1" required>
				<label for="u18">Under 18</label></li>

			<li><input type="radio" id="18" name="age" value="2" required>
				<label for="18">18 - 24</label></li>

			<li><input type="radio" id="25" name="age" value="3" required>
				<label for="25">25 - 34</label></li>

			<li><input type="radio" id="35" name="age" value="4" required>
				<label for="35">35 - 44</label></li>

			<li><input type="radio" id="45" name="age" value="5" required>
				<label for="45">45 and older</label></li>

		</div>

		<!-- why dog? -->

		<div id="why">
			<ul><label class="main-label" for="why">Why do you want to adopt a dog? Please check all that apply:</label></ul>
			<li><input type="checkbox" name="reason" id="companion" value="companion">
				<label for="companion">Pet & Companion</label></li>

			<li><input type="checkbox" name="reason" id="gift" value="gift">
				<label for="gift">Gift</label></li>

			<li><input type="checkbox" name="reason" id="hunting" value="hunting">
				<label for="hunting">Hunting Dog</label></li>

			<li><input type="checkbox" name="reason" id="breeding" value="breeding">
				<label for="breeding">Breeding Dog</label></li>

			<li><input type="checkbox" name="reason" id="guard" value="guard">
				<label for="guard">Guard Dog</label></li>

			<li><input type="checkbox" name="reason" id="senior" value="senior">
				<label for="senior">For a Senior</label></li>

			<li><input type="checkbox" name="reason" id="child" value="child">
				<label for="child">For a Child</label></li>

		</div>

		<!-- allergies -->

		<div id="allergies">
			<ul><label class="main-label" for="allergies">Is anyone in your household allergic to pets?</label></ul>

			<li><input type="radio" id="yes" name="allergy" value="1" required>
				<label for="yes">Yes</label></li>

			<li><input type="radio" id="no" name="allergy" value="2" required>
				<label for="no">No</label></li>

			<li><input type="radio" id="sometimes" name="allergy" value="3" required>
				<label for="sometimes">Sometimes</label></li>
		</div>

		<!-- pets in household -->

		<div id="pets-household">
			<ul><label class="main-label" id="number-label">How many pets are already in your household?
			</label></ul>
			<li><input type="number" id="number" min="1" max="10" placeholder="0"></li>
		</div>

		<!-- housing -->

		<div id="housing">
			<label class="main-label">What type of housing you reside?</label>
			<select id="dropdown">
			<option disabled selected value>Select an option</option>
			<option value="apt">Apt / Condo</option>
			<option value="house">House</option>
			<option value="other">Other</option>
			</select>
		</div>

		<!-- comments 

		<div id="prepare">
			<label class="main-label">How did you prepare yourself?</label>
		</div>
		<div id="textarea">
    	<textarea id="comments"
			  rows="10" cols="70" placeholder=" Write here how did you prepare yourself for adoption."></textarea>
		</div>S

		<!-- submit button -->
		<div id="button">
			<button type="submit" id="submit">Submit</button>
		</div>


	</form>
</main>
<!-- Footer -->

<?php include "partials/footer.php"; ?>
  
  <!-- footer ends  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>

    