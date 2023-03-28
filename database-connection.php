<?php


// PDO with data base connection


try{
    $conn= new PDO("mysql:host=localhost;dbname=assignment08","root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected succesfully";
}catch(PDOException $e){
    echo "connection failed".$e->getMessage();
}
