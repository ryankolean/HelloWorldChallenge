<?php
    /*
    Processes insertation of registration information into the mySQL database 
    */

    header('Location: http://webtech.kettering.edu/~kole0340/confirm.htm');
    include 'checks.php';
    include 'connect.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $dateTime = date("YmdHis");

    //String length validation, matches client-side checks
    if (checkStringLength($firstName,0,32) == 1 or checkStringLength($lastName,0,32) == 1 or checkStringLength($address1,0,128) == 1 or checkAddress2Length($address2,0,128) == 1       or checkStringLength($state,0,2) == 1 or checkStringLength($city,0,64) == 1 or checkStringLength($country,0,2) == 1)
    {
        die('Failed server-side validation: string length');   
    }
    //Check Zip follows "5 digits or 5 and "-" plus 4 more digits" rule
    if (checkZip($zip) == 1)
    {
        die('Failed server-side validation: zip failed');
    }

    //Prepare, bind, execute insert
    $statement = mysqli_prepare($connect, "INSERT INTO HelloWorldChallenge (firstName, lastName, address1, address2, city, state, zip, country, date) VALUE(?,?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, 'sssssssss', mysql_real_escape_string($firstName), $lastName, $address1, $address2, $city, $state, $zip, $country, $dateTime);
    mysqli_stmt_execute($statement);

    //close the database connection
    mysqli_close($connect);
?>