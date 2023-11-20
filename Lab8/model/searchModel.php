<?php
require_once('db.php');

$con = getConnection();

$query = $_POST['query'];

$sql = "SELECT * FROM empinfo WHERE UserName LIKE '%$query%'";
$result = mysqli_query($con, $sql);
?>
    <table border=1 align="center">
     <br>
    <tr>
        <td>Employee Name</td>
        <td>Company Name</td>
        <td >Contact Number</td>
        <td>User Name</td>
    </tr> 
<?php
if ($result && mysqli_num_rows($result) > 0) {
    while ($user = mysqli_fetch_assoc($result)) {
       ?>

        <tr>
                <td><?= $user['Name'] ?></td>
                <td><?= $user['CompanyName'] ?></td>
                <td><?= $user['ContactNo'] ?></td>
                <td><?= $user['UserName'] ?></td>
              
        
            </tr> 
            <?php

    }
} else {
    echo 'No results found';
}
mysqli_close($con);
?>