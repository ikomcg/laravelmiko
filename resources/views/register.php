<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Sample</title>
</head>
<body>
	<form action="user/register"method='post'>
		<input type="hidden" name='_toke' value="<?php echo csrf_token() ?>">
		<table>
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>password</td>
				<td>
					<input type="text" name="password">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Register">
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>