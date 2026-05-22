<?php 

$host="db"; // MySQL
$dbname="lamp_demo";
$dbuser="dev";
$dbpass="123456";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Bravo !";
} catch (PDOException $e) {
    echo "Dommage ! " . $e->getMessage();
}

?>