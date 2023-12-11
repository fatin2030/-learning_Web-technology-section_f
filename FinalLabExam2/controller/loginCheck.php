<?php
require_once('../model/userModel.php');

session_start();


    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];
    $_SESSION['userName'] = $userName;
    $_SESSION['password'] = $password;
    $result=searchUsers($userName);
    $check = mysqli_fetch_assoc($result);
    $valid = search($userName);
  


    if($userName == "" || $password == "" ){
    
        echo "null username or password!";
    
    }
    else{
        $status = login($userName, $password);
       
        
            if ($status) {
                $_SESSION['flag'] = 'true';
                
                if ($userName == 'admin') {
                    header('location: ../view/admin.php');
                }
                else if($userName=='seller'||$userName=='seller1'||$userName=='seller2'){
                    header('location: ../view/seller.php');
                    

                }
                else if($userName !='admin') {
                    header('location: ../view/buyer.php');
                  
                   
                    $_SESSION['username']=$status['UserName'];
                }
               
        }
        else{
            if($check){
               ?>
                <center>
                <h3>WRONG PASSWORD</h3>

               <br> <a href="../view/login.php">GO LOG IN PAGE</a> </center>
                <?php
            }
            else{
            echo "invalid user!";
            ?>
            <center>
                <h3>Not a valid user!! Don't worry register now</h3>
            <a href="../controller/signup.php">Register Now </a>
            </center>
            <?php
            }
        }
       
    }
?>