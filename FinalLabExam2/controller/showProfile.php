<?php

require_once('../model/userModel.php');
require_once('../controller/sessionCheck.php');
?>

<table align="center">
<?php
  $result = searchUsers($_SESSION['userName']); 

while ($user = mysqli_fetch_assoc($result)) {
 
    ?>
    <tr>

   
        <td></td>

        <td>
        <h2>User Information</h2>


    <tr>

    <td></td>
        <td><b>Name  :   <?=$user['Name']?></b></td><br>
    </tr>
    
    <tr>

    <td></td>
        <td><b>Email :  <?=$user['Email']?></b></td></tr><br>
    <tr> 

     <td></td>
    <td><b>Username :    <?=$user['UserName']?></b></td>
    </tr>

    <tr>
        <td></td>
        <td><b>Status : <?=$user['Approve']?></b></td></tr>
  
        </td>
    </tr>
<?php
}
 
?>

</table>


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
