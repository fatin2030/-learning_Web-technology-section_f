<?php 
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if(strlen($username)<2)
    {
        echo "Invalid username format";
    }
    else if (!preg_match('/^[a-zA-Z0-9\.\-_]+$/', $username))
    {
        echo "Invalid username format";
    }
    else if(strlen($password)<8)
    {
        echo "Invalid password format";
    }
    elseif (!preg_match('/[@#$%]/', $password))
    {
        echo "Password must contain one of the special characters";
    }
   
   
    else
    {
        echo "valid username format";
    }
?>