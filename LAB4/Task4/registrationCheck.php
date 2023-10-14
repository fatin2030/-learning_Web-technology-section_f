<?php
$userName=$_REQUEST['userName'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];
$email=$_REQUEST['email'];
$check= false;

$validUser="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_";

for($i=0;$i<strlen($userName);$i++)
{
    for($j=0;$j<strlen($validUser);$j++)
    {
        if($userName[$i]==$validUser[$j])
        {
            $check=true;
        }
   
    }
}

if($check!=true)
{
    echo "Invalid Username";
}
if($password!=$confirmPassword)
{
    echo "Invalid Password";
}
else if($email=="")
{
    echo "Write down the Email";
}


else
{
    echo "Registration has been Confirmed";

}



?>