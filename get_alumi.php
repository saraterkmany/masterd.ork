<?php
// Enable detailed error reporting

require_once 'connection.php';

$query3 = "SELECT * FROM product WHERE Categorie='alumi' ";
$con=db_connect();
$res3 = $con->query($query3);


// Close the connection
$con->close();
?>