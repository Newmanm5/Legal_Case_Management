<?php

	require_once('connection.php');
  	require_once('lib/emailTemplate.html');
  
?>

<!doctype html>
<html lang="en">

<head>
	<title>LSBU Family Law Hub</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="LSBU Family Law Hub">
	<meta name="description" content="Application for legal advice in family law cases.">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!--Other-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js">
	</script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
	<style>
	
	@media(max-width: 992px){
  	.btn {
    	display: block !important;
    	width: auto !important;
  	}
  
  	.form-control {
    	display: block !important;
    	width: auto !important;
  	}
	}


	
	.lsbu-header {
		background-color: #aaa6cc;
	}
	
	#disabilityDiv {
		margin-left: -1%
	}
	</style>
</head>

<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg bg-white">
			<div class="container-fluid flex-row-reverse">
				<div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item mx-2">CONTACT US</li>
						<li class="nav-item mx-2">FOR BUSINESS</li>
						<li class="nav-item mx-2">STUDENT PORTAL</li>
						<li class="nav-item mx-2">STAFF INTRANET</li>
						<li class="nav-item mx-2">ALUMNI</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid lsbu-header">
			<nav class="navbar navbar-expand-lg ">
				<div class="container-fluid flex-row"> <span class="nav-brand h1">LSBU</span>
					<div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
						<ul class="navbar-nav mt-2">
							<li class="nav-item my-2 mx-2">STUDY</li>
							<li class="nav-item my-2 mx-2">STUDENT LIFE</li>
							<li class="nav-item my-2 mx-2">INTERNATIONAL</li>
							<li class="nav-item my-2 mx-2">RESEARCH</li>
							<li class="nav-item my-2 mx-2">ABOUT US</li>
							<li class="nav-item my-2 mx-2">WHAT’S ON</li>
							<form class="navbar-form" role="search">
								<div class="input-group ps-5 me-3 pb-3">
									<input type="text" class="form-control" placeholder="Search"> <span class="input-group-btn">
                </span> </div>
							</form>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div>
			<svg width="100%" height="300px" xmlns="http://www.w3.org/2000/svg">
				<!-- Simple rectangle -->
				<rect width="100%" fill="#999999" />
				<text x="47.5%" y="50%" font-size="100%" fill="#fff">image</text>
			</svg>
		</div>
		<nav style="--bs-breadcrumb-divider: '>';" class="lsbu-header py-2" aria-label="breadcrumb">
			<ol class="breadcrumb my-auto ms-3">
				<li class="breadcrumb-item">HOME</li>
				<li class="breadcrumb-item">COURSE</li>
				<li class="breadcrumb-item">LAW</li>
				<li class="breadcrumb-item">FAMILY HUB</li>
			</ol>
		</nav>
		<div class="row mt-5 mx-2">
		<?php if(isset($_POST['Submit'])) {
			echo 'JOB DONE IG?????';
		} ?>
			<h4>Family Law Hub</h4>
			<p class="d-inline-flex w-50 px-2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget gravida cum sociis natoque penatibus et. Sit amet tellus cras adipiscing enim eu turpis. Ut aliquam purus sit amet luctus venenatis lectus magna fringilla. Adipiscing enim eu turpis egestas pretium aenean pharetra. Massa tincidunt dui ut ornare lectus sit. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim.
				<br />
				<br /> Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. Erat velit scelerisque in dictum non consectetur a erat nam. Elementum curabitur vitae nunc sed velit dignissim sodales ut eu. Quisque id diam vel quam elementum pulvinar etiam. Vitae aliquet nec ullamcorper sit amet. Vitae tempus quam pellentesque nec nam. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Molestie ac feugiat sed lectus vestibulum. At erat pellentesque adipiscing commodo. Magna eget est lorem ipsum dolor sit amet. Vitae purus faucibus ornare suspendisse sed.
				<br />
				<br /> Bibendum arcu vitae elementum curabitur vitae nunc sed. Arcu non sodales neque sodales ut etiam sit amet. Volutpat diam ut venenatis tellus in metus vulputate eu. Urna nec tincidunt praesent semper feugiat nibh sed. Maecenas sed enim ut sem viverra aliquet eget sit amet. Tellus mauris a diam maecenas sed enim ut. Leo vel fringilla est ullamcorper eget nulla. Fermentum odio eu feugiat pretium nibh ipsum consequat nisl vel. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus. Lobortis feugiat vivamus at augue eget arcu dictum varius. Porttitor leo a diam sollicitudin tempor. Eget duis at tellus at urna condimentum mattis pellentesque. Nunc scelerisque viverra mauris in aliquam. Tristique risus nec feugiat in fermentum. Sagittis orci a scelerisque purus semper. </p>
			<div class="card mx-auto" style="width: 18rem; height: 18rem;">
				<div class="card-body my-auto py-auto"> Section Navigator </div>
			</div>
		</div>
		<div class="container-fluid my-auto">
			<h4>Application for Legal Advice</h4>
			<p style="width: 50%;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget gravida cum sociis natoque penatibus et. Sit amet tellus cras adipiscing enim eu turpis. Ut aliquam purus sit amet luctus venenatis lectus magna fringilla. Adipiscing enim eu turpis egestas pretium aenean pharetra. Massa tincidunt dui ut ornare lectus sit. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim. </p>
			<button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#formCollapse" aria-expanded="false" aria-controls="formCollapse">
				<div style="nav-text mx-auto">FORM</div>
			</button>
			</p>
			<div style="width: 60%;" class="collapse mb-2" id="formCollapse" name="formCollapse">
				<h4>Your Details</h4>
				<form class="form" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>
					<div class="row">
            <div class="row">
						<div class="form-group col">
							<label for="name">First Name</label>
							<input type="text" class="form-control " id="name" name="name" aria-describedby="nameHelp" placeholder="Enter your first name" maxlength="32" required> <small id="nameHelp" class="form-text text-muted">We won't require your last name or any other identifying information.</small> </div>
						<div class="form-group col">
							<label for="ageInput">Age</label>
							<input type="number" class="form-control" id="age" name="age" aria-describedby="ageHelp" placeholder="How old are you?" min="0" max="150" step="1" data-bind="value:replyNumber" required> </div>
            </div>
						<div>
							<div style="width: 60%;" class="form-group">
								<label for="gender">Gender</label>
								<select class="form-control" id="gender" name="gender" required>
									<option selected disabled>Choose...</option>
									<option>Female</option>
									<option>Male</option>
									<option>Other</option>
									<option>Prefer not to say</option>
								</select>
							</div>
						</div>
            <div class="row mt-3">
						<div class="form-group col">
							<label for="language">What is your native language?</label>
							<input type="text" class="form-control" id="language" name="language" placeholder="Enter your first language" maxlength="32" required> </div>
						<div class="form-group col mb-2">
							<label for="postcode">Where do you live?</label>
							<input type="text" class="form-control" id="postcode" name="postcode" aria-describedby="locHelp" placeholder="Enter the first half of your postcode" maxlength="10" required> <small id="locHelp" class="form-text text-muted">We won't be asking for your full address.</small> </div>
            </div>
						<div class="row">
							<div class="form-group col">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" maxlength="64" required> </div>
							<div class="form-group col mb-2 mx-auto">
								<label for="tel">Mobile number</label>
								<input type="tel" class="form-control" id="tel" name="tel" aria-describedby="numberHelp" placeholder="Enter your phone number" maxlength="32"> <small id="numberHelp" class="form-text text-muted">Optional.</small> </div>
						</div>
						<div class="form-group form-check mb-2" id="disabilityDiv">
							<label class="form-check-label float-xl-start" for="disability">Do you consider yourself to have a disability?</label>
							<input type="checkbox" class="form-check-input ms-2 mt-.7" id="disability" name="disability">
							<br /> <small id="disability" class="form-text text-muted">This includes {Disability List}.</small> </div>
						<h4>Details Of The Other Party</h4>
						<div class="row">
							<div class="form-group col">
								<label for="otherName">First Name</label>
								<input type="text" class="form-control" id="otherName" name="otherName" placeholder="Enter their first name" required maxlength="32"> </div>
							<div class="form-group col">
								<label for="otherAge">Age</label>
								<input type="number" class="form-control" id="otherAge" name="otherAge" placeholder="How old are they?" min="0" max="150" step="1" data-bind="value:replyNumber" required> </div>
							<div>
								<div style="width: 60%;" class="form-group my-2">
									<label for="otherGender">Gender</label>
									<select class="form-control" id="otherGender" name="otherGender" required>
										<option selected>Choose...</option>
										<option>Female</option>
										<option>Male</option>
										<option>Other</option>
										<option>Prefer not to say</option>
									</select>
								</div>
							</div>
							<div>
								<div style="width: 60%;" class="form-group">
									<label for="otherEth">Ethnicity</label>
									<select class="form-control" id="otherEth" name="otherEth" required>
										<option selected disabled>Choose...</option>
										<option>Asian or Asian British</option>
										<option>Black, African, Black British or Caribbean</option>
										<option>Mixed or multiple ethnic groups</option>
										<option>White</option>
										<option>Other</option>
										<option>Prefer not to say</option>
									</select>
								</div>
							</div>
              
							<div>
								<div style="width: 60%;" class="form-group col my-2 mt-2">
                  <small id="childrenSection" class="text-muted">Skip year questions if you are not nor have you ever been in a relationship with the other party.</small>
									<label for="relYear">What year did your relationship with the other party begin?</label>
									<input type="number" class="form-control" min="1900" max="2099" step="1" name="relYear" placeholder="YYYY"> </div>
							</div>
							<div class="form-group col mt-4">
								<label for="marriageYear">If you are married to them or in a civil partnership with them, in which year was the marriage or civil partnership?</label>
								<input type="number" class="form-control" min="1900" max="2099" step="1" name="marriageYear" placeholder="YYYY"> </div>
							<div class="form-group col mt-5">
								<label for="sepYear">If you have separated, when did you separate?</label>
								<input type="number" class="form-control" min="1900" max="2099" step="1" name="sepYear" placeholder="YYYY"> </div>
							<div class="mt-4"> <span>Does the other party tell you what you can spend money on?</span>
								<div class="form-check form-check-inline mx-2">
									<input class="form-check-input" type="radio" name="finAbuse" id="yes" value="yes">
									<label class="form-check-label" for="yes">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="finAbuse" id="no" value="no">
									<label class="form-check-label" for="no">No</label>
								</div>
							</div>
							<div class="mt-4"> <span>Does the other party shout at you?</span>
								<div class="form-check form-check-inline mx-2">
									<input class="form-check-input" type="radio" name="verAbuse" id="yes" value="yes">
									<label class="form-check-label" for="yes">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="verAbuse" id="no" value="no">
									<label class="form-check-label" for="no">No</label>
								</div>
							</div>
							<div class="my-4"> <span>Does the other party threaten or use violence?</span>
								<div class="form-check form-check-inline mx-2">
									<input class="form-check-input" type="radio" name="physAbuse" id="yes" value="yes">
									<label class="form-check-label" for="yes">Yes</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="physAbuse" id="no" value="no">
									<label class="form-check-label" for="no">No</label>
								</div>
							</div>
							<h4>Children</h4> <small id="childrenSection" class="text-muted">Skip this section if you don't have any children.</small>
							<div class="my-4"> <span>How many children do you have?</span>
								<div class="form-check form-check-inline mx-2">
									<input class="form-check-input" type="radio" name="childCount" id="1" value="1">
									<label class="form-check-label" for="1">1</label>
								</div>
								<div class="form-check form-check-inline mx-2">
									<input class="form-check-input" type="radio" name="childCount" id="2" value="2">
									<label class="form-check-label" for="2">2</label>
								</div>
								<div class="form-check form-check-inline mx-2">
									<input class="form-check-input" type="radio" name="childCount" id="3" value="3">
									<label class="form-check-label" for="3">3</label>
								</div>
								<div class="form-check form-check-inline mx-2">
									<input class="form-check-input" type="radio" name="childCount" id="4" value="4">
									<label class="form-check-label" for="4">4</label>
								</div>
								<div class="form-check form-check-inline mx-2">
									<input class="form-check-input" type="radio" name="childCount" id="moreThanFour" value="moreThanFour">
									<label class="form-check-label" for="moreThanFour">More than four</label>
								</div>
								<div class="my-4"> <span>Do any of your children have the following special needs?</span>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="A" id="speech" name="specialNeeds[]">
										<label class="form-check-label" for="speech"> Speech and/or language delays </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="B" id="autism" name="specialNeeds[]">
										<label class="form-check-label" for="autism"> Autism Spectrum Disorder </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="C" id="cognitive" name="specialNeeds[]">
										<label class="form-check-label" for="cognitive"> Cognitive delays </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="D" id="psychosocial" name="specialNeeds[]">
										<label class="form-check-label" for="psychosocial"> Social & emotional disorders </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="E" id="learning" name="specialNeeds[]">
										<label class="form-check-label" for="learning"> Learning differences/disabilities </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="F" id="other" name="specialNeeds[]">
										<label class="form-check-label" for="other"> Other </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="G" id="none" name="specialNeeds[]">
										<label class="form-check-label" for="none"> None of my children have any special needs. </label>
									</div>
								</div>
								<div class="mt-4"> <span>Are any of your children at risk of suffering serious injury?</span>
									<div class="form-check form-check-inline mx-2">
										<input class="form-check-input" type="radio" name="childAbuse" id="yes" value="yes">
										<label class="form-check-label" for="yes">Yes</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="childAbuse" id="no" value="no">
										<label class="form-check-label" for="no">No</label>
									</div>
								</div>
								<div class="form-group col my-2">
									<label for="childAbuseDetail">If you answered yes to the previous question, can you please provide more detail?</label>
									<textarea type="text" class="form-control" id="childAbuseDetail" name="childAbuseDetail" aria-describedby="detailHelp" placeholder="Enter text" maxlength="512" rows=3></textarea>
								</div>
								<h4>Contact</h4>
								<div class="form-group">
									<label class=" control-label" for="adviceType[]">What would you like to talk to us about?</label>
									<div class="d-grid gap-3">
                  <div class="col-md-4">
										<div class="checkbox">
											<label for="adviceType-0">
												<input type="checkbox" id="adviceType-0" value="A" name="adviceType[]"> relationship counselling </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-1">
												<input type="checkbox" id="adviceType-1" value="B" name="adviceType[]"> mediation </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-2">
												<input type="checkbox" id="adviceType-2" value="C" name="adviceType[]"> protection from domestic abuse </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-3">
												<input type="checkbox" id="adviceType-3" value="D" name="adviceType[]"> divorce (married or in a civil partnership) </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-4">
												<input type="checkbox" id="adviceType-4" value="E" name="adviceType[]"> separation (not married - not in a civil partnership </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-5">
												<input type="checkbox" id="adviceType-5" value="F" name="adviceType[]"> arrangements for your children's care international child abduction </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-6">
												<input type="checkbox" id="adviceType-6" value="G" name="adviceType[]"> child maintenance </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-7">
												<input type="checkbox" id="adviceType-7" value="H" name="adviceType[]"> financial settlement / arrangements </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-8">
												<input type="checkbox" id="adviceType-8" value="I" name="adviceType[]"> an existing court case </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-9">
												<input type="checkbox" id="adviceType-9" value="J" name="adviceType[]"> make an application to court </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-10">
												<input type="checkbox" id="adviceType-10" value="K" name="adviceType[]"> vary an existing court order </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-11">
												<input type="checkbox" id="adviceType-11" value="L" name="adviceType[]"> to enforce an existing order </label>
										</div>
										<div class="checkbox">
											<label for="adviceType-12">
												<input type="checkbox" id="adviceType-12" value="M" name="adviceType[]"> other </label>
										</div>
									</div>
                  </div>
								</div>
								<div class="form-group col my-2">
									<label for="otherDetail">If you answered other to the previous question, can you briefly describe what you need help with?</label>
									<textarea type="text" class="form-control" id="otherDetail" name="otherDetail" aria-describedby="detailHelp" placeholder="Enter text" maxlength="512" rows=3></textarea>
								</div>
								<div class="mt-4"> <span>Is your enquiry urgent?</span>
									<div class="form-check form-check-inline mx-2">
										<input class="form-check-input" type="radio" name="urgentEnquiry" id="yes" value="yes">
										<label class="form-check-label" for="yes">Yes</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="urgentEnquiry" id="no" value="no">
										<label class="form-check-label" for="no">No</label>
									</div>
									<div class="form-group col mt-4">
										<label for="deadlineDate">If there is a deadline to be met, please select the date of the deadline.</label>
										<input type="date" class="form-control" id="deadlineDate" name="deadlineDate" placeholder="Select a date"> </div>
									<div class="form-group col my-2">
										<label for="deadlineTasks">If there is a deadline to be met, please describe the tasks that must be done before then. </label>
										<textarea type="text" class="form-control" id="deadlineTasks" name="deadlineTasks" placeholder="Enter text" maxlength="512" rows=3></textarea>
									</div>
									<div>
										<div style="width: 60%;" class="form-group">
											<label for="discoverySelect">How did you find out about us?</label>
											<select class="form-control" id="discoverySelect" name="discoverySelect" required>
												<option selected disabled>Choose...</option>
												<option>LSBU</option>
												<option>Word of mouth</option>
												<option>Lawyer</option>
												<option>Court</option>
												<option>Advice organisation</option>
												<option>Used it before</option>
												<option>Other</option>
											</select>
										</div>
									</div>
									<div class="mt-4"> <span>Your email address will be stored on our system after we have dealt with your enquiry. Would you like us to email you to follow up on your case?</span>
										<div class="form-check form-check-inline mx-2">
											<input class="form-check-input" type="radio" name="emailInFuture" id="yes" value="yes">
											<label class="form-check-label" for="yes">Yes</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="emailInFuture" id="no" value="no">
											<label class="form-check-label" for="no">No</label>
										</div>
									</div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button style="width: 10%;" class="btn btn-primary" type="submit">Submit</button></div>
				</form>
				</div>
				</div>
				</div>
				</div>
			</div>
			<div class="mt-5">
				<h4>Benefits for Students</h4>
				<p class="d-inline-flex w-50"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget gravida cum sociis natoque penatibus et. Sit amet tellus cras adipiscing enim eu turpis. Ut aliquam purus sit amet luctus venenatis lectus magna fringilla. Adipiscing enim eu turpis egestas pretium aenean pharetra. Massa tincidunt dui ut ornare lectus sit. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim. </p>
			</div>
			<div>
				<svg width="100%" height="300px" xmlns="http://www.w3.org/2000/svg">
					<!-- Simple rectangle -->
					<rect width="100%" fill="#aaa6cc" />
					<text x="47.5%" y="50%" font-size="100%" fill="#fff">footer</text>
				</svg>
			</div>
			<!-- Optional JavaScript; choose one of the two! -->
			<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
			</script>
			<!-- Option 2: Separate Popper and Bootstrap JS -->
			<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
		</div>
</body>
</html>