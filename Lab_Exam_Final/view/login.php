<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log IN</title>

    <script src="../controller/loginCheck.js"></script>

</head>
<body>
<form method="post" action="../controller/loginCheck.php" onsubmit="return logIn();">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend>Signin</legend>
                            <br>
                            Username: <input type="text" name="userName" id="userName" value="" /> <br><br>
                            Password: <input type="password" name="password" id="password" value="" /> <br><br>

                            <input type="submit" name="submit" value="submit" />
                            <br>
                            <br><a href="../controller/signup.php"> Signup</a><br>
                               <div class="left-align">
                                <h5>
                            <a href="forgetPass.php">Forget Password?</a>
                            </h5>
                            </div>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </form>
    
</body>
</html>