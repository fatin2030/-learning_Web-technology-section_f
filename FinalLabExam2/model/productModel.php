<?php
require_once('db.php');
function product($productName, $productPrice,$quantity){
        $con = getConnection();
        $sql = "INSERT INTO product (ProductName, Price,Quantity)
        VALUES ('$productName', '$productPrice','$quantity')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
        }

        function showAllProduct() {
            $con = getConnection();
            $sql = "select * from product";
            $result = mysqli_query($con, $sql);
            return $result; // Return the result set.
        }
     function Approve($productName)
    {
        $con= getConnection();
        $sql ="UPDATE product SET Approve ='Approve' WHERE ProductName ='$productName'";
        $result = mysqli_query($con, $sql);
       
        return $result;
    }
     function Decline($productName)
    {
        $con= getConnection();
        $sql ="UPDATE product SET Approve ='Decline' WHERE ProductName ='$productName'";
        $result = mysqli_query($con, $sql);
       
        return $result;
    }

    function showProduct() {
        $con = getConnection();
        $sql = "select * from product where Approve ='Approve'";
        $result = mysqli_query($con, $sql);
        return $result; // Return the result set.
    }