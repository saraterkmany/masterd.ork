<?php

require_once 'connection.php';

$query3 = "SELECT * FROM product  limit 1 ";
$con=db_connect();
$r2=$con->query($query3);
// Close the connection
                $con->close();
?>