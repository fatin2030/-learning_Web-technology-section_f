<?php
    $name = '';
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        echo 'Name is '. $username;
    }
?>

<html>
<html lang="en">
<head>
    
</head>
<body>
<fieldset>
        <legend>NAME</legend>
        
        <form action="" method="post">
            <input type="text" value="<?php echo $name ?>" name="username"> <br>
            <hr>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </fieldset>
</body>
</html>