<?php


// Enable detailed error reporting

                require_once 'connection.php';

                $query= "SELECT * FROM product limit 6  ";
                $con=db_connect();
                $res = $con->query($query);

                $con->close();

?>