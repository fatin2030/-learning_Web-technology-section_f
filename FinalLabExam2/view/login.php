<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOG IN</title>
    <script src="../js/loginCheck.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 18px;
        }
        .left-align {
            text-align: right;
            margin-top: 10px; /* Adjust the margin as needed */
        }
    </style>
</head>

<body>

    <div class="center">
        <form method="post" action="../controller/loginCheck.php" onsubmit="return logIn();">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend>Signin</legend>
                            <br>
                            Username: <input type="text" name="userName" id="userName" value="" /> <br><br>
                            Password: <input type="password" name="password" id="password" value="" /> <div id ="wrongPass"></div><br><br>

                            <input type="submit" name="submit" value="submit" />
                            <br>
                            <br><div id ='signUp'></div><a href="../controller/signup.php"> Signup</a><br>
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
    </div>

</body>

</html>
