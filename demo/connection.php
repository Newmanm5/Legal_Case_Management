<?php
$server = "lsbufamilyhub";
$un = "lsbucompsci_e8";
$pw = "legaladvice202X";

try {
  $conn = new PDO("mysql:host=$server;dbname=lsubfhcases", $un, $pw);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
