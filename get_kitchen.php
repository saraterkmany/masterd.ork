<?php
// Enable detailed error reporting

require_once 'connection.php';

$query6 = "SELECT * FROM product WHERE Categorie='kitchen' ";
$con=db_connect();
$res6 = $con->query($query6);


// Close the connection
$con->close();
?>