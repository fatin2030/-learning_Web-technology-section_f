<?php
    //sleep(3);
   
    $term = $_POST['term'];
    $con = mysqli_connect('localhost', 'root', '', 'lab_exam');
    $sql = "select * from emp_info where userName like '%{$term}%'";
    $result = mysqli_query($con, $sql);

    $users = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = array('name' => $row['Name'], 'userName' => $row['userName'], 'phone' => $row['phone']);
    }

    $jsonResult = json_encode($users);

    echo $jsonResult;


?>