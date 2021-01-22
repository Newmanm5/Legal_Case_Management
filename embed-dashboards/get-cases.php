<?php

if(isset($_POST['submit'])) {
    
    require('lib/connection.php');
    
        $caseID = $_GET["caseID"];
        $sql = "SELECT * FROM lfhcases WHERE caseID = :caseID";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
            [':caseID' => $caseID]
            );
        $data = $stmt->fetchALL();
    }

?>
