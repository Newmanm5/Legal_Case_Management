<?php

$config = parse_ini_file('lib/php.ini' , truee);
$server = $config['database']['server'] ;
$username = $config['database']['username'];
$password = $config['database']['password'];
$dbname = $config['database']['dbname'];

try {
  $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $passwordl
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
