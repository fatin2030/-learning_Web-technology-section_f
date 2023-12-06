

<html lang="en">

<head>
    <title>LOG IN</title>
	<script src="../js/loginCheck.js"></script>
</head>

<body>
	<center>
		<form method="post" action="../controller/loginCheck.php" enctype=""onsubmit="return logIn();"> 
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend><h3>LOGIN</h3></legend>
						User Id<br/>
						<input type="text" name="id" id="id"><br/>                               
						Password<br/>
						<input type="password" name="password" id="password">
						<br /><hr/>
						<input type="submit" name="submit" value="Login">
						<a href="registration.php">Register</a>
					</fieldset>
				</td>
			</tr>                                
		</table>
	</form>
	</center>
</body>

</html>