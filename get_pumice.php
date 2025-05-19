<?php
// Enable detailed error reporting

require_once 'connection.php';

$query5 = "SELECT * FROM product WHERE Categorie='pumice' ";
$con=db_connect();
$res5 = $con->query($query5);


// Close the connection
$con->close();
?>