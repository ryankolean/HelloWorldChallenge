<?php
    /*
    Database connection util. 
    */

    //definitions
    define('DB_HOST','localhost');
    define('DB_NAME','kole0340');
    define('DB_PASSWORD','700970340');
    define('DB_USER','kole0340');

    //set connect variable
    $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    //check connection
    if ($connect->connect_errno) {
        die('Could not connect: ' . $connect->connect_errno);   
    }
?>