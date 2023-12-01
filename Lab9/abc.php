<?php
    //sleep(3);
   
    $term = $_POST['term'];
    $con = mysqli_connect('localhost', 'root', '', 'lab_work');
    $sql = "select * from users where UserName like '%{$term}%'";
    $result = mysqli_query($con, $sql);

    $users = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = array('Name' => $row['Name'], 'Email' => $row['Email'], 'UserName' => $row['UserName']);
    }

    $jsonResult = json_encode($users);

    echo $jsonResult;


?>
