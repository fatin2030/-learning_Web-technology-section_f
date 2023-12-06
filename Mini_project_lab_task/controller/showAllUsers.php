<?php

require_once('../model/userModel.php');
require_once('../controller/sessionCheck.php');

  //  session_start();
?>
 



<table border=1 align="center">
    <tr>
     
        <td align="center"  width=30%> ID</td>
        <td>Name</td>
        <td>User Type</td>
    </tr>
        <?php

    $result = showAllUsers();

    while ($user = mysqli_fetch_assoc($result)) {
        
        ?>
        
        <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['name']?></td>
            <td><?=$user['userType']?></td>
        </tr>
        
    <?php
    }

    ?>

</table>

