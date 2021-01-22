<!doctype html>
<html lang="en">
<head>
<title>Student Dashboard</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Dashboard, Admin View">
	<meta name="description" content="Dashboard view for admins.">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="dashboard.css" rel="stylesheet">
	<!--Other-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <style>
    
    ul, .sidebar .nav-link, .sidebar .nav-link.active {
        color: #fff;
    }
    
    .lsbu-header{
  background-color: #aaa6cc;
  color: #efefef;
  padding: 5%;
}

.active,.list-group-item-action:hover{
    background-color: #aaa6cc;
}


#disabilityDiv{
  margin-left: -1%
}


</style>
</head>

<body>
        <h4>Family Hub Case Database</h4>
    <!-- Search Bar -->
        <form class="navbar-form" role="search">
								<div class="input-group py-3 w-25">
								    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<input type="text" name="caseID" class="form-control" placeholder="Enter case ID..."> <button class="btn btn-primary" type="submit" name="go">Go</button> 
									</form>
									</div>
							</form>
	<!-- CASE VIEW -->
	<?php
	
	if(isset($_GET['go'])) {
    
    require('lib/connection.php');
    
        $caseID = $_GET["caseID"];
        $sql = "SELECT * FROM lfhcases WHERE caseID = :caseID";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
            [':caseID' => $caseID]
            );
        $data = $stmt->fetchALL();
        
        foreach ($data as $row){
        
        $submissionDate = date_create_from_format("Y-m-d", $row['submissionDate'])->format("d M Y");
        
        echo <<<HTML
                <b>Case No.:</b> {$row['caseNo']}
                <br />
                submitted $submissionDate
                <br />
                <br />
                <u>Case Details</u>
                <br />
                <b>What type of advice is needed:</b>{$row['adviceType']}
                <br />
        <b>Details:</b>  {$row['otherDetail']}
        <br />
        <b>Is the enquiry urgent:</b>  {$row['urgentEnquiry']}
        <br />
        <b>Deadline:</b>  {$row['deadlineDate']}
        <br />
        <b>Tasks to be done before deadline:</b>  {$row['deadlineTasks']}
        <br />
        <b>How did you discover us:</b>  {$row['discoverySelect']}
        <br />
        <b>Email in future:</b>  {$row['emailInFuture']}
        <br />
        <br />
        <u>Personal Details</u>
        <br />
        <b>Name:</b>  {$row['name']}
        <br />
        <b>Age:</b>  {$row['age']}
        <br />
        <b>Gender:</b>  {$row['gender']}
        <br />
        <b>Postcode:</b>  {$row['postcode']}
        <br />
        <b>Language:</b>  {$row['native_lang']}
        <br />
        <b>Email:</b>  {$row['email']}
        <br />
        <b>Tel:</b>  {$row['tel']}
        <br />
        <b>Disability:</b>  {$row['disability']}
        <br />
        <br />
        <u>Details of the Other Party</u>
        <br />
        <b>Name:</b>  {$row['otherName']}
        <br />
        <b>Age:</b>  {$row['otherAge']}
       <br />
        <b>Gender:</b>  {$row['otherGender']}
        <br />
        <b>Ethnicity:</b>  {$row['otherEth']}
        <br />
        <b>Year in which Relationship Began:</b>  {$row['relYear']}
        <br />
        <b>Year in which parties were married/entered civil partnership:</b>  {$row['marriageYear']}
        <br />
        <b>Year in which parties separated:</b>  {$row['sepYear']}
        <br />
        <b>Is the other party financially controlling:</b>  {$row['finAbuse']}
        <br />
        <b>Is the other party verbally abusive:</b>  {$row['verAbuse']}
        <br />
        <b>Is the other party physically abusive:</b>  {$row['physAbuse']}
        <br />
        <br />
        <u>Children</u>
        <br />
        <b>Number of Children:</b>  {$row['childCount']}
        <br />
        <b>Special Needs:</b>  {$row['specialNeeds']}
        <br />
        <b>Are any of the children at risk of suffering immediate injury:</b>  {$row['childAbuse']}
        <br />
        <b>Details:</b>  {$row['childAbuseDetail']}
        <div class="card mx-auto" style="width: 50%; height: 50%">
				<div class="card-body my-auto py-auto">Notes
				<p>{$row['notes']}</p>
				<form method="post" action="">
				<textarea class="form-control" name="notes" rows="5"></textarea>
				<button class="btn btn-primary" type="submit" name="submit">Add Note</button></div>
				 
			</form>
		</div>
        
HTML;

if(isset($_POST['submit'])) {
    
    require('lib/connection.php');
    
        $notes = $_POST['notes'];
        $sql = "UPDATE lfhcases SET notes = CONCAT(notes, CHAR(13) , :notes) WHERE caseID = :caseID";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(
            ':notes' => $notes,
            ':caseID' => $caseID)
            );
            
    echo "<script>url = window.location.href + '#'; window.location.replace(url); if ( window.location.href == url ){ url = url.slice(0, - 1); window.location.replace(url) }</script>"; 
    }
    

}
    }
	
	?>
	
	</div>
	<!-- CASE VIEW ENDS HERE -->
  </main>
  </body>
  </html>
 
