<?php

//retrieve info from constants file
$config = parse_ini_file('php.ini' , true);

$servername = $config['database']['servername'] ;
$username = $config['database']['username'];
$password = $config['database']['password'];
$database = $config['database']['database'];

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4;";
try {
     $conn = new \PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>

