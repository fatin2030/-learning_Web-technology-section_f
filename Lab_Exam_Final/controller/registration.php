
<?php 

require_once "../model/userModel.php";
require_once "../model/db.php";
require_once('../controller/sessionCheck.php');

$nameError = $userNameError = $emailError = $phoneError = $dobError = $passwordError = "";

if (isset($_POST["submit"])) {
    $name = $_REQUEST["name"];
    $userName = $_REQUEST["userName"];
    $password = $_REQUEST["password"];
    $rePassword = $_REQUEST["rePassword"];
    $phone = $_REQUEST["phone"];
    $user= login($userName, $password);
    $result=searchUsers($userName);
    $check = mysqli_fetch_assoc($result);

    $checkUserName= false;
$checkPass=false;

$validUser="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$validPass="@#*.";

for($i=0;$i<strlen($userName);$i++)
{
    for($j=0;$j<strlen($validUser);$j++)
    {
        if($userName[$i]==$validUser[$j])
        {
            $checkUserName=true;
        }
   
    }
}

for($i=0;$i<strlen($password);$i++)
{
    for($j=0;$j<strlen($validPass);$j++)
    {
        if($password[$i]==$validPass[$j])
        {
            $checkPass=true;
        }
   
    }

}


    if (empty($name)) {
        $nameError = "*Name is required";
    }  if (empty($userName)) {
        $userNameError = "*Username is required";
    } if (empty($phone)) {
        $phoneError = "*Phone No is required";
    }  if ($password !== $rePassword) {
        $passwordError = "*Passwords do not match";
    }
    if (!$checkUserName) {
        $userNameError = "Write a valid user Name";
    }
    if(!$checkPass){
        $passwordError = "* Password SHould contain @#*.";
    }
    else{
        if ($userName == "" || $password == ""|| $phone == "" ) {
            echo "null username or password or email!";
        } 
        else if($user){ ?>
         <center>
        <?php  echo"ACCOUNT EXIST " ; ?>
            
           
        <a href="../view/login.php"><h3>Sign IN Now</h3></a>
        </center>
        <?php
        
        }
        else if($check){ ?>
            <h1>
        <?php  echo"User Name Has been already Taken. Try Another One " ; ?>
            </h1>
        <?php
        }
        
        else if($user){
            echo"ACCOUNT EXIST " ;
        ?>
          
            <?php

        }
        
        else if (!$user) {
            $status = signup($name,$phone, $userName, $password);
            if ($status) {
        
                
                    ?>
                  
                 <center>
                 <?php  echo"Registration Completed " ; ?>
            
           
                 </center>
                 <?php

            }
                else{
                    echo "Registratin Faild";
                }
            } 
            else {
                echo "invalid user!";
            }

    }

}
?>

<html lang="en">
<head>
    <title>Registration</title>
    <script src="../controller/registration.js"></script>
</head>
<body>
<form method="post"  enctype="multipart/form-data" novalidate onsubmit="return signupCheck();">

    <table width="100%" height="100%">
        <tr>
            <td align="center" valign="middle">
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <td colspan="2" align="center">
                            <h2>Registration</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" id="name" value=""><b><?php echo $nameError ?></b></td>
                    </tr>
                   
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="userName" id="userName" value=""><b><?php echo $userNameError ?></b></td>
                    </tr>
                    <tr>
                        <td>PASSword:</td>
                        <td><input type="password" name="password" id="password" value=""><b><?php echo $passwordError ?></b></td>
                    </tr>
                    <tr>
                        <td>REType-PASSword:</td>
                        <td><input type="password" name="rePassword" id="rePassword" value=""></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type="number" name="phone" id="phone" value=""><b><?php echo $phoneError ?></b></td>
                    </tr>
            

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit">
                            <p >Home <a href="../view/adminHome.php">Here</a></p>
                        </td>
                    </tr>
                </table>
              

            </td>
        </tr>
    </table>
</form>
  
</body>
</html> 
