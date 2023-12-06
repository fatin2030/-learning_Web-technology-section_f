<?php
require_once('db.php');
function login($id,$password)
{
    
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE id='$id' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;

}


function signup($id,$password,$name,$email,$userType)
{
    $con = getConnection();
    $sql = "INSERT INTO users (id,password,name,email,userType)
    VALUES ('$id','$password','$name','$email','$userType')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function searchEmail($email){
    $con = getConnection();
    $sql = "select * from users where email ='$email'";
    $result = mysqli_query($con, $sql);
    return $result;   
}
function searchUsers($userName){
    $con = getConnection();
    $sql = "select * from users where id ='$userName'";
    $result = mysqli_query($con, $sql);
    return $result;   
}

function showAllUsers() {
    $con = getConnection();
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    return $result; 
}



?>