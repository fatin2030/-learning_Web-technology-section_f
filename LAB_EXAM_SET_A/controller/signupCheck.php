<?php
require_once('../model/userModel.php');
require_once('../model/db.php');

$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$rePassword = $_REQUEST['rePassword'];
$name = $_REQUEST['name'];
$userType=$_REQUEST['userType'];

$con= getConnection();
$sql = "SELECT * FROM users WHERE id='id' ";
$result = mysqli_query($con, $sql);
$user=mysqli_num_rows($result);
if ($id == "" || $password == "" || $name == "" ) {
    echo "null name or password or id!";
}

else if($user > 0)
{
    echo"User already exixt";

}
 else {
  
    $status = signup($id,$password,$name,$userType);
    if ($status) {
        $_SESSION['flag'] = 'true';
        echo"Registration Confirmed";
    } 
    else {
        echo "invalid user!";
    }
}
?>
