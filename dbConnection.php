<?php
$db_host = "localhost";
$db_user = "id12210565_shiva";
$db_password = "Shiv@rimmi77";
$db_name = "id12210565_osms";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}
?>
