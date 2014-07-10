<?php
    /*
    Server-side validation checks
        Used by insert.php for pre-insertion checks
    */


//Returns 0 if the string is properly formatted
function checkStringLength($string,$min,$max)
{
    if($string == '')
        {return 1;}
    elseif(strlen($string) > $max)
        {return 1;}
    elseif(strlen($string) < $min)
        {return 1;}
    else
        {return 0;}
    
}
//Returns 0 if the string is properly formatted
function checkAddress2Length($string,$min,$max)
{
    if($string == '')
        {return 0;}
    elseif(strlen($string) > $max)
        {return 1;}
    elseif(strlen($string) < $min)
        {return 1;}
    else
        {return 0;}
}

//Returns 0 if zip matches the regex
function checkZip($zip)
{
    if(preg_match("/^(\d{5})(-\d{4})?$/", $zip))
        {return 0;}
    else
        {return 1;}
}

?>