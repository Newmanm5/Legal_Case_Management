<?php
    require('submit.php');
?>
<!doctype html>
<html lang="en">

<head>
	<title>Form Submission</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Form Submission">
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
	
	#alert{
        visibility: hidden;
    }
	</style>
</head>

<body>
				<!--FORM *COLLAPSE* STARTS HERE-->
			<button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#formCollapse" aria-expanded="false" aria-controls="formCollapse">
				<div style="nav-text mx-auto">FORM</div>
			</button>
			</p>
				<div class="collapse my-auto" id="formCollapse" name="formCollapse">
				<h4>Your Details</h4>
				<!--FORM *TAG* STARTS HERE-->
				<form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="row">
            
						<div class="form-group col">
							<label for="name">First Name</label>
							<input type="text" class="form-control " id="name" name="name" aria-describedby="nameHelp" placeholder="Enter your first name" maxlength="32" required> <small id="nameHelp" class="form-text text-muted">We won't require your last name or any other identifying information.</small> </div>
						<div class="form-group col">
							<label for="ageInput">Age</label>
							<input type="number" class="form-control" id="age" name="age" aria-describedby="ageHelp" placeholder="How old are you?" min="0" max="150" step="1" data-bind="value:replyNumber" required> </div>
            
						
							<div style="width: 60%;" class="form-group row col">
								<label for="gender">Gender</label>
								<select class="form-control" id="gender" name="gender" required>
									<option selected disabled>Choose...</option>
									<option>Female</option>
									<option>Male</option>
									<option>Other</option>
									<option>Prefer not to say</option>
								</select>
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
							<div class="form-group col mb-2">
								<label for="tel">Mobile number</label>
								<input type="tel" class="form-control" id="tel" name="tel" aria-describedby="numberHelp" placeholder="Enter your phone number" maxlength="15"> <small id="numberHelp" class="form-text text-muted">Optional.</small> </div>
						</div>
						<div class="form-group form-check mb-4" id="disabilityDiv">
							<label class="form-check-label float-xl-start" for="disability">Do you consider yourself to have a disability?</label>
							<input type="checkbox" class="form-check-input ms-2 mt-.7" id="disability" name="disability" value="yes">
							<br /> <small id="disability" class="form-text text-muted">This includes vision impairment, deaf or hard of hearing, mental health conditions, intellectual disability, acquired brain injury, autism spectrum disorder and physical disability.</small> </div>
						<h4>Details Of The Other Party</h4>
						<div class="row">
            
						<div class="form-group col">
								<label for="otherName">First Name</label>
								<input type="text" class="form-control" id="otherName" name="otherName" placeholder="Enter their first name" required maxlength="32"> </div>
							<div class="form-group col">
								<label for="otherAge">Age</label>
								<input type="number" class="form-control" id="otherAge" name="otherAge" placeholder="How old are they?" min="0" max="150" step="1" data-bind="value:replyNumber" required> </div>
							<div>
								<div style="width: 60%;" class="row col mt-2">
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
								<div style="width: 60%;" class="row col my-2">
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
								<div style="width: 60%;" class="form-group row col my-2 mt-4">
                  <small id="childrenSection" class="text-muted">Skip year questions if you are not nor have you ever been in a relationship with the other party.</small>
									<label for="relYear">What year did your relationship with the other party begin?</label>
									<input type="number" class="form-control" min="1900" max="2099" step="1" name="relYear" placeholder="YYYY"> </div>
							</div>
							<div class="form-group row col mt-4 mr-auto">
								<label for="marriageYear">If you are married to them or in a civil partnership with them, in which year was the marriage or civil partnership?</label>
								<input type="number" style="width: 60%;" class="form-control mr-auto row ps-auto pe-auto" min="1900" max="2099" step="1" name="marriageYear" placeholder="YYYY"> </div>
								<div>
							<div style="width: 60%;" class="form-group row col mt-5 mr-auto">
								<label for="sepYear">If you have separated, when did you separate?</label>
								<input type="number" class="form-control" min="1900" max="2099" step="1" name="sepYear" placeholder="YYYY"> </div></div>
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
										<input class="form-check-input" type="checkbox" value="Speech and/or language delays" id="speech" name="specialNeeds[]">
										<label class="form-check-label" for="speech"> Speech and/or language delays </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="Autism Spectrum Disorder" id="autism" name="specialNeeds[]">
										<label class="form-check-label" for="autism"> Autism Spectrum Disorder </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="Cognitive delays" id="cognitive" name="specialNeeds[]">
										<label class="form-check-label" for="cognitive"> Cognitive delays </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="Social & emotional disorders" id="psychosocial" name="specialNeeds[]">
										<label class="form-check-label" for="psychosocial"> Social & emotional disorders </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="Learning differences/disabilities" id="learning" name="specialNeeds[]">
										<label class="form-check-label" for="learning"> Learning differences/disabilities </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="Other" id="other" name="specialNeeds[]">
										<label class="form-check-label" for="other"> Other </label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="None of my children have any special needs" id="none" name="specialNeeds[]">
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
                   <div class="my-4">
										<div class="form-check">
