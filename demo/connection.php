<?php
//import private data from hidden file
$config = parse_ini_file('lib/php.ini' , true);
$server = $config['database']['server'] ;
$username = $config['database']['username'];
$password = $config['database']['password'];
$dbname = $config['database']['dbname'];

try {
  $conn = new PDO("mysql:host=$server;dbname=$dbname";charset=utf8, $username, $password);
  // SQL injection protection
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);               
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
