<?php
require_once "../model/userModel.php";
require_once('../controller/sessionCheck.php');



if ($_SERVER["REQUEST_METHOD"] == "POST"&& isset($_POST['decline'])) {

    Decline($_POST['decline']);
   
    ?>
    <center>
    <h2>Product Has Been Declined/h2>
    </center>
    <?php
}

$result =showAllUsers(); 


?>
<table border=1 align="center">
    <tr>
        <td>Name</td>
        <td >Email</td>
        <td>User Name</td>
        <td>Status</td>

    </tr>
    <?php

while ($user = mysqli_fetch_assoc($result)) {
  
    ?>
    
    <tr>
        <td><?=$user['Name']?></td>
        <td><?=$user['Email']?></td>
        <td><?=$user['UserName']?></td>
        <td><?=$user['Approve']?></td>
    <form method="post">

    <input type="hidden" name="decline" value="<?= $user['Name'] ?>" >
    
    <td><input type="submit" value="Decline"> </td> </td>
</form>
    </tr>
    </form>
    
<?php

}

?>

</table>
<a href="../view/admin.php"><h4>Go back</h4></a>
