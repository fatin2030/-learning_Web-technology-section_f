<?php
    $mail = '';
    if(isset($_POST['submit'])){
        $mail = $_POST['mail'];
        echo 'Mail is '. $mail;
    }
?>

<html>
<html lang="en">
<head>
    
</head>
<body>
<fieldset>
        <legend>Mail</legend>
        
        <form action="" method="post">
            <input type="email" value="<?php echo $mail ?>" name="mail"> <br>
            <hr>
            <input type="submit" name="submit" value="submit" >
        </form>
    </fieldset>
</body>
</html>