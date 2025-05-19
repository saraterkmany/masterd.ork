<?php
// Enable detailed error reporting

require_once 'connection.php';

$query1 = "SELECT * FROM product WHERE Categorie='wood' ";
$con=db_connect();
$res1 = $con->query($query1);


// Close the connection
$con->close();
?>