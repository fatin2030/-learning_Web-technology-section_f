<?php
require_once('../model/productModel.php');
require_once('../controller/sessionCheck.php');

?>

<?php


  if ($_SERVER["REQUEST_METHOD"] == "POST"&& isset($_POST['approveProduct'])) {

    Approve($_POST['approveProduct']);
   
    ?>
    <center>
    <h2>Product Has Been Approved/h2>
    </center>
    <?php
}
else if ($_SERVER["REQUEST_METHOD"] == "POST"&& isset($_POST['declineProduct'])){
    Decline($_POST['declineProduct']);
   
    ?>
    <center>
    <h2>Product Has Been Declined</h2>
    </center>
    <?php

}

?>

<table border=1 align="center">
    <tr>
        <td>Product Name</td>
       
        <td>product Price</td>
   
        <td>Quantity</td>
     

    </tr>
    <?php
$result =showAllProduct(); 

while ($user = mysqli_fetch_assoc($result)) {
  
    ?>
    
    <tr>
        <td><?=$user['ProductName']?></td>
        <td><?=$user['Price']?></td>
        <td><?=$user['Quantity']?></td>
        <form method="post">

        <input type="hidden" name="approveProduct" value="<?= $user['ProductName'] ?>" >
        <input type="hidden" name="declineProduct" value="<?= $user['ProductName'] ?>" >

        <td><input type="submit" value="Approve"> </td> </td>
        <td><input type="submit" value="Decline"> </td> </td>
        </form>
</tr>
<?php
if ($_SESSION['userName'] == 'admin') { ?>
    <a href="../view/admin.php"><h4>Go back</h4></a>
<?php }

else if ($_SESSION['userName'] == 'seller') { ?>
    <a href="../view/seller.php"><h4>Go back</h4></a>
<?php }
 else { ?>
    <a href="../view/buyer.php"><h4>Go back</h4></a>
<?php } ?>
    
<?php

}