<input class="form-check-input" type="checkbox" id="adviceType-0" value="relationship counselling" name="adviceType[]">
<label class="form-check-label" for="adviceType-0">relationship counselling </label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="adviceType-1" value="mediation" name="adviceType[]"> <label class="form-check-label" for="adviceType-1”>mediation </label>
										</div>
										<div class="form-check">
																							<input class="form-check-input" type="checkbox" id="adviceType-2" value="protection from domestic abuse" name="adviceType[]"> <label class="form-check-label" for="adviceType-2">protection from domestic abuse </label>
										</div>
										<div class="form-check"><input class="form-check-input" type="checkbox" id="adviceType-3" value="divorce (married or in a civil partnership)" name="adviceType[]"><label class="form-check-label" for="adviceType-3">
 divorce (married or in a civil partnership) </label>
										</div>
										<div class="form-check"><input class="form-check-input" type="checkbox" id="adviceType-4" value="separation (not married - not in a civil partnership)" name="adviceType[]"> <label class="form-check-label" for="adviceType-4">separation (not married - not in a civil partnership) </label>
										</div>
										<div class="form-check">
											
												<input class="form-check-input" type="checkbox" id="adviceType-5" value="arrangements for your children's care international child abduction" name="adviceType[]"> <label class="form-check-label" for="adviceType-5">arrangements for your children's care international child abduction </label>
										</div>
										<div class="form-check">
											
												<input class="form-check-input" type="checkbox" id="adviceType-6" value="child maintenance" name="adviceType[]"><label class="form-check-label" for="adviceType-6"> child maintenance </label>
										</div>
										<div class="form-check">
																							<input class="form-check-input" type="checkbox" id="adviceType-7" value="financial settlement / arrangements" name="adviceType[]"> <label class="form-check-label" for="adviceType-7">
financial settlement / arrangements </label>
										</div>
										<div class="form-check">
																							<input class="form-check-input" type="checkbox" id="adviceType-8" value="an existing court case" name="adviceType[]"> <label class="form-check-label" for="adviceType-8">
an existing court case </label>
										</div>
										<div class="form-check">
																							<input class="form-check-input" type="checkbox" id="adviceType-9" value="make an application to court" name="adviceType[]"><label class="form-check-label" for="adviceType-9">
 make an application to court </label>
										</div>
										<div class="form-check">
											
												<input class="form-check-input" type="checkbox" id="adviceType-10" value="vary an existing court order" name="adviceType[]"><label class="form-check-label" for="adviceType-10"> vary an existing court order </label>
										</div>
										<div class="form-check">
											
												<input class="form-check-input" type="checkbox" id="adviceType-11" value="to enforce an existing order" name="adviceType[]"> <label class="form-check-label" for="adviceType-11">to enforce an existing order </label>
										</div>
										<div class="form-check">
											
												<input class="form-check-input" type="checkbox" id="adviceType-12" value="other" name="adviceType[]"> <label class="form-check-label" for="adviceType-12">other </label>
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
									<!--PRIVACY POLICY STARTS HERE-->
									<div class="my-4"> <span><b>London South Bank University is committed to protecting people's rights and privacy in line with the Data Protection Act 2018 (DPA), the General Data Protection Regulation (GDPR) and other relevant legislation and regulations (collectively Data Protection Law). By selecting 'I agree', you are in agreement with our Privacy Statement, which you can read in full <a href="https://www.lsbu.ac.uk/footer/data-protection/website-privacy" alt="London South Bank Privacy Policy">here</a>.</b></span>
										 <div class="form-check form-check-inline mx-2">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        I agree.
      </label>
    </div>
									</div>
									<!--PRIVACY POLICY ENDS HERE-->
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary" type="submit" name="submit">Submit</button></div>
				</form>
				<!--FORM *TAG* ENDS HERE-->
				</div>
				</div>
				</div>
				</div>
				
			</div>
			</div>
			<!--FORM *DESIGN* ENDS HERE-->
			<!--FORM *COLLAPSE* STARTS HERE-->
			<div class="alert alert-success mx-auto" id="alert" role="alert" style="width: 50%; margin-top: 5px;">
                        <h4 class="alert-heading">Your form has been submitted!</h4>
                        <p>Thanks for submitting your appliation. We'll be get back to you within six weeks. The page will now refresh.</p>
                </div>
                </form>
                <!--FORM *TAG* ENDS HERE-->
                <?php if (isset($_POST['submit'])){ echo "<script>url = window.location.href + '#'; window.location.replace(url); if ( window.location.href == url ){ document.getElementById(\"alert\").style.visibility = 'visible'; document.getElementById(\"alert\").focus(); url = url.slice(0, - 1); setTimeout( function(){ window.location.replace(url) }, 5000); }</script>"; } ?>
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
