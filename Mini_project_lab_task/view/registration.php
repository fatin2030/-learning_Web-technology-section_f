<!DOCTYPE html>
<html lang="en">
<head>
<script src="../js/registrationCheck.js"></script>
	<title>Document</title>
</head>
<body>
<center>
<form method="post"action="../controller/signupCheck.php" enctype=""  novalidate onsubmit="return signupCheck();">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id" id="id" onblur="checkUserNameAvailability()" ><br/>   <div id ="checkUserName"></div>
					Password<br/><input type="password" name="password" id="password"><br/>
					Confirm Password<br/><input type="password" name="rePassword"  id="rePassword"><br/>
					Name<br/><input type="text" name="name"  id="name"><br/>
					Email<br/><input type="text" name="email" id="email" onblur="checkEmailAvailability()"> <div id="result"></div><br/>
					User Type<hr/>
					<input type="radio" name="userType" id="userType" value="user"/>User
					<input type="radio" name="userType" id="userType" value="admin"/>Admin
					<hr/>
					
					<input type="submit" name="submit" value="Sign Up">
					<a href="../view/login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>

		