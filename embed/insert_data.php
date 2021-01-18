<?php

require_once ('connection.php');

$null = 
$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '0';
$gender = isset($_POST['gender']) ? $_POST['gender'] : 'Other';
$postcode = isset($_POST['postcode']) ? $_POST['postcode'] : '';
$language = isset($_POST['language']) ? $_POST['language'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tel = isset($_POST['tel']) ? $_POST['tel'] : '';
$disability = isset($_POST['disability']) ? $_POST['disability'] : '';
$otherName = isset($_POST['otherName']) ? $_POST['otherName'] : '';
$otherAge = isset($_POST['otherAge']) ? $_POST['otherAge'] : '0';
$otherGender = isset($_POST['otherGender']) ? $_POST['otherGender'] : 'Other';
$otherEth = isset($_POST['otherEth']) ? $_POST['otherEth'] : 'Other';
$relYear = empty($_POST['relYear']) ? intval("1000") : $_POST['relYear'];
$marriageYear = empty($_POST['marriageYear']) ? intval("1000")  : $_POST['marriageYear'];
$sepYear = empty($_POST['sepYear']) ? intval("1000")  : $_POST['sepYear'];
$finAbuse = isset($_POST['finAbuse']) ? $_POST['finAbuse'] : '';
$verAbuse = isset($_POST['verAbuse']) ? $_POST['verAbuse'] : '';
$physAbuse = isset($_POST['physAbuse']) ? $_POST['physAbuse'] : '';
$childCount = isset($_POST['childCount']) ? $_POST['childCount'] : '';
$childAbuse = isset($_POST['childAbuse']) ? $_POST['childAbuse'] : '';
$childAbuseDetail = isset($_POST['childAbuseDetail']) ? $_POST['childAbuseDetail'] : '';
$otherDetail = isset($_POST['otherDetail']) ? $_POST['otherDetail'] : '';
$urgentEnquiry = isset($_POST['urgentEnquiry']) ? $_POST['urgentEnquiry'] : '';
$deadlineDate = empty($_POST['deadlineDate']) ? date("Y-m-d", strtotime("1000-01-01")) : $_POST['deadlineDate'];
$deadlineTasks = isset($_POST['deadlineTasks']) ? $_POST['deadlineTasks'] : '';
$discoverySelect = isset($_POST['discoverySelect']) ? $_POST['discoverySelect'] : 'Other';
$emailInFuture = isset($_POST['emailInFuture']) ? $_POST['emailInFuture'] : '';
$date_clicked = date('Y-m-d');

$specialNeeds = array();
$insertSpecialNeeds = "";
$adviceType = array();
$insertAdviceType = "";


if(isset($_POST['specialNeeds']) && isset($_POST['adviceType'])) {
    
        $insertSpecialNeeds = implode(", ", $_POST['specialNeeds']);
        $insertAdviceType = implode(", ", $_POST['adviceType']);
        
        $sql = "INSERT INTO lfhcases (name, 
                                        age, 
                                        gender, 
                                        postcode, 
                                        native_lang, 
                                        email, 
                                        tel, 
                                        disability, 
                                        otherName, 
                                        otherAge, 
                                        otherGender, 
                                        otherEth, 
                                        relYear, 
                                        marriageYear, 
                                        sepYear, 
                                        finAbuse, 
                                        verAbuse, 
                                        physAbuse,
                                        childCount, 
                                        specialNeeds, 
                                        childAbuse, 
                                        childAbuseDetail,
                                        adviceType,
                                        otherDetail, 
                                        urgentEnquiry, 
                                        deadlineDate, 
                                        deadlineTasks, 
                                        discoverySelect, 
                                        emailInFuture, 
                                        submissionDate) 
                                VALUES (:name, 
                                        :age, 
                                        :gender, 
                                        :postcode, 
                                        :language, 
                                        :email, 
                                        :tel, 
                                        :disability, 
                                        :otherName, 
                                        :otherAge, 
                                        :otherGender, 
                                        :otherEth, 
                                        :relYear, 
                                        :marriageYear, 
                                        :sepYear, 
                                        :finAbuse, 
                                        :verAbuse, 
                                        :physAbuse, 
                                        :childCount, 
                                        :spN, 
                                        :childAbuse, 
                                        :childAbuseDetail,
                                        :adT,
                                        :otherDetail, 
                                        :urgentEnquiry, 
                                        :deadlineDate, 
                                        :deadlineTasks, 
                                        :discoverySelect, 
                                        :emailInFuture, 
                                        :submissionDate)";
        
        $stmt = $conn->prepare($sql);
        
        try {
            $stmt->execute(array(
                ':name' => $name,
                ':age' => $age,
                ':gender' => $gender,
                ':postcode' => $postcode,
                ':language' => $language,
                ':email' => $email,
                ':tel' => $tel,
                ':disability' => $disability,
                ':otherName' => $otherName,
                ':otherAge' => $otherAge,
                ':otherGender' => $otherGender,
                ':otherEth' => $otherEth,
                ':relYear' => $relYear,
                ':marriageYear' => $marriageYear,
                ':sepYear' => $sepYear,
                ':finAbuse' => $finAbuse,
                ':verAbuse' => $verAbuse,
                ':physAbuse' => $physAbuse,
                ':childCount' => $childCount,
                ':spN' => $insertSpecialNeeds,
                ':childAbuse' => $childAbuse,
                ':childAbuseDetail' => $childAbuseDetail,
                ':adT' => $insertAdviceType,
                ':otherDetail' => $otherDetail,
                ':urgentEnquiry' => $urgentEnquiry,
                ':deadlineDate' => $deadlineDate,
                ':deadlineTasks' => $deadlineTasks,
                ':discoverySelect' => $discoverySelect,
                ':emailInFuture' => $emailInFuture,
                ':submissionDate' => $date_clicked
                ));
            
        }
        
            catch(PDOException $e) {
                die($e->getMessage());
                
            }
            
            $conn = null;
    
    } elseif(isset($_POST['specialNeeds']) && empty($_POST['adviceType'])) {
        
        $insertSpecialNeeds = implode(", ", $_POST['specialNeeds']);
        
        $sql = "INSERT INTO lfhcases (name, 
                                        age, 
                                        gender, 
                                        postcode, 
                                        native_lang, 
                                        email, 
                                        tel, 
                                        disability, 
                                        otherName, 
                                        otherAge, 
                                        otherGender, 
                                        otherEth, 
                                        relYear, 
                                        marriageYear, 
                                        sepYear, 
                                        finAbuse, 
                                        verAbuse, 
                                        physAbuse,
                                        childCount, 
                                        specialNeeds, 
                                        childAbuse, 
                                        childAbuseDetail, 
                                        otherDetail, 
                                        urgentEnquiry, 
                                        deadlineDate, 
                                        deadlineTasks, 
                                        discoverySelect, 
                                        emailInFuture, 
                                        submissionDate) 
                                VALUES (:name, 
                                        :age, 
                                        :gender, 
                                        :postcode, 
                                        :language, 
                                        :email, 
                                        :tel, 
                                        :disability, 
                                        :otherName, 
                                        :otherAge, 
                                        :otherGender, 
                                        :otherEth, 
                                        :relYear, 
                                        :marriageYear, 
                                        :sepYear, 
                                        :finAbuse, 
                                        :verAbuse, 
                                        :physAbuse, 
                                        :childCount, 
                                        :spN, 
                                        :childAbuse, 
                                        :childAbuseDetail, 
                                        :otherDetail, 
                                        :urgentEnquiry, 
                                        :deadlineDate, 
                                        :deadlineTasks, 
                                        :discoverySelect, 
                                        :emailInFuture, 
                                        :submissionDate)";
        
        $stmt = $conn->prepare($sql);
        
        try {
            $stmt->execute(array(
                ':name' => $name,
                ':age' => $age,
                ':gender' => $gender,
                ':postcode' => $postcode,
                ':language' => $language,
                ':email' => $email,
                ':tel' => $tel,
                ':disability' => $disability,
                ':otherName' => $otherName,
                ':otherAge' => $otherAge,
                ':otherGender' => $otherGender,
                ':otherEth' => $otherEth,
                ':relYear' => $relYear,
                ':marriageYear' => $marriageYear,
                ':sepYear' => $sepYear,
                ':finAbuse' => $finAbuse,
                ':verAbuse' => $verAbuse,
                ':physAbuse' => $physAbuse,
                ':childCount' => $childCount,
                ':spN' => $insertSpecialNeeds,
                ':childAbuse' => $childAbuse,
                ':childAbuseDetail' => $childAbuseDetail,
                ':otherDetail' => $otherDetail,
                ':urgentEnquiry' => $urgentEnquiry,
                ':deadlineDate' => $deadlineDate,
                ':deadlineTasks' => $deadlineTasks,
                ':discoverySelect' => $discoverySelect,
                ':emailInFuture' => $emailInFuture,
                ':submissionDate' => $date_clicked
                ));
            
        }
        
            catch(PDOException $e) {
                die($e->getMessage());
                
            }
            
            $conn = null;
            
    } elseif(empty($_POST['specialNeeds']) && isset($_POST['adviceType'])) {
        
        $insertAdviceType = implode(", ", $_POST['adviceType']);
        
        $sql = "INSERT INTO lfhcases (name, 
                                        age, 
                                        gender, 
                                        postcode, 
                                        native_lang, 
                                        email, 
                                        tel, 
                                        disability, 
                                        otherName, 
                                        otherAge, 
                                        otherGender, 
                                        otherEth, 
                                        relYear, 
                                        marriageYear, 
                                        sepYear, 
                                        finAbuse, 
                                        verAbuse, 
                                        physAbuse,
                                        childCount, 
                                        childAbuse, 
                                        childAbuseDetail,
                                        adviceType,
                                        otherDetail, 
                                        urgentEnquiry, 
                                        deadlineDate, 
                                        deadlineTasks, 
                                        discoverySelect, 
                                        emailInFuture, 
                                        submissionDate) 
                                VALUES (:name, 
                                        :age, 
                                        :gender, 
                                        :postcode, 
                                        :language, 
                                        :email, 
                                        :tel, 
                                        :disability, 
                                        :otherName, 
                                        :otherAge, 
                                        :otherGender, 
                                        :otherEth, 
                                        :relYear, 
                                        :marriageYear, 
                                        :sepYear, 
                                        :finAbuse, 
                                        :verAbuse, 
                                        :physAbuse, 
                                        :childCount, 
                                        :childAbuse, 
                                        :childAbuseDetail,
                                        :adT,
                                        :otherDetail, 
                                        :urgentEnquiry, 
                                        :deadlineDate, 
                                        :deadlineTasks, 
                                        :discoverySelect, 
                                        :emailInFuture, 
                                        :submissionDate)";
        
        $stmt = $conn->prepare($sql);
        
        try {
            $stmt->execute(array(
                ':name' => $name,
                ':age' => $age,
                ':gender' => $gender,
                ':postcode' => $postcode,
                ':language' => $language,
                ':email' => $email,
                ':tel' => $tel,
                ':disability' => $disability,
                ':otherName' => $otherName,
                ':otherAge' => $otherAge,
                ':otherGender' => $otherGender,
                ':otherEth' => $otherEth,
                ':relYear' => $relYear,
                ':marriageYear' => $marriageYear,
                ':sepYear' => $sepYear,
                ':finAbuse' => $finAbuse,
                ':verAbuse' => $verAbuse,
                ':physAbuse' => $physAbuse,
                ':childCount' => $childCount,
                ':childAbuse' => $childAbuse,
                ':childAbuseDetail' => $childAbuseDetail,
                ':adT' => $insertAdviceType,
                ':otherDetail' => $otherDetail,
                ':urgentEnquiry' => $urgentEnquiry,
                ':deadlineDate' => $deadlineDate,
                ':deadlineTasks' => $deadlineTasks,
                ':discoverySelect' => $discoverySelect,
                ':emailInFuture' => $emailInFuture,
                ':submissionDate' => $date_clicked
                ));
            
        }
        
            catch(PDOException $e) {
                die($e->getMessage());
                
            }
            
            $conn = null;
            
    } else {
        
        $sql = "INSERT INTO lfhcases (name, 
                                        age, 
                                        gender, 
                                        postcode, 
                                        native_lang, 
                                        email, 
                                        tel, 
                                        disability, 
                                        otherName, 
                                        otherAge, 
                                        otherGender, 
                                        otherEth, 
                                        relYear, 
                                        marriageYear, 
                                        sepYear, 
                                        finAbuse, 
                                        verAbuse, 
                                        physAbuse,
                                        childCount, 
                                        childAbuse, 
                                        childAbuseDetail,
                                        otherDetail, 
                                        urgentEnquiry, 
                                        deadlineDate, 
                                        deadlineTasks, 
                                        discoverySelect, 
                                        emailInFuture, 
                                        submissionDate) 
                                VALUES (:name, 
                                        :age, 
                                        :gender, 
                                        :postcode, 
                                        :language, 
                                        :email, 
                                        :tel, 
                                        :disability, 
                                        :otherName, 
                                        :otherAge, 
                                        :otherGender, 
                                        :otherEth, 
                                        :relYear, 
                                        :marriageYear, 
                                        :sepYear, 
                                        :finAbuse, 
                                        :verAbuse, 
                                        :physAbuse, 
                                        :childCount, 
                                        :childAbuse, 
                                        :childAbuseDetail,
                                        :otherDetail, 
                                        :urgentEnquiry, 
                                        :deadlineDate, 
                                        :deadlineTasks, 
                                        :discoverySelect, 
                                        :emailInFuture, 
                                        :submissionDate)";
        
        $stmt = $conn->prepare($sql);
        
        try {
            $stmt->execute(array(
                ':name' => $name,
                ':age' => $age,
                ':gender' => $gender,
                ':postcode' => $postcode,
                ':language' => $language,
                ':email' => $email,
                ':tel' => $tel,
                ':disability' => $disability,
                ':otherName' => $otherName,
                ':otherAge' => $otherAge,
                ':otherGender' => $otherGender,
                ':otherEth' => $otherEth,
                ':relYear' => $relYear,
                ':marriageYear' => $marriageYear,
                ':sepYear' => $sepYear,
                ':finAbuse' => $finAbuse,
                ':verAbuse' => $verAbuse,
                ':physAbuse' => $physAbuse,
                ':childCount' => $childCount,
                ':childAbuse' => $childAbuse,
                ':childAbuseDetail' => $childAbuseDetail,
                ':otherDetail' => $otherDetail,
                ':urgentEnquiry' => $urgentEnquiry,
                ':deadlineDate' => $deadlineDate,
                ':deadlineTasks' => $deadlineTasks,
                ':discoverySelect' => $discoverySelect,
                ':emailInFuture' => $emailInFuture,
                ':submissionDate' => $date_clicked
                ));
}
catch(PDOException $e) {
    die($e->getMessage());
}


$conn = null;

    }


?>
