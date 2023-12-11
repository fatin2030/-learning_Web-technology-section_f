<?php
require_once('db.php');
function login($userName,$password)
{
    $con = getConnection();
    $sql = "SELECT * FROM userinfo WHERE userName='$userName' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;

}


function signup($name, $email, $userName, $password)
{
    $con = getConnection(); 
    $approved ="Approved";

    $sql = "INSERT INTO userinfo (Name, Email, UserName, Password, Approve)
    VALUES ('$name', '$email', '$userName', '$password', '$approved')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function Decline($userName)
    {
        $con= getConnection();
        $sql ="UPDATE userinfo SET Approve ='Decline' WHERE UserName='$userName'";
        $result = mysqli_query($con, $sql);
       
        return $result;
    }


function showAllUsers() {
    $con = getConnection();
    $sql = "select * from userinfo where userName!='admin'";
    $result = mysqli_query($con, $sql);
    return $result; // Return the result set.
}

function searchUsers($userName){
    $con = getConnection();
    $sql = "select * from userinfo where userName ='$userName'";
    $result = mysqli_query($con, $sql);
    return $result;   
}

function check($email){
    $con= getConnection();
    $sql ="SELECT * FROM userinfo WHERE Email='$email'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}


function checkmail($email){
    $con= getConnection();
    $sql ="SELECT * FROM userinfo WHERE Email='$email'";
    $result = mysqli_query($con, $sql);
    return $result;
}
function search($userName){
    $con = getConnection();
    $sql ="select * from userinfo where UserName = '$userName' and Approve ='Declined'";
  
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }   
}


?>