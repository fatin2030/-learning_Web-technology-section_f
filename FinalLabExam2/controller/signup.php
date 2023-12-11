
<?php 

require_once "../model/userModel.php";
require_once "../model/db.php";
session_start();

$nameError = $userNameError = $emailError = $phoneError = $dobError = $passwordError = "";

if (isset($_POST["submit"])) {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $userName = $_REQUEST["userName"];
    $password = $_REQUEST["password"];
    $rePassword = $_REQUEST["rePassword"];
    $user= login($userName, $password);
    $result=searchUsers($userName);
    $check = mysqli_fetch_assoc($result);
    $checkMail=check($email);

   

    if (empty($name)) {
        $nameError = "*Name is required";
    } if (empty($email)) {
        $emailError = "*Email is required";
    } if (empty($userName)) {
        $userNameError = "*Username is required";
    } if (empty($phone)) {
        $phoneError = "*Phone No is required";
    } if (empty($dob)) {
        $dobError = "*DOB is required";
    } if ($password !== $rePassword) {
        $passwordError = "*Passwords do not match";
    }
   

   
    else{
        if ($userName == "" || $password == "" || $email == "" ) {
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
        else if($checkMail){ ?>
            <h1>
        <?php  echo"This mail is  already registered " ; ?>
            </h1>
        <?php
        }
       
        else if($user){
            echo"ACCOUNT EXIST " ;
        ?>
            <a href="../view/login.php"><h3>Sign IN Now</h3></a>
            <?php

        }
        
        else if (!$user) {
           
            $status = signup($name, $email, $userName, $password);
            if ($status) {
               
                
                    $_SESSION['flag'] = 'true';?>
                  
                 <center>
                 <?php  echo"Registration Completed " ; ?>
            
           
                 <a href="../view/login.php"><h3>Sign IN Now</h3></a>
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
    <script src="../js/signupCheck.js"></script>
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
                        <td>Email:</td>
                        <td><input type="email" name="email" id="email" value="" onblur = "checkEmailAvailability()"><b><?php echo $emailError ?> <div id = "result"></div></b></td>
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="userName" id="userName" value="" onkeyup ="userNameCheck()"><b> <div id="checkUserName"></div><?php echo $userNameError ?></b></td>
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
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit">
                            <p >Already have a account? Log in <a href="../view/login.php">Here</a></p>
                        </td>
                    </tr>
                </table>
              

            </td>
        </tr>
    </table>
</form>
  
</body>
</html> 

