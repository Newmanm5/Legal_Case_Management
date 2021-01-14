<?php

require_once (connection.php);

//user input variable assignment with escape string filter
$name = $conn->real_escape_string($_POST['name']);
$age = $conn->real_escape_string($_POST['age']);
$gender = $conn->real_escape_string($_POST['gender']);
$postcode = $conn->real_escape_string($_POST['postcode']);
$language = $conn->real_escape_string($_POST['language']);
$email = $conn->real_escape_string($_POST['email']);
$tel = $conn->real_escape_string($_POST['tel']);
$disability = $conn->real_escape_string($_POST['disability']);
$otherName = $conn->real_escape_string($_POST['otherName']);
$otherAge = $conn->real_escape_string($_POST['otherAge']);
$otherGender = $conn->real_escape_string($_POST['otherGender']);
$otherEth = $conn->real_escape_string($_POST['otherEth']);
$relYear = $conn->real_escape_string($_POST['relYear']);
$marriageYear = $conn->real_escape_string($_POST['marriageYear']);
$sepYear = $conn->real_escape_string($_POST['sepYear']);
$finAbuse = $conn->real_escape_string($_POST['finAbuse']);
$verAbuse = $conn->real_escape_string($_POST['verAbuse']);
$physAbuse = $conn->real_escape_string($_POST['physAbuse']);
$childCount = $conn->real_escape_string($_POST['childCount']);
$childAbuse = $conn->real_escape_string($_POST['childAbuse']);
$childAbuseDetail = $conn->real_escape_string($_POST['childAbuseDetail']);
$otherDetail = $conn->real_escape_string($_POST['otherDetail']);
$urgentEnquiry = $conn->real_escape_string($_POST['urgentEnquiry']);
$deadlineDate = $conn->real_escape_string($_POST['deadlineDate']);
$deadlineTasks = $conn->real_escape_string($_POST['deadlineTasks']);
$discoverySelect = $conn->real_escape_string($_POST['discoverySelect']);
$emailInFuture = $conn->real_escape_string($_POST['emailInFuture']);

$specialNeeds = array();
$insertSpecialNeeds = "";
$adviceType = array();
$insertAdviceType ="";

//specialNeeds checkbox array iteration
if(!empty($_POST['specialNeeds'])) {   
    foreach($_POST['specialNeeds'] as $key=>$value) {
        $specialNeeds[] = $conn->real_escape_string($value);
    }
}

$insertSpecialNeeds = implode(', ', $specialNeeds);

//adviceType checkbox array iteration
if(!empty($_POST['adviceType'])) {
    foreach($_POST['adviceType'] as $key=>$value) {
        $adviceType = $conn->real_escape_string($value);
    }
}

$insertAdviceType = implode(', ', $adviceType);

$stmt = $conn->prepare(INSERT INTO lfhcases (name, age, gender, postcode, language, email, tel, disability, otherName, otherAge, otherGender, otherEth, relYear, marriageYear, sepYear, finAbuse, verAbuse, physAbuse, childCount, specialNeeds, childAbuse, childAbuseDetail, adviceType, otherDetail, urgentEnquiry, deadlineDate, deadlineTasks, discoverySelect, :emailInFuture) VALUES (:name, :age, :gender, :postcode, :language, :email, :tel, :disability, :otherName, :otherAge, :otherGender, :otherEth, :relYear, :marriageYear, :sepYear, :finAbuse, :verAbuse, :physAbuse, :childCount, :insertSpecialNeeds, :childAbuse, :childAbuseDetail, :insertAdviceType, :otherDetail, :urgentEnquiry, :deadlineDate, :deadlineTasks, :discoverySelect, emailInFuture));

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
    ':insertSpecialNeeds' => $insertSpecialNeeds,
    ':childAbuse' => $childAbuse,
    ':childAbuseDetail' => $childAbuseDetail,
    ':insertAdviceType' => $insertAdviceType,
    ':otherDetail' => $otherDetail,
    ':urgentEnquiry' => $urgentEnquiry,
    ':deadlineDate' => $deadlineDate,
    ':deadlineTasks' => $deadlineTasks,
    ':discoverySelect' => $discoverySelect,
    ':emailInFuture' => $emailInFuture

));

$conn = null;

?>
