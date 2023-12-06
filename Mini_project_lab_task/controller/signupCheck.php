<?php
require_once('../model/userModel.php');
require_once('../model/db.php');
if (isset($_POST["submit"])) {
$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$rePassword = $_REQUEST['rePassword'];
$name = $_REQUEST['name'];
$email= $_REQUEST['email'];
$userType=$_REQUEST['userType'];

$con= getConnection();
$sql = "SELECT * FROM users WHERE id='id' ";
$result = mysqli_query($con, $sql);
$user=mysqli_num_rows($result);
if ($id == "" || $password == "" || $name == "" ||$userType=="") {
    echo "null name or password or id!";
}

else if($user > 0)
{
    echo"User already exixt";

}
 else {
  
    $status = signup($id,$password,$name,$email,$userType);
    if ($status) {
        $_SESSION['flag'] = 'true';
        echo"Registration Confirmed";
        return;
    } 
    else {
        echo "invalid user!";
    }
}
}

if (isset($_POST["email"])) {
$email = $_POST["email"];
$result = searchEmail($email);

if (mysqli_num_rows($result) > 0) {
    echo "<span style='color:red;'> Warning !!!! Email is not available.</span>";
} else {
    echo "<span style='color:green;'>Email is available.</span>";
}
}


if (isset($_POST["userName"])){
$userName =$_POST["userName"];
$result=searchUsers($userName);
if (mysqli_num_rows($result) > 0) {
    echo "<span style='color:red;'> Warning !!!! UserName is not available.</span>";
} else {
    echo "<span style='color:green;'>UserName is available.</span>";
}

}
?>
