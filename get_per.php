<?php
// Enable detailed error reporting

require_once 'connection.php';

$query2 = "SELECT * FROM product WHERE Categorie='per' ";
$con=db_connect();
$res2 = $con->query($query2);


// Close the connection
$con->close();
?>