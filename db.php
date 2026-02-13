<?php
$conn = new mysqli("localhost", "root", "", "tattoo");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>