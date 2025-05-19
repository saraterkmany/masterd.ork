<?php
// Enable detailed error reporting

require_once 'connection.php';

$query7 = "SELECT * FROM product WHERE Categorie='bedRoom' ";
$con=db_connect();
$res7 = $con->query($query7);


// Close the connection
$con->close();
?>