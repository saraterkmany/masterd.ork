<?php
// Enable detailed error reporting

require_once 'connection.php';

$query4 = "SELECT * FROM product WHERE Categorie='paint' ";
$con=db_connect();
$res4 = $con->query($query4);


// Close the connection
$con->close();
?>