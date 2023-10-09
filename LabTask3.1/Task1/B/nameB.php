<html>
<html lang="en">
<head>
   
</head>
<body>
    
    <fieldset>
        <legend>NAME</legend>
        <form method="post" action="" enctype="">
            <input type="text" name="username" value="" /> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
    
        </form>
    </fieldset>
</body>
</html>

<?php
$username = $_REQUEST["username"];
echo "USER NAME IS" .$username;
?>

