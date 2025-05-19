<?php
// Enable detailed error reporting

require_once 'connection.php';

$query8 = "SELECT * FROM product WHERE Categorie='tvUnit' ";
$con=db_connect();
$res8 = $con->query($query8);


// Close the connection
$con->close();
?>