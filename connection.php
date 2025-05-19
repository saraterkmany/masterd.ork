<?php
function db_connect(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";
    try{
        $conn=new mysqli($servername,$username,$password,$dbname);
    }
    catch(Exception $e){
        die($e->getMessage());
    }
    finally{
        return $conn;
    }
}