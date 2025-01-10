<?php
date_default_timezone_set('Asia/Jakarta');
$base_url = 'http://localhost/UAS-Crud/';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kuliner2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_errno) {
echo "Failed to connect to MySQL: " . $conn->connect_error;
exit();
}