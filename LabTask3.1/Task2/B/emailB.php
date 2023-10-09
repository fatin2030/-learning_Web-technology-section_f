<html>
<html lang="en">
<head>
   
</head>
<body>
    
    <fieldset>
        <legend>Email</legend>
        <form method="post" action="" enctype="">
            <input type="email" name="email" value="" /> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
    
        </form>
    </fieldset>
</body>
</html>

<?php
$mail = $_REQUEST['email'];
echo "Mail IS" .$mail;
?>

