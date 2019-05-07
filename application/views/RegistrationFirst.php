<!DOCTYPE html>
<html>
<head>
<title>User Registration Form</title>
</head>

<body>
	<form method="post">
		<table width="600" align="centre" border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td colspan="2"><?php echo @$error;?></td>
	</tr>
	<tr>
		<td width="230">Enter Your First Name </td>
		<td width="329"><input type="text" name="firstname"/></td>
	</tr>
	<tr>
		<td>Enter Your Second Name </td>
		<td><input type="text" name="secondname"/></td>
	</tr>
	<tr>
		<td>Enter Your Email Address </td>
		<td><input type="text" name="email"/></td>
	</tr>
	
	<tr>
		<td>Enter a User Name </td>
		<td><input type="text" name="username"/></td>
	</tr>
	
	<tr>
		<td>Enter a Password</td>
		<td><input type ="password" name="password"/><td>
	</tr>
	
	<tr>
		<td>Enter your Address </td>
		<td><input type="text" name="address"/></td>
	</tr>
	<tr>
		<td>Enter your gender</td>
		<td><input type="text" name="gender"/></td>
	</tr>
	<tr>
		<td>Enter your NHS</td>
		<td><input type="text" name="NHS"/></td>
	</tr>
	<tr>
		<td>Enter your Height</td>
		<td><input type="text" name="height"/></td>
	</tr>
	<tr>
		<td>Enter Your Weight</td>
		<td><input type="text" name="weight"/></td>
	</tr>
	<tr>
		<td colspan="2" align="centre">
		<input type="submit" name="register" value="Register Me"/></td>
		</tr>
		</table>
		</form>
		</body>
		</html>
		