<?php
require_once('../model/userModel.php');

session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    //$userType = isset($_REQUEST['userType']) ? $_REQUEST['userType'] : '';

    if($id == "" || $password == "" ){
    
        echo "null username or password!";
    
    }
    else{
        $status = login($id, $password);
        
            if ($status) {
                $_SESSION['flag'] = 'true';
                
                if ($status['userType'] == 'admin') {
                    header('location: ../view/admin_home.html');
                }
                else if($status['userType'] =='user') {
                    header('location: ../view/admin_home.html');
            
                }
                else{
                    echo "invalid user!";
                }
        }
       
    }
?>