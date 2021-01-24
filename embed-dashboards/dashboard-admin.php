<?php

require_once('lib/connection.php');

?>
<!doctype html>
<html lang="en">
<head>
<title>Dashboard, Admin View</title>
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

#caseID{
    word-wrap: break-word;
}


#disabilityDiv{
  margin-left: -1%
}


</style>
</head>

<body>
    
							<!-- CRUD Table -->
    <table class="table table-striped table-hover">
      <thead>
        <th scope="col">Case No.</th>
        <th scope="col">Date Submitted</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </thead>
      <tbody>
      <?php 
        
        $sql = "SELECT * FROM lfhcases ORDER BY caseNo";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchALL();
        $x = 0;
        foreach ($data as $row){
            
                                    $x++;
                                    $caseID = $row['caseID'];
                                    $submissionDate = date_create_from_format("Y-m-d", $row['submissionDate'])->format("d M Y");
                                    echo <<<HTML
                                    <tr>
                                    <td>{$row['caseNo']}</td>
                                    <td>$submissionDate</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['status']}</td>
                                    <td><span style='letter-spacing: 25px;'><a data-bs-toggle='collapse' data-bs-target='#extraData$x'><i class='bi bi-eye'></i></a><i class='bi bi-trash'></i></span></td>
                                    </tr>
                                    <tr class='collapse' id='extraData$x'>
                                    <td>
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
        <b>Email in future:</b>  {$row['emailInFuture']}</td>
        <td>
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
        </td>
        <td>
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
        </td>
        <td>
        <u>Children</u>
        <br />
        <b>Number of Children:</b>  {$row['childCount']}
        <br />
        <b>Special Needs:</b>  {$row['specialNeeds']}
        <br />
        <b>Are any of the children at risk of suffering immediate injury:</b>  {$row['childAbuse']}
        <br />
        <b>Details:</b>  {$row['childAbuseDetail']}
        </td>
        <td>
        <form method="GET" action="">
        <button name="getCaseID" type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#caseID$x">Get Case ID</button>
        <br />
        <div style="width: 20%; word-wrap: break-word;" class="collapse" id="caseID$x">
        <br />Case ID for Students: <b>$caseID</b></div>
        <br />
        <button class="btn btn-outline-secondary" name="assign" type="submit">Assign Case</button>
        <br />
        <br />
        <button name="close" type="submit" class="btn btn-secondary">Close Case</button>
        </form>
        </td>
        </tr>
HTML;
       
       
                                    
        }
        
         if (isset($_POST['assign'])){
        $sql = "UPDATE lfhcases SET status = 'Assigned' WHERE caseID = :caseID";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
            ['caseID' => $caseID]
            );
        echo "<script>url = window.location.href + '#'; window.location.replace(url); if ( window.location.href == url ){ url = url.slice(0, - 1); setTimeout( function(){ window.location.replace(url) }, 3000) }</script>"; 
       }        
       if (isset($_POST['close'])){
        $sql = "UPDATE lfhcases SET status = 'Closed' WHERE caseID = :caseID";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
            ['caseID' => $caseID]
            );
        echo "<script>url = window.location.href + '#'; window.location.replace(url); if ( window.location.href == url ){ url = url.slice(0, - 1); setTimeout( function(){ window.location.replace(url) }, 3000) }</script>"; 
       }
        
        
        ?>
      </tbody>
    </table>
    <!-- CRUD Table ENDS HERE -->
  </main>
  </body>
  </html>
